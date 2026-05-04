import React from 'react';
import { Offcanvas, Nav } from 'react-bootstrap';

const MobileMenu = ({ show, handleClose }) => {
  return (
    <Offcanvas 
      show={show} 
      onHide={handleClose} 
      placement="end" 
      className="w-100" // Makes it full screen width
    >
      <Offcanvas.Header closeButton>
        <Offcanvas.Title>Navigation</Offcanvas.Title>
      </Offcanvas.Header>
      <Offcanvas.Body className="d-flex flex-column align-items-center justify-content-center">
        <Nav className="text-center">
          <Nav.Link href="#home" className="fs-1 my-3" onClick={handleClose}>Home</Nav.Link>
          <Nav.Link href="#about" className="fs-1 my-3" onClick={handleClose}>About</Nav.Link>
          <Nav.Link href="#services" className="fs-1 my-3" onClick={handleClose}>Services</Nav.Link>
          <Nav.Link href="#contact" className="fs-1 my-3" onClick={handleClose}>Contact</Nav.Link>
        </Nav>
      </Offcanvas.Body>
    </Offcanvas>
  );
};

export default MobileMenu;