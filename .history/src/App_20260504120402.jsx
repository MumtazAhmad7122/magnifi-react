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