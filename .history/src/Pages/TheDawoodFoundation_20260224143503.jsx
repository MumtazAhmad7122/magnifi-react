import React from 'react'
import Header from '../assets/Components/Header'
import Footer from '../assets/Components/Footer'
import InnerBanner from '../assets/Components/InnerBanner'
import Dawood from '../assets/Components/dawood'

function TheDawoodFoundation() {
  return (
    <div>
   <Header/>
    <InnerBanner title="The Dawood Foundation"
    bgimg="/src/assets/imagee/sletter.jpg"/>
    <Dawood/>
   <Footer/>
   </div>
  )
}

export default TheDawoodFoundation