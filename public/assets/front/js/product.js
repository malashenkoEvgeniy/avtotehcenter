
 $('.product-main-img').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.product-secondary-img'
});
$('.product-secondary-img').slick({
   dots: false,
        arrows: false,
        vertical: true,
        verticalSwiping: true,
         autoplay: true,
//        centerMode: true,
    focusOnSelect: true,
        slidesToShow: 3,
        slidesToScroll: 1,
    asNavFor: '.product-main-img',
          responsive: [
    {
      breakpoint: 968,
      settings: {
        vertical: false,
        verticalSwiping: false,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 568,
      settings: {
          vertical: false,
        verticalSwiping: false,
        slidesToShow: 3
      }
    }
  ]
});

//
//      $(".vertical-center-4").slick({
//        dots: false,
//        arrows: false,
//        vertical: true,
//        verticalSwiping: true,
////         autoplay: true,
////        centerMode: true,
//        slidesToShow: 3,
//        slidesToScroll: 2,
//          responsive: [
//    {
//      breakpoint: 968,
//      settings: {
//        vertical: false,
//        verticalSwiping: false,
//        slidesToShow: 3
//      }
//    },
//    {
//      breakpoint: 568,
//      settings: {
//          vertical: false,
//        verticalSwiping: false,
//        slidesToShow: 3
//      }
//    }
//  ]
//      });
//
//    });
