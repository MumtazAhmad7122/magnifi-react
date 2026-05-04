// components/OffCanvasMenu.jsx
import React from "react";
import { Offcanvas, Nav,Navbar,NavDropdown } from "react-bootstrap";
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
        <Navbar expand="lg" className="">
      
        
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="me-auto d-flex flex-column">
            <Link className="nav-link text-uppercase" to="/">About Us</Link>
            <NavDropdown title="Visit" className="text-uppercase" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="#" className=" text-capitalize canva">Visit Info</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#" className=" text-capitalize">School Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize " to="#">Group Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize" to="#">Corporate Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize" to="#">Birthday Party Packages</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize " to="#">Would You Like Us to Visit You</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize " to="#">Facilities</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-capitalize " to="#">Terms & Conditions</NavDropdown.Item>
            </NavDropdown>
               <NavDropdown title="Exhibitions" className="text-uppercase" id="basic-nav-dropdown">
              <NavDropdown.Item as={Link} className="nav-link text-capitalize " to="#">Kids World Karachi</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link  text-capitalize" to="#">The World Within Us</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link  text-capitalize " to="#">The Physical Worlds</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link  text-capitalize " to="#">Our Creation Our Worlds</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link  text-capitalize " to="#">OutDoor Activities</NavDropdown.Item>
            </NavDropdown>
            <Link className="nav-link text-uppercase" to="/">Host An Event</Link>
            <Link className="nav-link text-uppercase" to="/">MagnifiGreen</Link>
            <Link className="nav-link text-uppercase"  to="/">MagnifiScience Travel</Link>
            <Link className="nav-link text-uppercase" to="/">MagnifiStem</Link>
             <NavDropdown title="Media" className="text-uppercase" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="/sletter" className=" text-capitalize">Newsletter</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#" className=" text-capitalize">Media Coverage</NavDropdown.Item>
           <div className="dropdown-submenu">
  <span className="dropdown-item submenu-title p-0">
   <Link className="nav-link text-capitalize" to="#">Testimonials</Link>  
  </span>

  <div className="dropdown-menu submenu-right canva">
    <NavDropdown.Item as={Link} to="/testimonials/print">
     <Link className="nav-link text-capitalize" to="/printmedia">Print Media</Link>
    </NavDropdown.Item>
    <NavDropdown.Item as={Link} to="/testimonials/electronic">
      <Link className="nav-link text-capitalize" to="/electronicmedia">Electronic Media</Link>
    </NavDropdown.Item>
    <NavDropdown.Item as={Link} to="/testimonials/social">
    <Link className="nav-link text-capitalize" to="#">Social Media</Link>
    </NavDropdown.Item>
  </div>
</div>
            </NavDropdown>
              <Link className="nav-link text-uppercase" to="/">Support Us</Link>
               <Link className="nav-link text-uppercase" to="/contactus">ContactUs</Link>
          </Nav>
        </Navbar.Collapse>
      
    </Navbar> 
      </Offcanvas.Body>
    </Offcanvas>
  );
};

export default OffCanvas;
