import React, { useState } from 'react'
import Slider from "react-slick";
import "slick-carousel/slick/slick.css"; 
import "slick-carousel/slick/slick-theme.css";
import{Container,Row,Col} from 'react-bootstrap';
function Electronic() {
  // Use state instead of useRef to trigger a re-render once refs are assigned
  const [nav1, setNav1] = useState(null);
  const [nav2, setNav2] = useState(null);

  const videos = [
    { src: "https://www.youtube.com/embed/flACsJig-64?si=WHG4PzoKgD7i1Acv", title: "Chief Minister of Sindh, Syed Murad Ali Shah visited TDF's MagnifiScience Centre"},
    { src: "https://www.youtube.com/embed/Wu5JuyFHK0Q?si=cGf4Iwp3Ax2NdXkb", title: "The Chief Minister of Sindh, Syed Murad Ali Shah, visited TDF's MagnifiScience Centre" },
    { src: "https://www.youtube.com/embed/wA-TfQJ21UQ?si=1_SIa210ii3fPe6b", title: "ARY News coverage of MagnifiScience Drama Competition" },
    { src: "https://www.youtube.com/embed/MymaGCkCU4o?si=f19JbB5Xmv7YACVq", title: "Discover Pakistan - MSC's Children's Market" },
    { src: "https://www.youtube.com/embed/CtFzuQWtylg?si=1yofSdRZCnW2ex3K", title: "Neo News Coverage of MagnifiScience Drama Competition" },
    { src: "https://www.youtube.com/embed/poY4D38Zq2Y?si=2X6nRQ8VSIBmcf2m", title: "Hum News' - MSC's Children's Market" },
  ];

  const thumbnails = [
    { img: "/src/assets/imagee/thumb1.jpg", title: "Chief Minister of Sindh, Syed Murad Ali Shah visited TDF's MagnifiScience Centre", duration: "2:30" },
    { img: "/src/assets/imagee/thumb2.jpg", title: "The Chief Minister of Sindh, Syed Murad Ali Shah, visited TDF's MagnifiScience Centre",duration: "2:48" },
     { img: "/src/assets/imagee/thumb3.jpg", title: "ARY News coverage of MagnifiScience Drama Competition", duration: "2:30" },
    { img: "/src/assets/imagee/thumb5.jpg", title: "Discover Pakistan - MSC's Children's Market", duration: "1:43" },
    { img: "/src/assets/imagee/thumb7.jpg", title: "Neo News Coverage of MagnifiScience Drama Competition", duration: "2:52" },
    { img: "/src/assets/imagee/thumb10.jpg", title: "Hum News' - MSC's Children's Market", duration: "5:12" },
  ];

  const mainSettings = {
    asNavFor: nav2, // Links to the second slider state
    ref: slider => setNav1(slider), // Callback ref saves instance to state
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
  };

  const thumbSettings = {
    asNavFor: nav1, // Links to the first slider state
    ref: slider => setNav2(slider), // Callback ref saves instance to state
    slidesToShow: 3,
    slidesToScroll: 1,
    focusOnSelect: true,
    vertical: true,
    arrows: true,
    verticalSwiping: true,
    centerMode: true,
    centerPadding: "0px",
  };

  return (
    <section className='electronic-sec pt-5' style={{}}>
    <Container>
     <Row>
           
    
      {/* Main Video Slider */}
      <Col md={6}>
      <Slider {...mainSettings} className="slider-for-2">
        {videos.map((video, index) => (
          <div key={index} className="video-slide">
            <iframe
              className="item-video"
              src={video.src}
              title={video.title}
              width="100%"
              height="350px"
              frameBorder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowFullScreen
            />
          </div>
        ))}
      </Slider>
     </Col>
      {/* Thumbnail Slider */}
      <Col md={6}>
      <Slider {...thumbSettings} className="slider-nav-2">
        {thumbnails.map((thumb, index) => (
          <div key={index} className="thumbnail-slide" style={{ cursor: 'pointer' }}>
            <div className="trailer-img">
              <img src={thumb.img} alt={thumb.title} width="100" height="56" />
            </div>
            <div className="trailer-infor">
              <h4 className="desc">{thumb.title}</h4>
              <p>{thumb.duration}</p>
            </div>
          </div>
        ))}
      </Slider>
      </Col>
       
      </Row>
      </Container>

     </section>
    
  );
}

export default Electronic;