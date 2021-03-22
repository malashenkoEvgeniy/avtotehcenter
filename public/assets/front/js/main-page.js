$(document).ready(function() {


  $(".regular").slick({
    dots: false,
    infinite: true,
      // autoplay: true,
      arrows: false,
    slidesToShow: 9,
    slidesToScroll: 3,
      responsive: [
    {
      breakpoint: 768,
      settings: {

        slidesToShow: 7,
          slidesToScroll: 1,
      }
    },
    {
      breakpoint: 578,
      settings: {

        slidesToShow: 3,
        slidesToScroll: 1,
      }
    }
  ]
  });


});
