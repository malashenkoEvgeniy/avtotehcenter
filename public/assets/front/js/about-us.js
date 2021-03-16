$(document).ready(function() {
    
    $(".certificates-wrapper").slick({
    dots: true,
    infinite: true,
    slidesToShow: 4,
    autoplay: true,    
    slidesToScroll: 1,
      responsive: [
    {
      breakpoint: 768,
      settings: {

        slidesToShow: 3
      }
    },
    {
      breakpoint: 568,
      settings: {

        slidesToShow: 2
      }
    }
  ]
  });
    
});
