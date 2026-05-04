import React from 'react'
import {Container,Row,Col,Button } from "react-bootstrap";
function Exhibition() {
  return (
    <section className='exhibition-sec pt-5'>
     <Container>
      <Row>
       <Col md={4}>
        <div class="card">
        <img src="/src/assets/imagee/exhibition1.jpg"/>    
        <div class="content">
        <a href="#" className=''>Kids’ World Karachi</a>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
       </Col> 
      </Row>  
    </Container>   
    </section>
  )
}

export default Exhibition