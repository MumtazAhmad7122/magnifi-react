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
         import { Navbar, Nav, NavDropdown, Container } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import './Header.css';

const MyHeader = () => {
  return (
    <Navbar expand="lg" className="bg-body-tertiary fixed-top">
      <Container vertical-align="middle">
        <Navbar.Brand href="#home">BRAND</Navbar.Brand>
        
        {/* This is the Hamburger Button */}
        <Navbar.Toggle aria-controls="basic-navbar-nav" />

        {/* This is the part we will turn into a full-screen column */}
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="ms-auto custom-full-screen-nav">
            <Nav.Link as={Link} to="/" className="fs-2 py-3">About Us</Nav.Link>
            <Nav.Link href="#link" className="fs-2 py-3">Link</Nav.Link>
            
            <NavDropdown title="Dropdown" id="basic-nav-dropdown" className="fs-2 py-3">
              <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
              <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
              <NavDropdown.Divider />
              <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
            </NavDropdown>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
};
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