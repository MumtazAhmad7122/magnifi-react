import React from 'react'
import Header from '../assets/Components/Header';
import Print from '../assets/Components/Print';
import InnerBanner from '../assets/Components/InnerBanner';
import Footer from '../assets/Components/Footer';
function PrintMedia() {
  return (
   <>
   <Header/>
   <InnerBanner title="Print Media"
   bgimg="/src/assets/imagee/main-media.jpg"
   />
   <Print/>
   <Footer/>
   </>
  )
}

export default PrintMedia