import React from 'react'
import {Container,Row,Col,Button } from "react-bootstrap";
import { FaRegClock } from "react-icons/fa";
function ContemporaryScienceCentre() {
  return (
    <section className='science'>
      <h2>ContemporaryScienceCentre</h2>
      <Container>
        <Row>
          <Col md={6}>
          <div className='sc-img'>
           <img src='../imagee/sc.png'></img> 
          </div>
          </Col>
          <Col md={6}>
          <div className='visit-info'>
           <div className='time'>
            <div className='iconn'>
             <FaRegClock /> 
            </div>
            <div className='time-info'>
            <p>Monday - Thursday</p>
            <p>9:00 am – 5:00 pm.</p>  
            </div>
           </div>
           <div className='info'>
            <p>Friday: CLOSED</p>
            <p>Saturday & Sunday</p>
            <p>2:00 pm – 9:00 pm</p>
            <br>
            </br>
            <p>PLEASE NOTE THAT ON SATURDAY, 10TH JANUARY, WE ARE OPEN 10:00 AM TO 7:30 PM (due to a private event)
</p>        
            <h6>General Pass:</h6>   
            <p>Monday to Thursday, Ground plus 2 floors: Rs. 800/-</p>
            <p>Saturday and Sunday, Ground plus 2 floors Rs. 900/-</p>
            <h6>Extended Pass:</h6>   
            <p>Monday to Thursday: Rs.1300/-</p>
            <p>Saturday and Sunday: Rs.1400/-</p>
           </div>
          </div>
          </Col>
          </Row>
        </Container>
      
      </section>
  )
}

export default ContemporaryScienceCentre