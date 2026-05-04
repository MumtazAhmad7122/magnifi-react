import React, { useState, useEffect } from 'react';
import { Container, Row, Col, Button, Nav, Navbar, NavDropdown } from "react-bootstrap";
import logo from '../imagee/logo.png';
import { GiHamburgerMenu } from "react-icons/gi";
import { FaSearch } from "react-icons/fa";
import { Link } from 'react-router-dom';
import './Header.css';

function Header() {
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      if (window.scrollY > 50) {
        setIsScrolled(true);
      } else {
        setIsScrolled(false);
      }
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <header className={`header-container ${isScrolled ? 'bg-black' : 'bg-transparent'}`}>
      <Container fluid>
        <Row className="align-items-center">
          <Col md={1}>
            <div className="logo">
              <img src={logo} className="img-fluid" alt="logo" />
            </div>
          </Col>
          <Col md={9}>
            <div className="nav-bar">
              <Navbar expand="lg">
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                  <Nav className="me-auto">
                    {/* Add 'nav-link' class to your Links for proper spacing */}
                    <Link className="nav-link" to="/">About Us</Link>
                    <NavDropdown title="Visit" id="visit-dropdown">
                      <NavDropdown.Item as={Link} to="#">Visit Info</NavDropdown.Item>
                      <NavDropdown.Item as={Link} to="#">School Visits</NavDropdown.Item>
                    </NavDropdown>
                    <Link className="nav-link" to="/">Host An Event</Link>
                    <Link className="nav-link" to="/">Media</Link>
                    <Link className="nav-link" to="/">ContactUs</Link>
                  </Nav>
                </Navbar.Collapse>
              </Navbar>
            </div>
          </Col>
          <Col md={2}>
            <div className="last-menu d-flex align-items-center justify-content-end gap-3">
              {/* Added classes to icons */}
              <GiHamburgerMenu className="nav-icon" />
              <FaSearch className="nav-icon" />
              <Button variant="primary">Buy Tickets</Button>
            </div>
          </Col>
        </Row>
      </Container>
    </header>
  );
}

export default Header;