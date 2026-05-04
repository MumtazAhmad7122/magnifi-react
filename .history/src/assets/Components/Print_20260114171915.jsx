import React from 'react';
// Import your images here (Recommended for Vite/Webpack)
// import letter1 from './assets/imagee/sletter1.jpg';
// import letter2 from './assets/imagee/sletter2.jpg';

const Newsletters = () => {
  const newsletterData = [
    {
      id: 1,
      date: "Januuary 06, 2026",
      title: "Karachi’s TDF Ghar and MagnifiScience Centre declared museums by Sindh government",
      description: "Students of Bahria University recently visited one of the city's hidden gems, The Dawood Foundation (TDF) MagnifiScience Centre (MSC).",
      image: "./src/assets/imagee/print1.webp", 
      reverse: false
    },
    {
      id: 2,
      date: "December 08, 2025",
      title: "Sindh CM inaugurates ‘Lost Cities of Indus Delta’ exhibition",
      description: "KARACHI: The Dawood Foundation (TDF) welcomed the Chief Minister of Sindh, Syed Murad Ali Shah, to the TDF’s MagnifiScience Centre (MSC) Sunday, where he exclusively inaugurated the Centre’s new exhibition, Lost Cities of the Indus Delta.",
      image: "./src/assets/imagee/print2.jpg",
      reverse: true
    },
    {
      id: 3,
      date: "December 08, 2025",
      title: "Sindh CM inaugurates ‘Lost Cities of Indus Delta’ exhibition",
      description: "KARACHI: Chief Minister Syed Murad Ali Shah has reaffirmed his government’s commitment to promoting scientific literacy, innovation, and inclusive education across the province, saying Sindh’s cultural heritage and scientific tradition form the foundation of one of the world’s oldest civilisations.",
      image: "./src/assets/imagee/print3.jpg",
      reverse: false
    },
     {
      id: 4,
      date: "October 16, 2025",
      title: "Science literacy among youth celebrated through film",
      description: "KARACHI: Over 150 students from various schools, including many from underprivileged backgrounds, attended the opening of the Science Film Festival (SFF) 2025 hosted by the Goethe-Institut Pakistan in collaboration with TDF’s MagnifiScience Centre on Wednesday.",
      image: "./src/assets/imagee/print5.gif",
      reverse: true
    },
     {
      id: 5,
      date: "April 12, 2025",
      title: "BAFL, Dawood Foundation’s MSC join hands",
      description: "KARACHI: Bank Alfalah has partnered with The Dawood Foundation’s MagnifiScience Centre (MSC) to launch a first-of-its-kind interactive Money Matters Exhibition, aimed at helping young Pakistanis develop essential money management skills.",
      image: "./src/assets/imagee/print6.jpg",
      reverse:false
    },
    {
      id: 6,
      date: "April 25, 2025",
      title: "Sabeen’s image reflected in everyday objects",
      description: "KARACHI: Friends and admirers of Sabeen Mahmud came together on her mother Mahenaz Mahmud’s call at TDF’s MagnifiScience Centre to observe her 10th death anniversary on Thursday.",
      image: "./src/assets/imagee/print6.jpg",
      reverse:false
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
                <h4 className="news-title" style={{color:'#c62026'}}>{item.title}</h4>
                <p className="text-muted">{item.description}</p>
                <button className="btn-read-more shadow-sm">Read More</button>
              </div>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
};

export default Newsletters;