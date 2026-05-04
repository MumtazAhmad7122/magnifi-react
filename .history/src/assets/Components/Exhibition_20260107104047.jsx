import React from 'react'
import {Container,Row,Col,Button } from "react-bootstrap";
function Exhibition() {
  return (
    <section className='exhibition-sec pt-5'>
     <Container>
      <Row>
       <Col md={4}>
       div class="card">
        <div class="content">
            <h2 class="heading">Web Design</h2>
            <p class="paragraph">
                This text is hidden by default. When you hover over the card, 
                the entire content block slides upward, revealing this description 
                while moving the heading higher.
            </p>
        </div>
        <div className='ex-img'>
         <img src='/src/assets/imagee/exhibition1.jpg' className='img-fluid'/>
        <div className='ex-link'>
        <a href="#">Kids’ World Karachi</a> 
        </div>
         <div className='ex-info'>
         <p>Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>  
        </div>   
        </div>
       </div>
       </Col> 
      </Row>  
    </Container>   
    </section>
  )
}

export default Exhibition