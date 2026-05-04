import React from 'react'
import InnerBanner from '../assets/Components/InnerBanner'
import Header from '../assets/Components/Header';
import Contacttemp from '../assets/Components/contacttemp';
import Footer from ''
function ContactUs() {
  return (
    <>
    <Header/>
    <InnerBanner 
    title="Contact Us"
    bgimg="/src/assets/imagee/contact.jpg"
    />
   <Contacttemp/>
   <Footer/>
    </>
  );
}

export default ContactUs