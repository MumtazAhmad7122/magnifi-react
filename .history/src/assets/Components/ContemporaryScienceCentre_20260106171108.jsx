import React from 'react'
import {Container,Row,Col,Button } from "react-bootstrap";
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
          
          </Col>
          </Row>
        </Container>
      
      </section>
  )
}

export default ContemporaryScienceCentre