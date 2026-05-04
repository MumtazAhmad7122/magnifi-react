import React from 'react'

function Print() {
    const Newsletters = () => {
  const newsletterData = [
    {
      id: 1,
      date: "April 24, 2022",
      title: "A hidden gem amid Karachi’s heart!",
      description: "Students of Bahria University recently visited one of the city's hidden gems, The Dawood Foundation (TDF) MagnifiScience Centre (MSC).",
      image: "./src/assets/imagee/sletter1.jpg", // Ensure this path is correct for your Vite/React public folder
      reverse: false
    },
    {
      id: 2,
      date: "June 12, 2022",
      title: "Igniting Curiosity Through Science",
      description: "Explore how our latest interactive exhibits are helping children understand the complex laws of physics through simple play.",
      image: "./src/assets/imagee/sletter2.jpg",
      reverse: true
    }
  ];
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
  );
}

export default Print