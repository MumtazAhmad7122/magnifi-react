import React from "react";
import {Container,Row,Col,Button } from "react-bootstrap";
import Navbar from 'react-bootstrap/Navbar';
import { Nav,NavDropdown } from "react-bootstrap";
import logo from '../imagee/logo.png';
import { GiHamburgerMenu } from "react-icons/gi";
import { FaSearch } from "react-icons/fa";
import { Link } from 'react-router-dom';
import { NavLink } from 'react-router-dom';
import './Header.css'
function Header() {
  return (
    <header className="sticky-top">
      <Container>
        <Row>
         <Col md={3}>
         <div className="logo">
         <img src={logo}></img>
         </div>
         </Col>
         <Col md={6}>
          <div className="nav-bar">
            <Navbar expand="lg" className="bg-body-tertiary">
      
        
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="me-auto">
            <Link to="/">About Us</Link>
            <NavDropdown title="Visit" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="#">Visit Info</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">School Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">Group Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">Corporate Visits</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">Birthday Party Packages</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">Would You Like Us to Visit You</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">Facilities</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">Terms & Conditions</NavDropdown.Item>
            </NavDropdown>
                    <NavDropdown title="Visit" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="#">Exhibitions</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">Kids WOrld Karachi</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">The World Within Us</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">The Physical Worlds</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">Our Creation Our Worlds</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="#">OutDoor Activities</NavDropdown.Item>
            </NavDropdown>
          </Nav>
        </Navbar.Collapse>
      
    </Navbar> 
          </div>
         </Col>   
         <Col md={3}>
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