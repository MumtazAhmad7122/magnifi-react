import React from 'react'
import { Container,Row,Col } from 'react-bootstrap'
import { Link } from 'react-router-dom'
import { FaFacebookF } from "react-icons/fa";
import { FaTwitter } from "react-icons/fa";
import { FaYoutube } from "react-icons/fa";
import { FaLinkedinIn } from "react-icons/fa";
import { FaInstagram } from "react-icons/fa";
import { FaTiktok } from "react-icons/fa";
function Footer() {
  return (
    <footer className='pt-5 pb-5'>
     <Container>
      <Row>
      <Col md={3}>
      <div className='section-1'>
        <h5 className='text-white'>Timings:</h5>
        <p class="m-0 text-white">Monday - Thursday</p>
        <p class="m-0 text-white">9:00 am – 5:00 pm</p>
        <br/>
        <p className='text-white'>Friday: CLOSED</p>
        <br/>
        <p class="m-0 text-white">Saturday & Sunday</p>
        <p class="m-0 text-white">2:00 pm – 9:00 pm</p>
        <br/>
        <p className='text-white'>PLEASE NOTE THAT ON SATURDAY, 10TH JANUARY, WE ARE OPEN 10:00 AM TO 7:30 PM (due to a private event)</p>
        <br/>
        <p className='text-white'>Address:<br/>Plot no 1 RY – 15 Railway Quarter,Karachi.</p>
        <br/>
        <p class="m-0 text-white">Phone</p> 
        <p class="m-0 text-white">General enquiries: (021) 388 99 672</p> 
        <p class="m-0 text-white">Birthday bookings: 0300 045 8674</p>
       <p class="m-0 text-white">School visit bookings: 0300 859 1689</p>
       <br/>
       <p className='text-white'>Copyright © The Dawood Foundation’s<br/>MagnifiScience Centre 2021 - 2024</p>
        </div>
      </Col>
      <Col md={3}>
      <div className='list'>
        <h5 className='text-white pb-2'><Link to="#" className="nav-link text-white">Visit</Link></h5>
        <ul className='p-0'>
        <li><Link to="#" className="nav-link text-white">Visit Info</Link></li>
        <li><Link to="#" className="nav-link text-white">School Visits</Link></li> 
        <li><Link to="#" className="nav-link text-white">Group Visits</Link></li> 
        <li><Link to="#" className="nav-link text-white">Corporate Packages</Link></li>
        <li><Link to="#" className="nav-link text-white">Birthday Party Packages</Link></li>
        <li><Link to="#" className="nav-link text-white">Would you like us to visit you</Link></li>
         <li><Link to="#" className="nav-link text-white">Terms and Conditions</Link></li>
        </ul>
      </div>
      </Col>
      <Col md={3}>
      <div className='list'>
        <h5 className='text-white pb-2'><Link to="#" className="nav-link text-white">Exhibits</Link></h5>
        <ul className='p-0'>
        <li><Link to="#" className="nav-link text-white">Kids'World Karachi</Link></li>
        <li><Link to="#" className="nav-link text-white">The World Within Us</Link></li> 
        <li><Link to="#" className="nav-link text-white">The Physical World</Link></li> 
        <li><Link to="#" className="nav-link text-white">Our World, Our Creation</Link></li>
        <li><Link to="#" className="nav-link text-white">Jugaar Ghar</Link></li>
        <li><Link to="#" className="nav-link text-white">Science Garden</Link></li>
        </ul>
        <h5 className='pt-3'><Link to="#" className="nav-link text-white">Host An Event</Link></h5>
      </div>
      </Col>
      <Col md={3}>
       <div className='list'>
        <h5 className='text-white pb-4'>Support Us</h5>
        <h5 className='text-white pb-2 text-uppercase'>About Us</h5>
        <ul className='p-0'>
        <li><Link to="#" className="nav-link text-white">Our Story</Link></li>
        <li><Link to="#" className="nav-link text-white">MSC Community Engagement</Link></li> 
        <li><Link to="#" className="nav-link text-white">FAQs</Link></li> 
        <li><Link to="#" className="nav-link text-white">Careers</Link></li>
        <li><Link to="#" className="nav-link text-white">Media</Link></li>
        </ul>
        <h5 className='pt-3'><Link to="#" className="nav-link text-white">Contact Us</Link></h5>
      </div>
      </Col> 
      </Row>
      <div className='social-links d-flex align-ite-center'>
        <Link to="#" className='nav-link text-white pe-4'><FaFacebookF size={25} /></Link>
        <Link to="#" className='nav-link text-white pe-4'><FaTwitter size={25} /></Link>
        <Link to="#" className='nav-link text-white pe-4'><FaYoutube size={20} /></Link>
        <Link to="#" className='nav-link text-white pe-4'><FaLinkedinIn size={20} /></Link>
         <Link to="#" className='nav-link text-white pe-4'><FaInstagram size={20} /></Link>
         <Link to="#" className='nav-link text-white pe-4'><FaTiktok size={20} /></Link>
      </div>
      </Container>     
    </footer>
  )
}

export default Footer