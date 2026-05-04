import React from 'react'
import {Container,Row,Col,Button } from "react-bootstrap";
function Exhibition() {
  return (
    <section className='exhibition-sec pt-5'>
     <Container>
      <Row>
       <Col md={4}>
       <div className='exhibition-blk'>
        <div className='ex-img'>
         <img src='/src/assets/imagee/exhibition1.jpg'></img>   
        </div>
       </div>
       </Col> 
      </Row>  
    </Container>   
    </section>
  )
}

export default Exhibition