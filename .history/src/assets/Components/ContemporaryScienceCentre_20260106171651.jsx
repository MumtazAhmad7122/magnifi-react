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
           <img src='./imagee/sc.png'></img> 
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
           <div cla
          </div>
          </Col>
          </Row>
        </Container>
      
      </section>
  )
}

export default ContemporaryScienceCentre