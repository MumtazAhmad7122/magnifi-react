import React from "react";
import { Container,Row,Col,Button } from "react-bootstrap";
import logo from './assets/logo.png';
function Example() {
  return (
    <header className="sticky-top">
      <Container>
        <Row>
         <Col md={3}>
         <div className="logo"></div>
         <img src={logo}></img>
         </Col>
         <Col md={6}>
         </Col>   
         <Col md={3}>
         </Col>
        </Row>
      </Container>
    </header>
  );
}