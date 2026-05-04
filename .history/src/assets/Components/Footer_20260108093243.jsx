import React from 'react'
import { Container,Row,Col } from 'react-bootstrap'


function Footer() {
  return (
    <footer className='pt-5 pb-5'>
     <Container>
      <Row>
      <Col md={3}>
      <div className='section-1'>
        <h5 className='text-white'>Timings:</h5>
        <p class="m-0 text-white">Monday - Thursday</p>
        <p class="m-0 text-white">9:00 am – 5:00 pm</p>
        <br/>
        <p className='text-white'>Friday: CLOSED</p>
        <br/>
        <p class="m-0 text-white">Saturday & Sunday</p>
        <p class="m-0 text-white">2:00 pm – 9:00 pm</p>
        <br/>
        <p className='text-white'>PLEASE NOTE THAT ON SATURDAY, 10TH JANUARY, WE ARE OPEN 10:00 AM TO 7:30 PM (due to a private event)</p>
        <br/>
        <p className='text-white'>Address:<br/>Plot no 1 RY – 15 Railway Quarter,Karachi.</p>
        <br/>
        <p class="m-0 text-white">Phone</p> 
        <p class="m-0 text-white">General enquiries: (021) 388 99 672</p> 
        <p class="m-0 text-white">Birthday bookings: 0300 045 8674</p>
       <p class="m-0 text-white">School visit bookings: 0300 859 1689</p>
       <br/>
       <p className='text-white'>Copyright © The Dawood Foundation’s<br/>MagnifiScience Centre 2021 - 2024</p>
        </div>
      </Col>
      <Col md={3}>
      <div className='list'>
        <h5></h5>
      </div>
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