import React from 'react'
import { Container,Row,Col } from 'react-bootstrap'
import { FaEnvelope } from "react-icons/fa";
import { IoIosCall } from "react-icons/io";
import { FaMapMarkerAlt } from "react-icons/fa";
function Contacttemp() {
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
        <h4>Reach Out Anytime</h4>  
        <p>Our experts are ready to assist</p>
        <p>msc@dawoodfoundation.org</p>  
        </div>
        </div>

        <div className='time d-flex align-item-center'>
       <div className='iconn '>
         <FaMapMarkerAlt size={30} /> 
        </div>
        <div className='time-info'>
        <h4>Address</h4>  
        <p>Plot no 1 RY – 15 Railway Quarter, Karachi</p> 
        </div>
        </div>

        <div className='time d-flex align-item-center'>
       <div className='iconn '>
         <IoIosCall size={30} /> 
        </div>
        <div className='time-info'>
        <h4>Call us</h4>  
        <p>Our team is available around the clock—call us 24/7</p>
        <p>(021) 388 99 672</p>  
        </div>
        </div>
     </div>
     </Col>
     <Col md={6}>
     <div className='ct-frm'>
      <form>
        <Col md={12}>
       <input type='text' placeholder='Name'></input> 
       </Col>
       <Col md={12}>
       <input type='text' placeholder='Organization'></input> 
       </Col>
       <Col md={12}>
       <input type='text' placeholder='Email'></input> 
       </Col>
       <Col md={12}>
       <input type='text' placeholder='Contact Number'></input> 
       </Col>
       <Col md={12}>
       <select>
        
        </select> 
       </Col>
      </form>
     </div>
     </Col>
     </Row>   
     </Container>   
    </section>
  )
}

export default Contacttemp