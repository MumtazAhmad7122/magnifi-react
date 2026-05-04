import React from 'react'

function InnerBanner({title,bgimg}) {
   
         return (
      <section className='inner-banner'  style={{ background:`url(${bgimg})`,backgroundSize:'cover',BackgroundRepeat:'no-repeat',backgroundPosition:'Center' }}>
      <div className='title position-relative'><h2 className='text-white'>{title}</h2></div>
      </section>
  );
    }
 


export default InnerBanner