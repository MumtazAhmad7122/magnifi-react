import React from 'react'
import { Container,Row,Col } from 'react-bootstrap'

function Gift() {
  return (
        <section className='exhibition-sec pt-5'>
     <Container>
        <h2 className='text-center pt-5 pb-5'>Exhibitions<span class="line"></span></h2>
      <Row>
       <Col md={4}>
        <div class="card">
        <img src="/src/assets/imagee/gift1.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Kids’ World Karachi</h4>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
    
       </Col>
       <Col md={4}>
        <div class="card">
        <img src="/src/assets/imagee/gift2.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Kids’ World Karachi</h4>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
    
       </Col>
       <Col md={4}>
        <div class="card">
        <img src="/src/assets/imagee/gift.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Kids’ World Karachi</h4>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
    
       </Col>
       
       <Col md={4}>
        <div class="card">
        <img src="/src/assets/imagee/exhibition4.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Kids’ World Karachi</h4>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
    
       </Col>
       <Col md={4}>
        <div class="card">
        <img src="/src/assets/imagee/exhibition5.jpg" className='img-fluid'/>    
        <div class="content">
        <h4 className='heading'>Kids’ World Karachi</h4>
        <p class="paragraph">Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>
        </div>
    </div>
    
       </Col>
       <Col md={4}>
        <div class="card">
        <img src="/src/assets/imagee/exhibition6.jpg" className='img-fluid'/>    
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