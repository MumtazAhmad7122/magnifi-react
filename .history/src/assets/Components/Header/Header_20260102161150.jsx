import React from "react";
import { Container,Row,Col,Button } from "react-bootstrap";
function Example() {
  return (
    <div>
      <h1>
        Example heading
        <Badge bg="secondary" as={Button}>
          New
        </Badge>
      </h1>
    </div>
  );
}