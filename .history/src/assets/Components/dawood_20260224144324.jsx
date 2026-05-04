import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Col, Container, Row, Spinner } from 'react-bootstrap';

function Dawood() {
  const [pageData, setPageData] = useState(null);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Apne Page ki ID ke mutabiq URL change karein (Example Page ID: 18)
    // Ya phir slug se fetch karein: /pages?slug=the-dawood-foundation
    const url = "https://wpstaging.a2zcreatorz.com/magnifi-react/wp-json/wp/v2/the-dawood-foundatio?_embed";

    axios.get(url)
      .then((res) => {
        if (res.data && res.data.length > 0) {
          setPageData(res.data[0]);
        }
        setLoading(false);
      })
      .catch((err) => {
        console.error("Error fetching Dawood Foundation data:", err);
        setLoading(false);
      });
  }, []);

  if (loading) {
    return (
      <div className="text-center py-5">
        <Spinner animation="border" variant="danger" />
      </div>
    );
  }

  // Fallback image aur content agar API se na miley
  const featuredImg = pageData?._embedded?.['wp:featuredmedia']?.[0]?.source_url || 'https://via.placeholder.com/600x400';
  const title = pageData?.title?.rendered || "Education Inspiring Social Change";
  const content = pageData?.content?.rendered || "The Dawood Foundation (TDF) was the 'materialization of a decade-old dream'...";

  return (
    <section className='dawood-sec' style={{ padding: '80px 0' }}>
      <Container>
        <Row className="align-items-center">
          {/* Left Side: Content */}
          <Col md={6} className="pe-md-5">
            <h2 
              style={{ color: '#e65c2e',textAlign:'left',font-size:'' marginBottom: '25px' }}
              dangerouslySetInnerHTML={{ __html: title }}
            />
            <div 
              style={{ fontSize: '1.1rem', lineHeight: '1.8', color: '#333', textAlign: 'justify' }}
              dangerouslySetInnerHTML={{ __html: content }} 
            />
          </Col>

          {/* Right Side: Image */}
          <Col md={6} className="mt-4 mt-md-0">
            <div className="dawood-img-wrapper" style={{ boxShadow: '20px 20px 0px #f0f0f0' }}>
              <img 
                src={featuredImg} 
                alt="The Dawood Foundation" 
                className="img-fluid" 
                style={{ width: '100%', height: 'auto', display: 'block' }}
              />
            </div>
          </Col>
        </Row>
      </Container>
    </section>
  );
}

export default Dawood;