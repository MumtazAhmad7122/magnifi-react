import React from 'react'
import {Row}
function passes() {
    const TicketGrid = () => {
  const groundTickets = [
    {
      heading: "Ground Floor Pass",
      paragraph: "This ticket provides access to the ground floor only for Rs. 500/- per child where 1 accompanying adult gets free entry."
    }
  ];

  const generalTickets = [
    {
      heading: "General Pass (Weekdays)",
      paragraph: "You can buy a ticket or up to 9 tickets at a time for max. 14 days before your visit."
    },
    {
      heading: "General Pass (Weekends)",
      paragraph: "You can buy a ticket or up to 9 tickets at a time for max. 14 days before your visit."
    }
  ];
  return (
   <div className="container mt-5">
      {/* We use one "row" and map both arrays inside it 
          so they all appear in the same horizontal line.
      */}
      <div className="row">
        
        {/* Mapping First Array */}
        {groundTickets.map((item, index) => (
          <div className="col-md-4 mb-3" key={`ground-${index}`}>
            <div className="border p-4 h-100">
              <h3>{item.heading}</h3>
              <p>{item.paragraph}</p>
              <button className="btn btn-danger">Buy Now</button>
            </div>
          </div>
        ))}

        {/* Mapping Second Array */}
        {generalTickets.map((item, index) => (
          <div className="col-md-4 mb-3" key={`general-${index}`}>
            <div className="border p-4 h-100">
              <h3>{item.heading}</h3>
              <p>{item.paragraph}</p>
              <button className="btn btn-danger">Buy Now</button>
            </div>
          </div>
        ))}

      </div>
    </div>
  )
}}

export default passes




 