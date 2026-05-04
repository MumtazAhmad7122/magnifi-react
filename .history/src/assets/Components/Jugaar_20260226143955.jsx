import React, { useEffect, useState } from 'react';
import { Container, Row, Col, Spinner } from 'react-bootstrap';

const Jugaar = () => {
    const [acfData, setAcfData] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        // Fetching from your specific staging URL
        fetch('https://wpstaging.a2zcreatorz.com/magnifi-react/wp-json/wp/v2/jugaar-ghar')
            .then(res => {
                if (!res.ok) throw new Error("Failed to fetch data");
                return res.json();
            })
            .then(data => {
                // IMPORTANT: WP REST API returns an array. We take the first item [0]
                if (data && data.length > 0) {
                    setAcfData(data[0].acf);
                } else {
                    setError("No data found in the API response.");
                }
                setLoading(false);
            })
            .catch(err => {
                console.error("Error fetching ACF:", err);
                setError(err.message);
                setLoading(false);
            });
    }, []);

    if (loading) {
        return (
            <Container className="text-center my-5">
                <Spinner animation="border" variant="primary" />
                <p className="mt-2">Loading Magnifi Science Content...</p>
            </Container>
        );
    }

    if (error) return <Container className="my-5 text-danger">Error: {error}</Container>;
    if (!acfData) return null;

    return (
        <Container className="my-5">
            {/* 1. Header & Description Section */}
            <Row className="mb-4">
                <Col>
                    <h2 className="fw-bold mb-3" style={{ fontSize: '1.5rem' }}>
                        {/* Fallback text if the field name is slightly different */}
                        {acfData.jugaar_ghar_headline || "Jugaar Ghar is a specially curated space for Science, Technology, Engineering, Arts, and Mathematics."}
                    </h2>
                    <div 
                        className="description-text" 
                        style={{ color: '#555', lineHeight: '1.7' }}
                        dangerouslySetInnerHTML={{ __html: acfData.jugaar_ghar_description }} 
                    />
                </Col>
            </Row>

            {/* 2. Gallery Grid Section */}
            <Row className="g-4"> 
                {acfData.jugaar_ghar_gallery && acfData.jugaar_ghar_gallery.map((image) => (
                    <Col 
                        key={image.id} 
                        xs={12}    // Full width on mobile
                        sm={6}     // 2 images per row on small tablets
                        md={6}     // 2 images per row on tablets
                        lg={3}     // 4 images per row (12 / 3 = 4) to match your screenshot
                    >
                        <div className="gallery-card h-100">
                            <img 
                                src={image.sizes?.large || image.url} 
                                alt={image.alt || "Gallery Image"} 
                                className="img-fluid rounded shadow-sm w-100"
                                style={{ 
                                    height: '200px', 
                                    objectFit: 'cover',
                                    transition: 'transform 0.3s ease'
                                }}
                                // Simple hover effect logic
                                onMouseOver={(e) => e.currentTarget.style.transform = 'scale(1.02)'}
                                onMouseOut={(e) => e.currentTarget.style.transform = 'scale(1)'}
                            />
                        </div>
                    </Col>
                ))}
            </Row>
        </Container>
    );
};

export default Jugaar;