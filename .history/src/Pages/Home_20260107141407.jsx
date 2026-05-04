import React from 'react';
import Header from '../assets/Components/Header';
import Carousell from '../assets/Components/Carousell';
import ContemporaryScienceCentre from '../assets/Components/ContemporaryScienceCentre';
import Exhibition from '../assets/Components/Exhibition';
import Passes from '../assets/Components/passes';
function Home() {
  return (
    <div>
   <Header/> 
   <Carousell/>
   <ContemporaryScienceCentre/>
   <Exhibition/>
   <Passes/>
    </div>
  )
}

export default Home