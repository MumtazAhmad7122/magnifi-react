import React from 'react'
import {Container,Row,Col,Button } from "react-bootstrap";
function Exhibition() {
  return (
    <section className='exhibition-sec pt-5'>
     <Container>
      <Row>
       <Col md={4}>
        <div class="card">
        <div class="content">
            <h2 class="heading">Kids’ World Karachi</h2>
            <p class="paragraph">
                This text is hidden by default. When you hover over the card, 
                the entire content block slides upward, revealing this description 
                while moving the heading higher.
            </p>
        </div>
    </div>
       </Col> 
      </Row>  
    </Container>   
    </section>
  )
}

export default Exhibition