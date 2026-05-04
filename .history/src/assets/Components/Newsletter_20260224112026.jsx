import React, { useEffect, useState } from 'react';
import axios from 'axios';
import InnerBanner from "../Components/InnerBanner";
import Header from '../Components/Header';
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Slider from 'react-slick';
import { Button, Spinner } from 'react-bootstrap';

function Newsletter() {
  const [newsletters, setNewsletters] = useState([]);
  const [loading, setLoading] = useState(true);

  // 1. Fetch data from WordPress
  useEffect(() => {
    const url = "https://wpstaging.a2zcreatorz.com/magnifi-react/wp-json/wp/v2/newsletter?_embed";
    
    axios.get(url)
      .then((res) => {
        setNewsletters(res.data);
        setLoading(false);
      })
      .catch((err) => {
        console.error("Error fetching newsletters:", err);
        setLoading(false);
      });
  }, []);

  const settings = {
    dots: false,
    infinite: newsletters.length > 3, // Only loop if more than 3 items
    arrows: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          dots: false,
        }
      }
    ]
  };

  return (
    <section className='sletter-sec' style={{ marginBottom: '250px', overflow: 'hidden', position: 'relative' }}>
      <h2 className='pt-5 pb-5 text-center'>MagnifiScience<br />Newsletters</h2>

      {loading ? (
        <div className="text-center"><Spinner animation="border" /></div>
      ) : (
        <Slider {...settings}>
          {newsletters.map((post) => {
           
            const imgUrl = post._embedded?.['wp:featuredmedia']?.[0]?.source_url || './src/assets/imagee/sletter1.jpg';
            
    
            const pdfUrl = post.acf?.newsletter_pdf || "#";

            return (
              <div key={post.id}>
                <div className='main-slide'>
                  <img 
                    src={imgUrl} 
                    className='w-75 mx-auto' 
                    alt={post.title.rendered} 
                    style={{ height: '350px', objectFit: 'cover' }} 
                  />
                  <div className='slt-info text-center'>
                    <h4 
                        className='w-75 mx-auto' 
                        dangerouslySetInnerHTML={{ __html: post.title.rendered }} 
                    />
                    <Button 
                        href={pdfUrl} 
                        target="_blank" 
                        className='mt-3 w-50'
                        style={{ backgroundColor: '#b22222', border: 'none' }}
                    >
                      Read More
                    </Button>
                  </div>
                </div>
              </div>
            );
          })}
        </Slider>
      )}
    </section>
  );
}

export default Newsletter;