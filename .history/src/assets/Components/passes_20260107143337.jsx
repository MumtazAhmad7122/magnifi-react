import React from 'react';
import { Row, Col, Container, Button } from 'react-bootstrap';

// 1. Capitalized the function name
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

     const AnnualPass = [
    {
      heading: "Annual Pass Gift Voucher",
      paragraph: "This voucher is transferrable until a person redeems it to an annual pass. It can be redeemed within 3 months from the date of issuance."
    },
    {
      heading: "Extended Annual Pass",
      paragraph: "The Extended Annual Pass of the MSC allows you to access all exhibition areas for an entire year, including entry to the third floor and science shows. The pass is valid from the date of your first visit."
    }
  ];


  

  return (
    <Container className="mt-5">
      <Row>
        {/* Mapping First Array */}
        {groundTickets.map((item, index) => (
          <Col md={4} className="mb-3" key={`ground-${index}`}>
            <div className="border p-4 h-100">
              <h3>{item.heading}</h3>
              <p>{item.paragraph}</p>
              <Button variant="danger">Buy Now</Button>
            </div>
          </Col>
        ))}

        {/* Mapping Second Array */}
        {generalTickets.map((item, index) => (
          <Col md={4} className="mb-3" key={`general-${index}`}>
            <div className="border p-4 h-100">
              <h3>{item.heading}</h3>
              <p>{item.paragraph}</p>
              <Button variant="danger">Buy Now</Button>
            </div>
          </Col>

        ))}

         {/* Extended Pass Array */}
        {ExtendedPass.map((item, index) => (
          <Col md={4} className="mb-3" key={`general-${index}`}>
            <div className="border p-4 h-100">
              <h3>{item.heading}</h3>
              <p>{item.paragraph}</p>
              <Button variant="danger">Buy Now</Button>
            </div>
          </Col>



        ))}
      </Row>
    </Container>
  );
}

export default Passes;