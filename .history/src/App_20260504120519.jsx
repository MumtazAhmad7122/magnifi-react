import { useState, useEffect } from 'react'
import './App.css'
import { Routes, Route, useLocation } from 'react-router-dom'
import Home from "./Pages/Home"
import ContactUs from "./Pages/ContactUs";
import Sletter from "./Pages/Sletter";
import PrintMedia from './Pages/PrintMedia'
import ElectronicMedia from './Pages/ElectronicMedia'
import TheDawoodFoundation from './Pages/TheDawoodFoundation'
import JugaarGhar from './Pages/JugaarGhar'

function PageTitleUpdater() {
  const location = useLocation();

  useEffect(() => {
    const titles = {
      '/': 'Home',
      '/contactus': 'Contact Us | Get in Touch',
    };

    const pageName = location.pathname.split('/').filter(Boolean).pop();
    const formattedName = pageName 
      ? pageName.charAt(0).toUpperCase() + pageName.slice(1).replace(/-/g, ' ') 
      : 'Home';

    document.title = titles[location.pathname] || `${formattedName} | MyApp`;
  }, [location]);

  return null;
}

function App() {
  return (
    <>
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

export default App;