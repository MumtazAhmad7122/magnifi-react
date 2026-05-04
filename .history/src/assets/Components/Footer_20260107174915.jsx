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
        <br/>
        <p>Saturday & Sunday</p>
        <p>2:00 pm – 9:00 pm</p>
        <br/>
        <p>PLEASE NOTE THAT ON SATURDAY, 10TH JANUARY, WE ARE OPEN 10:00 AM TO 7:30 PM (due to a private event)</p>
        <br/>
        <p>Address:Plot no 1 RY – 15 Railway Quarter,Karachi.</p>
        <br/>
        <p>Phone<br/>  
        <p>General enquiries: (021) 388 99 672</p> 
        <p>Birthday bookings: 0300 045 8674</p>
       <p></p></p>
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