// components/OffCanvasMenu.jsx
import React from "react";
import { Offcanvas, Nav } from "react-bootstrap";
import { Link } from "react-router-dom";
const OffCanvas = ({ show, onClose }) => {
  return (
    <Offcanvas
      show={show}
      onHide={onClose}
      placement="start"
      className="fullscreen-offcanvas"
    >
      <Offcanvas.Header closeButton closeVariant="" />
      <Offcanvas.Body className="d-flex align-items-center justify-content-center">
        <Nav className="flex-column text-center">
          <Link className="nav-link text-uppercase" to="/" onClick={onClose}>About Us</Link>
          <Nav.Link >About</Nav.Link>
          <Nav.Link onClick={onClose}>Services</Nav.Link>
          <Nav.Link onClick={onClose}>Contact</Nav.Link>
        </Nav>
      </Offcanvas.Body>
    </Offcanvas>
  );
};

export default OffCanvas;
