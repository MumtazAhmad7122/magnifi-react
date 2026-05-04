import React from 'react';
import './Sidebar.css';

const Sidebar = ({ isOpen, toggleMenu }) => {
  const menuItems = [
    "About Us", "Visit", "Exhibitions", "Host an Event", 
    "MagnifiGreen", "MagnifiScience Travels", "MagnifiSTEM", 
    "Media", "Support Us", "Contact Us"
  ];

  return (
    <div className={`offcanvas-menu ${isOpen ? 'open' : ''}`}>
      {/* Close Button */}
      <div className="close-btn-container">
        <button className="close-btn" onClick={toggleMenu}>✕</button>
      </div>

      {/* Menu Links */}
      <ul className="menu-list">
        {menuItems.map((item, index) => (
          <li key={index} className="menu-item">
            <a href={`#${item.replace(/\s+/g, '-').toLowerCase()}`}>
              {item} 
              <span className="arrow">›</span>
            </a>
          </li>
        ))}
      </ul>

      {/* Footer Info */}
      <div className="menu-footer">
        <div className="contact-info">
          <p>✉ msc@dawoodfoundation.org</p>
          <p>📞 +92 (021) 388 99 672</p>
        </div>
      </div>
    </div>
  );
};

export default Sidebar;