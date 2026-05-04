import React, { useEffect, useState } from 'react';

const JugaarGallery = () => {
  const [data, setData] = useState(null);

  useEffect(() => {
    // Replace 123 with your specific Page ID
    fetch('https://your-wp-site.com/wp-json/wp/v2/pages/123')
      .then(response => response.json())
      .then(json => setData(json.acf)) // Accessing the 'acf' object
      .catch(err => console.error(err));
  }, []);

  if (!data) return <p>Loading...</p>;

  return (
    <section className="jugaar-section">
      <div className="description">
        {/* Use dangerouslySetInnerHTML if your ACF field is a WYSIWYG */}
        <div dangerouslySetInnerHTML={{ __html: data.jugaar_ghar_description }} />
      </div>

      <div className="gallery-grid">
        {data.jugaar_ghar_gallery.map((image) => (
          <div key={image.id} className="gallery-item">
            <img 
              src={image.sizes.large} 
              alt={image.alt || 'Gallery Image'} 
              style={{ width: '100%', height: 'auto', borderRadius: '8px' }}
            />
          </div>
        ))}
      </div>
    </section>
  );
};

export default JugaarGallery;