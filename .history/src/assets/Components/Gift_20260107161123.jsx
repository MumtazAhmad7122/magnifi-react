import React from 'react'
import { Container,Row,Col } from 'react-bootstrap'

function Gift() {
  return (
        <section className='exhibition-sec pt-5 gift'>
     <Container>
        <h2 className='text-center pt-5 pb-5'>Exhibitions<span class="line"></span></h2>
      <Row>
        
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
        <h4 className='heading'>Kids’ World Karachi</h4>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
    
       </Col>
       
       <Col md={2}>
        <div class="card">
        <img src="/src/assets/imagee/gift4.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Kids’ World Karachi</h4>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
    
       </Col>
       <Col md={2}>
        <div class="card">
        <img src="/src/assets/imagee/gift5.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Kids’ World Karachi</h4>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
    
       </Col>
      
       
      </Row>  
    </Container>   
    </section>
  )
}

export default Gift