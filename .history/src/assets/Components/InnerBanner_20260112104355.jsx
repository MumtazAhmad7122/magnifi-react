import React from 'react'

function InnerBanner({title,bgimg}) {
    

         return (
      <section className='inner-banner'  style={{ background:`url(${bgimg})` }}>
      <h2>{title}</h2>
      </section>
  )
    }
 


export default InnerBanner