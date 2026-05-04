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
        {generalTickets.map((item, index) => (
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