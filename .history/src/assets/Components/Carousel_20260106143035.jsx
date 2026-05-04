import Carousel from 'react-bootstrap/Carousel'
import React from 'react'


function Carousel() {
  return (
  <Carousel fade interval={3000} pause="hover">
      {/* Slide 1 */}
      <Carousel.Item>
        <img
          className="d-block w-100 img-fluid"
          src="https://via.placeholder.com/1200x400/c62026/ffffff?text=First+Slide"
          alt="First slide"
          style={{ maxHeight: '500px', objectFit: 'cover' }}
        />
        <Carousel.Caption>
          <h3 style={{ fontWeight: 'var(--weight-bold)' }}>Main Heading</h3>
          <p>Description text for the first banner slide.</p>
          <button className="btn btn-primary">Shop Now</button>
        </Carousel.Caption>
      </Carousel.Item>

      {/* Slide 2 */}
      <Carousel.Item>
        <img
          className="d-block w-100 img-fluid"
          src="https://via.placeholder.com/1200x400/000000/ffffff?text=Second+Slide"
          alt="Second slide"
          style={{ maxHeight: '500px', objectFit: 'cover' }}
        />
        <Carousel.Caption>
          <h3>Exclusive Offers</h3>
          <p>Check out our latest collections today.</p>
        </Carousel.Caption>
      </Carousel.Item>
    </Carousel>
  )
  
}

export default Carousel