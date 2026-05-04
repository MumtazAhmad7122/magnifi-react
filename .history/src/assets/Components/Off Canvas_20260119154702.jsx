// components/OffCanvasMenu.jsx
import React from "react";
import { Offcanvas, Nav } from "react-bootstrap";

const OffCanvasMenu = ({ show, onClose }) => {
  return (
    <Offcanvas
      show={show}
      onHide={onClose}
      placement="start"
      className="fullscreen-offcanvas"
    >
      <Offcanvas.Header closeButton closeVariant="white" />
      <Offcanvas.Body className="d-flex align-items-center justify-content-center">
        <Nav className="flex-column text-center">
          <Nav.Link onClick={onClose}>Home</Nav.Link>
          <Nav.Link onClick={onClose}>About</Nav.Link>
          <Nav.Link onClick={onClose}>Services</Nav.Link>
          <Nav.Link onClick={onClose}>Contact</Nav.Link>
        </Nav>
      </Offcanvas.Body>
    </Offcanvas>
  );
};

export default OffCanvasMenu;
