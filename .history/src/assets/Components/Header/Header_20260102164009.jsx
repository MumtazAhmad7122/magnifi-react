import React from "react";
import { Container,Row,Col,Button } from "react-bootstrap";
import Navbar from 'react-bootstrap/Navbar';
import logo from './assets/logo.png';
function Example() {
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
          <div c
         </Col>   
         <Col md={3}>
         </Col>
        </Row>
      </Container>
    </header>
  );
}