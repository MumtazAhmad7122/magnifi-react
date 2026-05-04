import React from "react";
import {Container,Row,Col,Button } from "react-bootstrap";
import {useState, useEffect } from 'react';
import Navbar from 'react-bootstrap/Navbar';
import { Nav,NavDropdown } from "react-bootstrap";
import logo from '../imagee/logo.png';
import { GiHamburgerMenu } from "react-icons/gi";
import { FaSearch } from "react-icons/fa";
import { Link } from 'react-router-dom';
import { NavLink } from 'react-router-dom';
import './Header.css'
function Header() {
const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      // If the user scrolls down more than 50px, change state
      if (window.scrollY > 50) {
        setIsScrolled(true);
      } else {
        setIsScrolled(false);
      }
    };

    window.addEventListener('scroll', handleScroll);
    
    // Clean up to prevent memory leaks
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);
  return (
    <header className={`header-container ${isScrolled ? 'bg-black' : 'bg-transparent'}`}>
      <Container fluid>
        <Row>
         <Col md={1}>
         <div className="logo">
         <a href="/"><img src={logo} className="img-fluid"></img></a>
         </div>
         </Col>
         <Col md={9}>
          <div className="nav-bar">
            <Navbar expand="lg" className="">
      
        
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="me-auto">
            <Link className="nav-link text-uppercase" to="/">About Us</Link>
            <NavDropdown title="Visit" className="text-uppercase" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="#" className=" text-capitalize">Visit Info</NavDropdown.Item>
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
             <NavDropdown title="Visit" className="text-uppercase" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="#" className=" text-uppercase">Media</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#" className=" text-capitalize">Newsletter</NavDropdown.Item>
           <div className="dropdown-submenu">
  <span className="dropdown-item submenu-title p-0">
   <Link className="nav-link text-capitalize" to="#">Testimonials</Link>  
  </span>

  <div className="dropdown-menu submenu-right">
    <NavDropdown.Item as={Link} to="/testimonials/print">
     <Link className="nav-link text-capitalize" to="#">Print Media</Link>
    </NavDropdown.Item>
    <NavDropdown.Item as={Link} to="/testimonials/electronic">
      <Link className="nav-link text-capitalize" to="#">Electronic Media</Link>
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
          </div>
         </Col>   
         <Col md={2}>
         <div className="last-menu">
         <GiHamburgerMenu />
         <FaSearch />
          <Button variant="primary">Buy Tickets</Button>
          </div>
         </Col>
        </Row>
      </Container>
    </header>
  )
}

export default Header