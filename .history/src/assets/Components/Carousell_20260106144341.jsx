import Carousel from 'react-bootstrap/Carousel'
import React from 'react'


function Carousell() {
  return (
  <Carousel fade interval={3000} pause="hover">
      {/* Slide 1 */}
      <Carousel.Item>
        <img
          className="d-block w-100 img-fluid"
          src="./imagee/web2.jpg"
          alt="First slide"
          style={{ maxHeight: '500px', objectFit: 'cover' }}
        />
      </Carousel.Item>

      {/* Slide 2 */}
      <Carousel.Item>
        <img
          className="d-block w-100 img-fluid"
          src="./imagee/web1.jpg"
          alt="Second slide"
          style={{ maxHeight: '500px', objectFit: 'cover' }}
        />
      </Carousel.Item>
    </Carousel>
  )
  
}

export default Carousel