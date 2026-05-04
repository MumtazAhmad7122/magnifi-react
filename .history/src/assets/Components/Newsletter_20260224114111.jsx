import React, { useEffect, useState } from 'react';

const NewsletterList = () => {
  const [newsletters, setNewsletters] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Aapka WordPress API Endpoint
    const apiUrl = "https://wpstaging.a2zcreatorz.com/magnifi-react/wp-json/wp/v2/newsletter";

    fetch(apiUrl)
      .then((response) => response.json())
      .then((data) => {
        setNewsletters(data);
        setLoading(false);
      })
      .catch((error) => {
        console.error("Error fetching data:", error);
        setLoading(false);
      });
  }, []);

  if (loading) return <p>Loading Newsletters...</p>;

  return (
    <div>
      <h2>Latest Newsletters</h2>
      <ul>
        {newsletters.map((item) => (
          <li key={item.id}>
            <h3>{item.title.rendered}</h3>
            
            {/* ACF Fields Accessing */}
            {item.acf.pdf_upload && (
              <p>PDF ID: {item.acf.pdf_upload}</p>
            )}
            
            {item.acf.url && (
              <a href={item.acf.url} target="_blank" rel="noreferrer">
                View Link
              </a>
            )}
          </li>
        ))}
      </ul>
    </div>
  );
};

export default NewsletterList;