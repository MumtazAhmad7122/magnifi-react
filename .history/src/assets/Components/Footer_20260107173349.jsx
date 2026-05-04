import React from 'react'
import { Container } from 'react-bootstrap'


function Footer() {
  return (
    <footer>
     <Container>
      <Row>
      <Col md={3}>
      <div className='section-1'>
        <h5>Timings:</h5>
        <p>Monday - Thursday</p>
        <p>9:00 am – 5:00 pm</p>
        <br/>
        <p>Friday: CLOSED</p>
        </div>
      </Col>
      <Col md={3}>
      </Col>
      <Col md={3}>
      </Col>
      <Col md={3}>
      </Col> 
      </Row>
      </Container>     
    </footer>
  )
}

export default Footer