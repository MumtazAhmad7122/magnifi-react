import React from 'react'
import { Container } from 'react-bootstrap'
import { FaEnvelope } from "react-icons/fa";
function contacttemp() {
  return (
    <section className='contact-sec'>
     <Container>
     <Row>
     <Col md={6}>
     <div className='ct-info'>
      <h3>Get in Touch<br/> with Magnific Science</h3>  
      <p>We’re here to answer your questions, hear your feedback, and provide the support you need. Whether you want to learn more about our educational resources, explore collaboration opportunities, or simply say hello, our team is ready to assist you.</p>
      <div className='time d-flex align-item-center'>
       <div className='iconn '>
         <FaEnvelope size={30} /> 
        </div>
        <div className='time-info'>
        <h4>VISIT INFO</h4>  
        <p>Monday - Thursday</p>
        <p>9:00 am – 5:00 pm.</p>  
        </div>
        </div>
     </div>
     </Col>
     </Row>   
     </Container>   
    </section>
  )
}

export default contacttemp