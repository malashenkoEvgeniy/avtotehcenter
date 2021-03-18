// $('.product-description-link').click(function(){
//     $('.form-consultation').removeClass('form-consultation-none');
//     // $('.btn-consultation-close').addClass('btn-consultation-close-visible');
// });
//
// $('.btn-consultation-close').click(function(){
// });

$('.catalog-card-description-link').click(function(){
    $('.form-consultation').removeClass('form-consultation-none');
});

$('.btn-consultation-close').click(function(evt){
    evt.preventDefault();
    $('.form-consultation').addClass('form-consultation-none');
});
