import React from 'react'
import { Container } from 'react-bootstrap'

function About() {
  return (
    <section className='about-sec'>
    <Container>
     <div className='about-info'>
     <h2>About Us</h2>
     <p className='w-70 mx-auto'>Following the success of its initiatives aimed at furthering science literacy, The Dawood Foundation (TDF) has established MagnifiScience Centre (MSC)—Pakistan’s first contemporary and interactive science centre designed to provide hands-on learning experiences to people of all ages and backgrounds.
</p>  
<p className='w-70 mx-auto'>The centre functions as an inclusive science hub, offering edutainment, igniting interest in science, and empowering people through better understanding of scientific principles and thinking. MSC’s safe learning space allows all visitors to explore and engage with science in an informal and enjoyable way, while facilitating development of critical thinking and problem-solving skills.</p> 
<button>Read More</button>
    </div>   
    </Container>    
    </section>
  )
}

export default About