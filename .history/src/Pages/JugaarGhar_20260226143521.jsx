import React from 'react'
import Jugaar from '../assets/Components/Jugaar'
import Footer from '../assets/Components/Footer'
import Header from '../assets/Components/Header'
import InnerBanner from '../assets/Components/InnerBanner'
function JugaarGhar() {
  return (
    <div>
     <Header/>
   <InnerBanner title="Print Media"
   bgimg="/src/assets/imagee/main-media.jpg"
   />
   <Jugaar/>
   <Footer/>   
    </div>
  )
}

export default JugaarGhar