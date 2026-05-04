// ... your imports

function App() {
  return (
    <>
      {/* PageTitleUpdater is now safely inside the Router context from main.jsx */}
      <PageTitleUpdater /> 
      
      <Routes>
        <Route path="/" element={<Home />} />
        {/* ... all your other routes */}
      </Routes>
    </>
  );
}

export default App;