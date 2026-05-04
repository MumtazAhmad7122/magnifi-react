import React from 'react'

function Electronic() {
    
  return (
    const mainSlider = useRef(null);
  const thumbSlider = useRef(null);

  const mainSettings = {
    asNavFor: thumbSlider.current,
    ref: mainSlider,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
  };

  const thumbSettings = {
    asNavFor: mainSlider.current,
    ref: thumbSlider,
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
    <div className="videos">
      {/* Main Video Slider */}
      <Slider {...mainSettings} className="slider-for-2">
        {videos.map((video, index) => (
          <div key={index} className="video-slide">
            <iframe
              className="item-video"
              src={video.src}
              title={video.title}
              frameBorder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowFullScreen
            />
          </div>
        ))}
      </Slider>

      {/* Thumbnail Slider */}
      <Slider {...thumbSettings} className="slider-nav-2">
        {thumbnails.map((thumb, index) => (
          <div key={index} className="thumbnail-slide">
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
    </div>
  );
};
  )


export default Electronic