import React, { useEffect, useState } from 'react';
import { Container, Row, Col } from 'react-bootstrap';

const JugaarGallery = () => {
    const [acfData, setAcfData] = useState(null);

    useEffect(() => {
        // Replace 123 with your WordPress Page ID
        fetch('https://your-website.com/wp-json/wp/v2/pages/123')
            .then(res => res.json())
            .then(data => setAcfData(data.acf))
            .catch(err => console.error("Error fetching ACF:", err));
    }, []);

    if (!acfData) return <div className="text-center p-5">Loading...</div>;

    return (
        <Container className="my-5">
            {/* 1. Header & Description Section */}
            <Row className="mb-4">
                <Col>
                    <p className="lead fw-bold mb-2">
                        {acfData.jugaar_ghar_headline || "Jugaar Ghar is a specially curated space..."}
                    </p>
                    <div 
                        className="text-muted" 
                        dangerouslySetInnerHTML={{ __html: acfData.jugaar_ghar_description }} 
                    />
                </Col>
            </Row>

            {/* 2. Gallery Grid Section */}
            <Row className="g-3"> {/* g-3 adds the Bootstrap gutter/spacing */}
                {acfData.jugaar_ghar_gallery && acfData.jugaar_ghar_gallery.map((image) => (
                    <Col 
                        key={image.id} 
                        xs={12}   // 1 image per row on mobile
                        sm={6}    // 2 images per row on tablets
                        md={4}    // 3 images per row on small laptops
                        lg={3}    // 4 images per row (matching your top row)
                    >
                        <div className="gallery-card">
                            <img 
                                src={image.sizes.large || image.url} 
                                alt={image.alt} 
                                className="img-fluid rounded shadow-sm w-100"
                                style={{ 
                                    height: '220px', 
                                    objectFit: 'cover' 
                                }}
                            />
                        </div>
                    </Col>
                ))}
            </Row>
        </Container>
    );
};

export default JugaarGallery;