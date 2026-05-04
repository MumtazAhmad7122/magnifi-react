import React from "react";
import { Container, Row, Col, Nav, NavDropdown, Navbar } from "react-bootstrap";
import logo from '../imagee/logo.png';

function Header() {
  return (
    <header className="sticky-top bg-light border-bottom">
      {/* 1. Added 'fluid' to make the bar span the whole screen */}
      <Container fluid> 
        {/* 2. Added 'align-items-center' so logo and nav are level */}
        <Row className="align-items-center">
          
          {/* 3. Logo Column (3 units) */}
          <Col md={3} xs={6}>
            <div className="logo">
              <img src={logo} alt="logo" style={{ maxHeight: '50px' }} />
            </div>
          </Col>

          {/* 4. Nav Column (Increased to 9 to fill the remaining 12 units) */}
          <Col md={9} xs={6}>
            <div className="nav-bar">
              <Navbar expand="lg" className="bg-body-tertiary">
                <Navbar.Brand href="#home">React-Bootstrap</Navbar.Brand>
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                  {/* 5. Changed 'me-auto' to 'ms-auto' to push links to the right */}
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