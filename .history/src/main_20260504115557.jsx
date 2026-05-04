import { Routes, Route } from 'react-router-dom';
import Home from "./Pages/Home";
import ContactUs from "./Pages/ContactUs";
import Sletter from "./Pages/Sletter";
import PrintMedia from './Pages/PrintMedia';
import ElectronicMedia from './Pages/ElectronicMedia';
import TheDawoodFoundation from './Pages/TheDawoodFoundation';
import JugaarGhar from './Pages/JugaarGhar';
import PageTitleUpdater from './Components/PageTitleUpdater'; // Assuming this is your component name

function App() {
  return (
    <>
      {/* This hook now works because it is inside the Router in main.jsx */}
      <PageTitleUpdater /> 
      
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/contactus" element={<ContactUs />} />
        <Route path="/sletter" element={<Sletter />} />
        <Route path="/print-media" element={<PrintMedia />} />
        <Route path="/electronic-media" element={<ElectronicMedia />} />
        <Route path="/tdf" element={<TheDawoodFoundation />} />
        <Route path="/jugaar-ghar" element={<JugaarGhar />} />
      </Routes>
    </>
  );
}

export default App;