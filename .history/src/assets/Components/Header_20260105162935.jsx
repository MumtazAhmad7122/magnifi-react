import React from "react";
import {Container,Row,Col,Button } from "react-bootstrap";
import Navbar from 'react-bootstrap/Navbar';
import { Nav,NavDropdown } from "react-bootstrap";
import logo from '../imagee/logo.png';
import { GiHamburgerMenu } from "react-icons/gi";
import { FaSearch } from "react-icons/fa";
import { Link } from 'react-router-dom';
import { NavLink } from 'react-router-dom';
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
            <Nav.Link href="#link">Link</Nav.Link>
            <NavDropdown title="Dropdown" id="basic-nav-dropdown">
              <NavDropdown.Item as={Link} to="/your-path">
  Action
              <NavDropdown.Item href="#action/3.2">
                Another action
              </NavDropdown.Item>
              <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
              <NavDropdown.Divider />
              <NavDropdown.Item href="#action/3.4">
                Separated link
              </NavDropdown.Item>
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