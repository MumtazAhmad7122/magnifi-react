import React from 'react'
import { Container,Row,Col,Button } from 'react-bootstrap'
import { FaEnvelope } from "react-icons/fa";
import { IoIosCall } from "react-icons/io";
import { FaMapMarkerAlt } from "react-icons/fa";
import { FaFacebook } from "react-icons/fa";
import { FaLinkedin } from "react-icons/fa";
import { FaTwitter } from "react-icons/fa";
<FaFacebook />
function Contacttemp() {
  return (
    <section className='contact-sec pt-5 pb-5' style={{marginBottom:}>
     <Container>
     <Row className='d-flex align-items-center'>
     <Col md={6}>
     <div className='ct-info'>
      <h3>Get in Touch<br/><span style={{color:'#c62026', fontWeight:'700'}}> with Magnific Science</span></h3>  
      <p className='pt-3 pb-4'>We’re here to answer your questions, hear your feedback, and provide the support you need. Whether you want to learn more about our educational resources, explore collaboration opportunities, or simply say hello, our team is ready to assist you.</p>
      <div className='time d-flex align-item-center pb-4'>
       <div className='iconn pe-4 '>
         <FaEnvelope size={30} color='#c62026' /> 
        </div>
        <div className='time-info'>
        <h4>Reach Out Anytime</h4>  
        <p>Our experts are ready to assist</p>
        <p>msc@dawoodfoundation.org</p>  
        </div>
        </div>

        <div className='time d-flex align-item-center pb-4'>
       <div className='iconn pe-4 '>
         <FaMapMarkerAlt size={30} color='#c62026' /> 
        </div>
        <div className='time-info'>
        <h4>Address</h4>  
        <p>Plot no 1 RY – 15 Railway Quarter, Karachi</p> 
        </div>
        </div>

        <div className='time d-flex align-item-center'>
       <div className='iconn pe-4 '>
         <IoIosCall size={30} color='#c62026' /> 
        </div>
        <div className='time-info'>
        <h4>Call us</h4>  
        <p>Our team is available around the clock—call us 24/7</p>
        <p>(021) 388 99 672</p>  
        </div>
        </div>
     </div>
     <div className='social pt-4'>
     <FaFacebook size={30} className='me-3 p-1' />
     <FaLinkedin size={30} className='me-3 p-1' />
     <FaTwitter size={30} className='p-1' />
     </div>
     </Col>
     <Col md={6}>
     <div className='ct-frm'>
      <form >
        <Col md={12}>
       <input type='text' placeholder='Name' className='form-control '></input> 
       </Col>
       <Col md={12}>
       <input type='text' placeholder='Organization' className='form-control '></input> 
       </Col>
       <Col md={12}>
       <input type='text' placeholder='Email' className='form-control'></input> 
       </Col>
       <Col md={12}>
       <input type='text' placeholder='Contact Number' className='form-control'></input> 
       </Col>
       <Col md={12}>
       <select className='form-control '>
        <option value="" >Select Age Group</option>
         <option value="">Below 18 Years</option>
          <option value="">18 To 24 Years</option>
          <option value="">25 To 39 Years</option>
          <option value="">40 To 59 Years</option>
          <option value="">4060 Years and Above</option>
          <option value="">40 To 59 Years</option>
          <option value="">Prefer Not To Say</option>
        </select> 
       </Col>
       <Col md={12}>
       <select className='form-control '>
        <option value="">Select Gender</option>
         <option value="">Male</option>
          <option value="">Female</option>
          <option value="">Prefer Not To Say</option>
        </select> 
       </Col>
       <Col md={12}>
       <div className='slt'>
        <p>Please Rate your overall experience at the MagnifiScience Centre</p>
        <label className='pe-3'><input type='radio' value=""/>Very Dissatisfied</label>
        <label className='pe-3'><input type='radio' value=""/>Dissatisfied</label>
        <label className='pe-3'><input type='radio' value=""/>Neutral</label>
        <label className='pe-3'><input type='radio' value=""/>Satisfied</label>
        <label className='pe-3'><input type='radio' value=""/>Very Satisfied</label>
       </div>
       </Col>
       <Col md="12">
       <textarea className='vh-75 form-control'></textarea>
       </Col>
       <Col md="12">
       <Button>Send Message</Button>
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