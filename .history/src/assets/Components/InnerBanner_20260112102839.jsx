import React from 'react'

function InnerBanner() {
    const innerbanner=({title,bgimg})=>{

         return (
      <section className='inner-banner'  style={{ backgroundImage: `url(${bgImage})` }}>

      </section>
  )
    }
 
}

export default InnerBanner