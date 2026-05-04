import Carousel from 'react-bootstrap/Carousel';
import React from 'react';
import web1 from '../imagee/web1.jpg'; // Adjust path to where your folder is
import web2 from '../imagee/web2.jpg';

function Carousell() {
  return (
    <Carousel fade interval={3000} pause="hover">
      <Carousel.Item>
        <img
          className="d-block w-100 img-fluid"
          src={web2} // Use the imported variable
          alt="First slide"
          style={{ height: '700px', objectFit: 'cover' }}
        />
      </Carousel.Item>

      <Carousel.Item>
        <img
          className="d-block w-100 img-fluid"
          src={web1} // Use the imported variable
          alt="Second slide"
          style={{ height: '700px', objectFit: 'cover' }}
        />
      </Carousel.Item>
    </Carousel>
  );
}

export default Carousell;