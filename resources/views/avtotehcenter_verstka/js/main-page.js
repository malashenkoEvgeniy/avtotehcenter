$(document).ready(function() {


  $(".regular").slick({
    dots: false,
    infinite: true,
      autoplay: true,  
      arrows: false,
    slidesToShow: 9,
    slidesToScroll: 3,
      responsive: [
    {
      breakpoint: 768,
      settings: {

        slidesToShow: 8
      }
    },
    {
      breakpoint: 568,
      settings: {

        slidesToShow: 3
      }
    }
  ]
  });

    
});
