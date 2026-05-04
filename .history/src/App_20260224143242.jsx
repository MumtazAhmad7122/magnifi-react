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

function PageTitleUpdater() {
  const location = useLocation();

  useEffect(() => {
    const titles = {
      '/': 'Home',
      '/contactus': 'Contact Us | Get in Touch',
    };

    // Agar path map mein nahi hai, toh URL se auto-title banao
    const pageName = location.pathname.split('/').filter(Boolean).pop();
    const formattedName = pageName 
      ? pageName.charAt(0).toUpperCase() + pageName.slice(1).replace(/-/g, ' ') 
      : 'Home';

    document.title = titles[location.pathname] || `${formattedName} | MyApp`;
  }, [location]);

  return null;
}
function App() {
  const [count, setCount] = useState(0)

  return (
 <BrowserRouter>
 <PageTitleUpdater />
 <Routes>
  
  <Route path="/" element={<Home/>}/>
  <Route path="/contactus" element={<ContactUs />} />
  <Route path="/sletter" element={<Sletter />} />
  <Route path="/printmedia" element={<PrintMedia />} />
   <Route path="/electronicmedia" element={<ElectronicMedia />} />
   <Route path="/the-dawood-foundation" element={<TheDawoodFoundation />} />
 </Routes>
 </BrowserRouter>
  );
}

export default App
