import React from 'react'

function InnerBanner({title,bgimg}) {
   
         return (
      <section className='inner-banner'  style={{ background:`url(${bgimg})`,backgroundSize:'cover',BackgroundRepeat:'no-repeat',backgroundPosition:'Center' }}>
      <div className=''<h2 className='text-white'>{title}</h2>
      </section>
  );
    }
 


export default InnerBanner