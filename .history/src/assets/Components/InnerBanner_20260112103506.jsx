import React from 'react'

function InnerBanner() {
    const innerbanner=({title,bgimg})=>{

         return (
      <section className='inner-banner'  style={{ background:`url(${bgimg})` }}>
      <h2>{}</h2>
      </section>
  )
    }
 
}

export default InnerBanner