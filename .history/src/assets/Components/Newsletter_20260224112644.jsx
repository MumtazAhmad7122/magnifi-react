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
    // Replace with your actual API endpoint
    const url = "https://wpstaging.a2zcreatorz.com/magnifi-react/wp-json/wp/v2/newsletter?_embed";
    
    axios.get(url)
      .then((res) => {
        // Ensure we are setting an array to state
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
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: { slidesToShow: 2 }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true
        }
      }
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
    <section className='sletter-sec' style={{ marginBottom: '150px', overflow: 'hidden' }}>
      <Container>
        <h2 className='pt-5 pb-5 text-center' style={{ color: '#b22222', fontWeight: 'bold' }}>
          MagnifiScience<br />Newsletters
        </h2>

        <Slider {...settings}>
          {newsletters.map((post) => {
            // 1. Logic for Featured Image
            const imgUrl = post._embedded?.['wp:featuredmedia']?.[0]?.source_url || './src/assets/imagee/sletter1.jpg';
            
            // 2. Logic for ACF Button Link
            // IMPORTANT: 'newsletter_pdf' must match your ACF Field Name exactly.
            const pdfUrl = post.acf?.newsletter_pdf || "#";

            return (
              <div key={post.id} className="px-2">
                <div className='main-slide' style={{ border: '1px solid #eee', borderRadius: '10px', paddingBottom: '20px' }}>
                  <img 
                    src={imgUrl} 
                    className='w-100' 
                    alt={post.title.rendered} 
                    style={{ height: '350px', objectFit: 'cover', borderRadius: '10px 10px 0 0' }} 
                  />
                  <div className='slt-info text-center mt-3'>
                    <h4 
                      className='px-3'
                      style={{ fontSize: '1.1rem', minHeight: '50px' }}
                      dangerouslySetInnerHTML={{ __html: post.title.rendered }} 
                    />
                    <Button 
                      href={pdfUrl} 
                      target="_blank" 
                      rel="noopener noreferrer"
                      className='mt-3 px-4'
                      style={{ backgroundColor: '#b22222', border: 'none', borderRadius: '5px' }}
                    >
                      Read More
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