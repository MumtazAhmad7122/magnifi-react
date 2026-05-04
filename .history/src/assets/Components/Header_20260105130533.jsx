import React from "react";
import { Container, Row, Col, Nav, NavDropdown, Navbar } from "react-bootstrap";
import logo from '../imagee/logo.png';

function Header() {
  return (
    <header className="sticky-top bg-light border-bottom">
      {/* Changed to Container fluid so it can span the full width if needed */}
      <Container fluid> 
        {/* Added align-items-center to fix vertical alignment issues */}
        <Row className="align-items-center">
          
          {/* Column 1: Logo (3 units) */}
          <Col md={3} xs={6}>
            <div className="logo">
              <img src={logo} alt="logo" style={{ maxHeight: '50px' }} />
            </div>
          </Col>

          {/* Column 2: Navbar (9 units to complete the 12-unit row) */}
          <Col md={9} xs={6}>
            <div className="nav-bar">
              <Navbar expand="lg" className="bg-body-tertiary p-0">
                <Navbar.Brand href="#home" className="d-md-none">Brand</Navbar.Brand>
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                  {/* Changed me-auto to ms-auto to push links to the right */}
                  <Nav className="ms-auto"> 
                    <Nav.Link href="#home">Home</Nav.Link>
                    <Nav.Link href="#link">Link</Nav.Link>
                    <NavDropdown title="Dropdown" id="basic-nav-dropdown">
                      <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
                      <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
                      <NavDropdown.Divider />
                      <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
                    </NavDropdown>
                  </Nav>
                </Navbar.Collapse>
              </Navbar> 
            </div>
          </Col>   

        </Row>
      </Container>
    </header>
  );
}

export default Header;