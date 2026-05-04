import React, { useEffect, useState } from 'react';
import axios from 'axios';
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Slider from 'react-slick';
import { Button, Spinner, Container } from 'react-bootstrap';

function Newsletter() {
  const [newsletters, setNewsletters] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // FIX: URL ke aage ?_embed lagana zaroori hai images fetch karne ke liye
    const url = "https://wpstaging.a2zcreatorz.com/magnifi-react/wp-json/wp/v2/newsletter?_embed";
    
    axios.get(url)
      .then((res) => {
        setNewsletters(Array.isArray(res.data) ? res.data : [res.data]);
        setLoading(false);
      })
      .catch((err) => {
        console.error("Error fetching newsletters:", err);
        setLoading(false);
      });
  }, []);

  const settings = {
    dots: false,
    infinite: newsletters.length > 3,
    arrows: true,
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      { breakpoint: 1024, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1, arrows: true } }
    ]
  };

  if (loading) {
    return (
      <div className="text-center py-5">
        <Spinner animation="border" variant="danger" />
        <p className="mt-2">Loading Newsletters...</p>
      </div>
    );
  }

  return (
    <section className='sletter-sec' style={{ marginBottom: '200px', overflow: 'hidden' }}>
      <Container>
        <h2 className='pt-5 pb-5 text-center' style={{ color: '#b22222', fontWeight: 'bold' }}>
          MagnifiScience<br />Newsletters
        </h2>

        <Slider {...settings}>
          {newsletters.map((post) => {
            // IMAGE LOGIC: embedded data se image nikalna
            const featuredImage = post._embedded?.['wp:featuredmedia']?.[0]?.source_url;
            
            // Agar featured image nahi milti to fallback image use hogi
            const imgUrl = featuredImage || './src/assets/imagee/sletter1.jpg';
            
            // ACF PDF URL
            const pdfUrl = post.acf?.pdf_upload;
            const isValidUrl = typeof pdfUrl === 'string' && pdfUrl.startsWith('http');

            return (
              <div key={post.id} className="px-2">
                <div className='main-slide' style={{ border: '1px solid #eee', borderRadius: '10px', paddingBottom: '20px', backgroundColor: '#fff' }}>
                  <img 
                    src={imgUrl} 
                    className='w-100' 
                    alt={post.title.rendered} 
                    style={{ height: '350px', objectFit: 'cover', borderRadius: '10px 10px 0 0' }} 
                    // Fallback in case of broken image
                    onError={(e) => { e.target.src = "https://via.placeholder.com/350x350?text=No+Image+Found"; }}
                  />
                  <div className='slt-info text-center mt-3'>
                    <h4 
                      className='px-3'
                      style={{ fontSize: '1.1rem', minHeight: '50px' }}
                      dangerouslySetInnerHTML={{ __html: post.title.rendered }} 
                    />
                    
                    <Button 
                      href={isValidUrl ? pdfUrl : "#"} 
                      target={isValidUrl ? "_blank" : "_self"} 
                      rel="noopener noreferrer"
                      className='mt-3 px-4'
                      disabled={!isValidUrl}
                      style={{ 
                        backgroundColor: isValidUrl ? '#b22222' : '#cccccc', 
                        border: 'none', 
                        borderRadius: '5px' 
                      }}
                    >
                      {isValidUrl ? "Read More" : "No PDF Available"}
                    </Button>
                  </div>
                </div>
              </div>
            );
          })}
        </Slider>
      </Container>
    </section>
  );
}

export default Newsletter;