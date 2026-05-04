import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { BrowserRouter,Routes,Route,useLocation } from 'react-router-dom'
import { useEffect } from 'react'
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"></link>
import Home from "./Pages/Home"
import ContactUs from './Pages/contactus'
import Sletter from './Pages/sletter'
import PrintMedia from './Pages/PrintMedia'
import ElectronicMedia from './Pages/ElectronicMedia'
import TheDawoodFoundation from './Pages/TheDawoodFoundation'
import JugaarGhar from './Pages/JugaarGhar'
// ... imports same rahenge

function App() {
  return (
    <>
      {/* Yeh line ab error nahi degi kyunki main.jsx mein Router hai */}
      <PageTitleUpdater />
      
      <Routes>
        <Route path="/" element={<Home/>}/>
        <Route path="/contactus" element={<ContactUs />} />
        <Route path="/sletter" element={<Sletter />} />
        <Route path="/printmedia" element={<PrintMedia />} />
        <Route path="/electronicmedia" element={<ElectronicMedia />} />
        <Route path="/the-dawood-foundation" element={<TheDawoodFoundation />} />
        <Route path="/Jugaar-Ghar" element={<JugaarGhar />} />
      </Routes>
    </>
  );
}