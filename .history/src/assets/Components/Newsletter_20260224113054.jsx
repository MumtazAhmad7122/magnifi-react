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
    // Using the staging URL from your screenshot
    const url = "https://wpstaging.a2zcreatorz.com/magnifi-react/wp-json/wp/v2/newsletter?_embed";
    
    axios.get(url)
      .then((res) => {
        // Validation to prevent ".map is not a function" error
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
    <section className='sletter-sec' style={{ marginBottom: '100px' }}>
      <Container>
        <h2 className='text-center pt-5 pb-5'>MagnifiScience Newsletters</h2>
        <Slider {...settings}>
          {newsletters.map((post) => {
            const imgUrl = post._embedded?.['wp:featuredmedia']?.[0]?.source_url;
            
            // --- DYNAMIC LINK LOGIC ---
            // 1. Check the 'URL' field first
            // 2. If empty, check the 'Pdf Upload' field (standard ACF file return is an object or URL)
            // Replace 'url' and 'pdf_upload' with your EXACT ACF field names (slugs)
            const manualUrl = post.acf?.url;
            const pdfFileUrl = typeof post.acf?.pdf_upload === 'string' 
                               ? post.acf.pdf_upload 
                               : post.acf?.pdf_upload?.url;

            const finalLink = manualUrl || pdfFileUrl || "#";

            return (
              <div key={post.id} className="px-2">
                <div className='main-slide' style={{ border: '1px solid #ddd', borderRadius: '10px' }}>
                  <img src={imgUrl} className='w-100' style={{ height: '300px', objectFit: 'cover' }} alt="newsletter" />
                  <div className='text-center p-3'>
                    <h4 dangerouslySetInnerHTML={{ __html: post.title.rendered }} style={{ minHeight: '60px' }} />
                    <Button 
                      href={finalLink} 
                      target="_blank" 
                      className='mt-2' 
                      style={{ backgroundColor: '#b22222', border: 'none' }}
                    >
                      {manualUrl ? "Visit Website" : "View PDF"}
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