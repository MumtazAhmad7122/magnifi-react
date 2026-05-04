import React from 'react'
import { Container,Row,Col } from 'react-bootstrap'

function Gift() {
  return (
        <section className='exhibition-sec  gift pt-80'>
     <Container>
      <Row className='justify-content-center'>
        
       <Col md={2}>
        <div class="card">
        <img src="/src/assets/imagee/gift1.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Events Calendar</h4>
        <p class="paragraph">Discover exclusive offers, announcements, and the latest happenings</p>
        </div>
    </div>
    
       </Col>
       <Col md={2}>
        <div class="card">
        <img src="/src/assets/imagee/gift2.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Annual Pass</h4>
        <p class="paragraph">Avail MSC annual pass and enjoy unlimited visits around the year.</p>
        </div>
    </div>
    
       </Col>
       <Col md={2}>
        <div class="card">
        <img src="/src/assets/imagee/gift3.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Birthday Packages</h4>
        <p class="paragraph">Make your child’s birthday magnificent.</p>
        </div>
    </div>
    
       </Col>
       
       <Col md={2}>
        <div class="card">
        <img src="/src/assets/imagee/gift4.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>School Bookings</h4>
        <p class="paragraph">Give your students a new perspective</p>
        </div>
    </div>
    
       </Col>
       <Col md={2}>
        <div class="card">
        <img src="/src/assets/imagee/gift5.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Would you like us to visit you?</h4>
        <p class="paragraph">Let us bring the MagnifiScience experience to your doorstep</p>
        </div>
    </div>
    
       </Col>
      
       
      </Row>  
    </Container>   
    </section>
  )
}

export default Gift