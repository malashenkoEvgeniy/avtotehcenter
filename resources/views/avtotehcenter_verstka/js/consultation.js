$('.product-description-link').click(function(){
    $('.form-consultation').addClass('consultation-popup');
    $('.btn-consultation-close').addClass('btn-consultation-close-visible');
});

$('.btn-consultation-close').click(function(){
    $('.form-consultation').removeClass('consultation-popup');
    $('.btn-consultation-close').removeClass('btn-consultation-close-visible');
});

$('.catalog-card-description-link').click(function(){
    $('.form-consultation').addClass('consultation-popup');
    $('.btn-consultation-close').addClass('btn-consultation-close-visible');
});

$('.btn-consultation-close').click(function(){
    $('.form-consultation').removeClass('consultation-popup');
    $('.btn-consultation-close').removeClass('btn-consultation-close-visible');
});