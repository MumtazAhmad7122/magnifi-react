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
    <NavDropdown.Item as={Link} to="#" className="text-uppercase">Visit Info</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">School Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-uppercase" to="#">Group Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-uppercase" to="#">Corporate Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link text-uppercase" to="#">Birthday Party Packages</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link " to="#">Would You Like Us to Visit You</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link " to="#">Facilities</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link " to="#">Terms & Conditions</NavDropdown.Item>
            </NavDropdown>
                    <NavDropdown title="Exhibitions" className="text-uppercase" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="#">Exhibitions</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link " to="#">Kids WOrld Karachi</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link" to="#">The World Within Us</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link " to="#">The Physical Worlds</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link " to="#">Our Creation Our Worlds</NavDropdown.Item>
              <NavDropdown.Item as={Link} className="nav-link " to="#">OutDoor Activities</NavDropdown.Item>
            </NavDropdown>
            <Link className="nav-link text-uppercase" to="/">Host An Event</Link>
            <Link className="nav-link text-uppercase" to="/">MagnifiGreen</Link>
            <Link className="nav-link text-uppercase"  to="/">MagnifiScience Travel</Link>
            <Link className="nav-link text-uppercase" to="/">MagnifiStem</Link>
             <Link className="nav-link text-uppercase" to="/">Media</Link>
              <Link className="nav-link text-uppercase" to="/">Support Us</Link>
               <Link className="nav-link text-uppercase" to="/">ContactUs</Link>
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