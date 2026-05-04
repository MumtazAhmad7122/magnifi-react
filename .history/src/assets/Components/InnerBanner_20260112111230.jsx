import React from 'react'

function InnerBanner({title,bgimg}) {
   
         return (
      <section className='inner-banner'  style={{ background:`url(${bgimg})`;background-size:CgOverflow;background-repeat:no-repeat }}>
      <h2>{title}</h2>
      </section>
  );
    }
 


export default InnerBanner