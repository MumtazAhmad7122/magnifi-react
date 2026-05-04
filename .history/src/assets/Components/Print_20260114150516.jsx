import React from 'react'

function Print() {
    
  return (
    <section className="newsletter-section">
      <div className="container">
        <h2 className="text-center section-title">MagnifiScience Newsletters</h2>

        {newsletterData.map((item) => (
          <div 
            key={item.id} 
            className={`row align-items-center mb-5 pb-5 ${item.reverse ? 'flex-row-reverse' : ''}`}
          >
            <div className="col-lg-7">
              <div className="img-container">
                <img src={item.image} alt={item.title} />
              </div>
            </div>
            <div className="col-lg-5">
              <div className={`content-card ${item.reverse ? 'overlap-right' : 'overlap-left'}`}>
                <span className="date-label">{item.date}</span>
                <h2 className="news-title">{item.title}</h2>
                <p className="text-muted">{item.description}</p>
                <button className="btn-read-more shadow-sm">Read More</button>
              </div>
            </div>
          </div>
        ))}
      </div>
    </section>
  )
}

export default Print