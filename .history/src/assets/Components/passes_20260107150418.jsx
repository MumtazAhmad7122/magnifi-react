import React from 'react';
import { Row, Col, Container, Button } from 'react-bootstrap';

function Passes() {
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

  const ExtendedPass = [
    {
      heading: "Extended Pass (Weekdays)",
      paragraph: "You can buy a ticket or up to 9 tickets at a time for max. 14 days before your visit. The ticket provides access to all the floors, including the science garden and the third floor."
    },
    {
      heading: "Extended Pass (Weekends/Public Holidays)",
      paragraph: "You can buy a ticket or up to 9 tickets at a time for max. 14 days before your visit. The ticket provides access to all the floors, including the science garden and the third floor."
    }
  ];

  // 1. Array for Heading and Paragraph
  const ExtendedAnnualPass = [
    {
      id: "gift",
      heading: "Annual Pass Gift Voucher",
      paragraph: "This voucher is transferrable until a person redeems it to an annual pass. It can be redeemed within 3 months from the date of issuance."
    },
    {
      id: "extended-annual",
      heading: "Extended Annual Pass",
      paragraph: "The Extended Annual Pass of the MSC allows you to access all exhibition areas for an entire year, including entry to the third floor and science shows. The pass is valid from the date of your first visit."
    }
  ];

  // 2. Separate Array for Price and Titles (to be mapped inside the cards)
  const priceDetails = [
    { title: "Single membership price", price: "Rs 6000" },
    { title: "Family of 2", price: "Rs. 11,800" },
    { title: "Family of 3", price: "Rs. 17,500" },
    { title: "Family of 4", price: "Rs. 23,000" },
    { title: "Family of 5", price: "Rs. 28,500" },
    { title: "Family of 6", price: "Rs. 34,000" }
  ];


  const AnnualPass = [
    {
      id: "gift",
      heading: "Annual Pass",
      paragraph: "The Annual Pass of the MSC allows you to access all exhibition areas for an entire year, excluding entry to the third floor, science shows, and food services. The pass is valid from the date of your first visit."
    },
    {
      id: "extended-annual",
      heading: "Extended Annual Pass",
      paragraph: "The Extended Annual Pass of the MSC allows you to access all exhibition areas for an entire year, including entry to the third floor and science shows. The pass is valid from the date of your first visit."
    }
  ];

  return (
    <Container className="mt-5">
      <Row>
        {/* Mapping Standard Passes (Ground, General, Extended) */}
        {[...groundTickets, ...generalTickets, ...ExtendedPass].map((item, index) => (
          <Col md={4} className="mb-3" key={`std-${index}`}>
            <div className="border p-4 h-100 d-flex flex-column justify-content-between">
              <div>
                <h3 className="fw-bold fs-4">{item.heading}</h3>
                <p className="text-muted">{item.paragraph}</p>
              </div>
              <Button variant="danger" className="mt-3" style={{ width: 'fit-content' }}>Buy Now</Button>
            </div>
          </Col>
        ))}

        {/* Mapping Annual Passes with TWO-STAGED mapping */}
        {ExtendedAnnualPass.map((pass) => (
          <Col md={4} className="mb-3" key={pass.id}>
            <div className="border p-4 h-100 d-flex flex-column">
              {/* FIRST MAPPING PART: Heading and Paragraph */}
              <h3 className="fw-bold fs-4">{pass.heading}</h3>
              <p className="text-muted">{pass.paragraph}</p>

              {/* SECOND MAPPING PART: Price and Title (only if it's the Extended Annual Pass) */}
              {pass.id === "extended-annual" && (
                <div className="mt-3 flex-grow-1">
                  {priceDetails.map((detail, idx) => (
                    <div key={idx} className="d-flex justify-content-between mb-2">
                      <span className="fw-medium">{detail.title}</span>
                      <span>{detail.price}</span>
                    </div>
                  ))}
                </div>
              )}

              <Button variant="danger" className="mt-4" style={{ width: 'fit-content' }}>Buy Now</Button>
            </div>
          </Col>
        ))}




        {/* Mapping Annual Passes with TWO-STAGED mapping */}
        {AnnualPass.map((pass) => (
          <Col md={4} className="mb-3" key={pass.id}>
            <div className="border p-4 h-100 d-flex flex-column">
              {/* FIRST MAPPING PART: Heading and Paragraph */}
              <h3 className="fw-bold fs-4">{pass.heading}</h3>
              <p className="text-muted">{pass.paragraph}</p>

              {/* SECOND MAPPING PART: Price and Title (only if it's the Extended Annual Pass) */}
              {pass.id === "annual-pass" && (
                <div className="mt-3 flex-grow-1">
                  {priceDetails.map((detail, idx) => (
                    <div key={idx} className="d-flex justify-content-between mb-2">
                      <span className="fw-medium">{detail.title}</span>
                      <span>{detail.price}</span>
                    </div>
                  ))}
                </div>
              )}

              <Button variant="danger" className="mt-4" style={{ width: 'fit-content' }}>Buy Now</Button>
            </div>
          </Col>
        ))}
      </Row>
    </Container>
  );
}

export default Passes;