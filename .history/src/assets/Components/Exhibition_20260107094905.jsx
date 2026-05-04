import React from 'react'

function Exhibition() {
  return (
    <section className='exhibition-sec mt-5'>
     <Container>
      <Row>
       <Col md={4}>
       <div className='exhibition-blk'>
        <div className='ex-img'>
         <img src='/src/assets/imagee/exhibition1.jpg'></img>   
        </div>
        <div className='ex-info'>
         <a>Kids’ World Karachi</a> 
         <p>Kids’ World Karachi is a depiction of the city of Karachi through the eyes of children...</p>  
        </div>
       </div>
       </Col> 
      </Row>  
    </Container>   
    </section>>
  )
}

export default Exhibition