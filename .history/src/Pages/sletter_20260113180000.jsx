import React from 'react'
import Header from '../assets/Components/Header';
import InnerBanner from '../assets/Components/InnerBanner';
import Newsletter from '../assets/Components/Newsletter';
import Footer from '../assets/Components/Footer';
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