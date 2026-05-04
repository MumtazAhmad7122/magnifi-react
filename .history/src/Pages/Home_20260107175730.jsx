import React from 'react';
import Header from '../assets/Components/Header';
import Carousell from '../assets/Components/Carousell';
import ContemporaryScienceCentre from '../assets/Components/ContemporaryScienceCentre';
import Exhibition from '../assets/Components/Exhibition';
import Passes from '../assets/Components/passes';
import About from '../assets/Components/About';
import Gift from '../assets/Components/Gift';
import Footer from '../assets/Components/Footer';
function Home() {
  return (
    <div>
   <Header/> 
   <Carousell/>
   <ContemporaryScienceCentre/>
   <Exhibition/>
   <Passes/>
   <About/>
   <Gift/>
   <Footer/>
    </div>
  )
}

export default Home