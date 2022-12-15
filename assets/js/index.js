import "../sass/main.scss";

$(document).ready(function () {
  $(".caroucel-Social-networks").slick({
    slidesToShow: 1,
    dots: true,
    arrows: false,
    infinite: true,
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          dots: true,
          arrows: false,
          infinite: false,
          cssEase: "linear",
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          dots: true,
          arrows: false,
          infinite: false,
          cssEase: "linear",
        },
      },
    ],
  });
});
