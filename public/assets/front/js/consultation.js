$('.product-description-link').click(function(){
    $('.form-consultation').removeClass('form-consultation-none');
});


$('.catalog-card-description-link').click(function(){
    $('.form-consultation').removeClass('form-consultation-none');
});

$('.btn-consultation-close').click(function(evt){
    evt.preventDefault();
    $('.form-consultation').addClass('form-consultation-none');
});

function toggleFormSuccessAlert(){
    $('.form-consultation').addClass('form-consultation-none');
    $('.success').fadeIn();
    setTimeout(function(){
        $('.success').fadeOut();
        $('.form-consultation input[type=text], .form-consultation textarea').val('');
    },3000);
}

$('.form-consultation').submit(function(e){
    e.preventDefault();

    let url = $(this).attr('action');
    let method = $(this).attr('method');
    let data = $(this).serialize();

    $.ajax({
        method: method,
        url: url,
        data : data
    }).done(function(){
        toggleFormSuccessAlert();
    });
});

function toggleFormCatalogSuccessAlert(){
    $('.success').fadeIn();
    setTimeout(function(){
        $('.success').fadeOut();
        $('.form-consultation-catalog input[type=text], .form-consultation-catalog textarea').val('');
    },3000);
}

$('.form-consultation-catalog').submit(function(e){
    e.preventDefault();

    var url = $(this).attr('action');
    var method = $(this).attr('method');
    var data = $(this).serialize();

    $.ajax({
        method: method,
        url: url,
        data : data
    }).done(function(){
        toggleFormCatalogSuccessAlert();
    });
});



