import React from 'react'
import Header from '../assets/Components/Header';
import InnerBanner from '../assets/Components/InnerBanner';
import Newsletter from '../assets/Components/Newsletter';
function Sletter() {
  return (
     <>
    <Header/>
   <InnerBanner title="Newsletter"
    bgimg="/src/assets/imagee/sletter.jpg"/>
    <Newsletter/>
    <Footer/>
    </>
  )
}

export default Sletter