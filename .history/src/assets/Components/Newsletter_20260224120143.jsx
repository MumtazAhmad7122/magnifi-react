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
    // ?_embed lagane se images aur baki data sahi se load hota hai
    const url = "https://wpstaging.a2zcreatorz.com/magnifi-react/wp-json/wp/v2/newsletter?_embed";
    
    axios.get(url)
      .then((res) => {
        setNewsletters(Array.isArray(res.data) ? res.data : []);
        setLoading(false);
      })
      .catch((err) => {
        console.error("API Error:", err);
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
      { breakpoint: 1024, settings: { slidesToShow: 2 } },
      { breakpoint: 768, settings: { slidesToShow: 1 } }
    ]
  };

  if (loading) return <div className="text-center py-5"><Spinner animation="border" variant="danger" /></div>;

  return (
    <section className='sletter-sec' style={{ marginBottom: '100px', overflow: 'hidden' }}>
      <Container>
        <h2 className='text-center pt-5 pb-5' style={{ color: '#b22222', fontWeight: 'bold' }}>
          MagnifiScience<br />Newsletters
        </h2>

        <Slider {...settings}>
          {newsletters.map((post) => {
            // Featured Image nikalne ka sahi tarika
            const imgUrl = post._embedded?.['wp:featuredmedia']?.[0]?.source_url;
            
            // PDF Link Logic: 
            // Agar aapne WP mein 'File URL' set kar diya hai, toh ye link kaam karega.
            const pdfLink = post.acf?.pdf_upload || "#";

            return (
              <div key={post.id} className="px-2">
                <div className='main-slide' style={{ border: '1px solid #ddd', borderRadius: '10px', padding: '15px' }}>
                  <img 
                    src={imgUrl || 'https://via.placeholder.com/350x450'} 
                    className='w-100' 
                    alt="newsletter" 
                    style={{ height: '350px', objectFit: 'cover', borderRadius: '5px' }} 
                  />
                  <div className='slt-info text-center mt-3'>
                    <h4 
                      style={{ fontSize: '1.1rem', minHeight: '50px' }}
                      dangerouslySetInnerHTML={{ __html: post.title.rendered }}
                    />
                    <Button 
                      href={pdfLink} 
                      target="_blank" 
                      rel="noopener noreferrer"
                      className='mt-3 w-75'
                      style={{ backgroundColor: '#b22222', border: 'none' }}
                      disabled={pdfLink === "#"} // Agar link nahi hai toh button band ho jaye
                    >
                      {pdfLink === "#" ? "No PDF Uploaded" : "Download PDF"}
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