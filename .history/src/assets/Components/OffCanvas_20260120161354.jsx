// components/OffCanvasMenu.jsx
import React from "react";
import { Offcanvas, Nav,Navbar,NavDropdown,Accordion } from "react-bootstrap";
import { Link } from "react-router-dom";
const OffCanvas = ({ show, onClose }) => {
  return (
    <Offcanvas
      show={show}
      onHide={onClose}
      placement="start"
      className="fullscreen-offcanvas"
    >
      <Offcanvas.Header closeButton closeVariant="black" />
      <Offcanvas.Body className="d-flex align-items-center justify-content-center">
        {/* <Navbar expand="lg" className="">
      
        
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="me-auto d-flex flex-column">
            <Link className="nav-link text-uppercase text-white" to="/">About Us</Link>
            <NavDropdown title="Visit" className="text-uppercase text-white" id="basic-nav-dropdown" style={{color:'white!Important'}}>
    <NavDropdown.Item as={Link} to="#" className=" text-capitalize canva text-white">Visit Info</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#" className=" text-capitalize text-white">School Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize text-white " to="#">Group Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize text-white" to="#">Corporate Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize text-white" to="#">Birthday Party Packages</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize text-white " to="#">Would You Like Us to Visit You</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize text-white" to="#">Facilities</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize text-white" to="#">Terms & Conditions</NavDropdown.Item>
            </NavDropdown>
               <NavDropdown title="Exhibitions" className="text-uppercase text-white" id="basic-nav-dropdown">
              <NavDropdown.Item as={Link} className="nav-link text-capitalize text-white" to="#">Kids World Karachi</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link  text-capitalize text-white" to="#">The World Within Us</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link  text-capitalize text-white" to="#">The Physical Worlds</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link  text-capitalize text-white" to="#">Our Creation Our Worlds</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link  text-capitalize text-white" to="#">OutDoor Activities</NavDropdown.Item>
            </NavDropdown>
            <Link className="nav-link text-uppercase text-white" to="/">Host An Event</Link>
            <Link className="nav-link text-uppercase text-white" to="/">MagnifiGreen</Link>
            <Link className="nav-link text-uppercase text-white"  to="/">MagnifiScience Travel</Link>
            <Link className="nav-link text-uppercase text-white" to="/">MagnifiStem</Link>
             <NavDropdown title="Media" className="text-uppercase text-white" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="/sletter" className=" text-capitalize text-white">Newsletter</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#" className=" text-capitalize text-white">Media Coverage</NavDropdown.Item>
           <div className="dropdown-submenu">
  <span className="dropdown-item submenu-title p-0">
   <Link className="nav-link text-capitalize text-white" to="#">Testimonials</Link>  
  </span>

  <div className="dropdown-menu submenu-right canva">
    <NavDropdown.Item as={Link} to="/testimonials/print">
     <Link className="nav-link text-capitalize text-white" to="/printmedia">Print Media</Link>
    </NavDropdown.Item>
    <NavDropdown.Item as={Link} to="/testimonials/electronic">
      <Link className="nav-link text-capitalize text-white" to="/electronicmedia">Electronic Media</Link>
    </NavDropdown.Item>
    <NavDropdown.Item as={Link} to="/testimonials/social">
    <Link className="nav-link text-capitalize text-white" to="#">Social Media</Link>
    </NavDropdown.Item>
  </div>
</div>
            </NavDropdown>
              <Link className="nav-link text-uppercase text-white" to="/">Support Us</Link>
               <Link className="nav-link text-uppercase text-white" to="/contactus">ContactUs</Link>
          </Nav>
        </Navbar.Collapse>
      
    </Navbar>  */}
    <Accordion flush>
      <Accordion.Item eventKey="0">
        <Accordion.Header>Settings</Accordion.Header>
        <Accordion.Body style={{}}>
          <Nav className="flex-column">
            <Nav.Link href="#profile">Profile</Nav.Link>
            <Nav.Link href="#security">Security</Nav.Link>
          </Nav>
        </Accordion.Body>
      </Accordion.Item>
      
      <Accordion.Item eventKey="1">
        <Accordion.Header>Account</Accordion.Header>
        <Accordion.Body>
          <Nav className="flex-column">
            <Nav.Link href="#billing">Billing</Nav.Link>
            <Nav.Link href="#subscription">Subscription</Nav.Link>
          </Nav>
        </Accordion.Body>
      </Accordion.Item>
    </Accordion>
      </Offcanvas.Body>
    </Offcanvas>
  );
};

export default OffCanvas;
