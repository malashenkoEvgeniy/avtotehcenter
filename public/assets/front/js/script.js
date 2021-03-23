
$(document).ready(function() {


    $('.product-description-link, .item-icon-chat').click(function(){
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






    $("#navbarDropdown-menu").width("80px");
    $('.sm-menu-btn').click(function(){
        $('.nav-menu-list ').toggleClass('nav-menu-list-open');
    })

    $('.technics-item-control-close').click(function(){
        $('.nav-menu-list ').toggleClass('nav-menu-list-open');

    });

    $('.nav-sub-menu-btn-technics').click(function(){
        $('.technics-list ').addClass('nav-sub-menu-btn-service');
    });
    $('.technics-item-control-back').click(function(){
        $('.technics-list ').removeClass('nav-sub-menu-btn-service');
    });

    $('.nav-sub-menu-btn-service').click(function(){
        $('.service-list').addClass('nav-sub-menu-btn-service');
    });

    $('.technics-item-control-back').click(function(){
        $('.service-list').removeClass('nav-sub-menu-btn-service');
    });

    $('.btn-back-onmobile').click(function(){
        $('.service-list').removeClass('nav-sub-menu-btn-service');
        $('.technics-list ').removeClass('nav-sub-menu-btn-service');
    });

});
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.footer__button-up').fadeIn();
        } else {
            $('.footer__button-up').fadeOut();
        }
    });

    $('.footer__button-up').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

});

function toggleMobileMenu(){
    $('.mobile-menu').toggleClass('active');
    $('body').toggleClass('no-scroll');
}
$('.open-mobile-menu').click(toggleMobileMenu);
$('.mobile-menu__close').click(toggleMobileMenu);

$('.open-sub-menu').click(function(){
    $(this).next().toggleClass('active');
    $(this).parent().toggleClass('active');
    $(this).toggleClass('active');
});
function headerBg(){
    if($(window).scrollTop() > 50){
        $('.header').addClass('active-bg');
    }else{
        $('.header').removeClass('active-bg');
    }
}
$(document).ready(headerBg);
$(window).scroll(headerBg);
$(document).mouseup(function (e){ // событие клика по веб-документу
    let menu = $(".mobile-menu"); // тут указываем ID элемента
    let open = $('.open-mobile-menu');
    if (!menu.is(e.target) // если клик был не по нашему блоку
        && menu.has(e.target).length === 0 &&
        !open.is(e.target) && open.has(e.target).length === 0
    ) { // и не по его дочерним элементам
        // menu.removeClass('active'); // скрываем его
        $('.mobile-menu').removeClass('active');
        $('body').removeClass('no-scroll');
    }
});


function toggle_social_button() {
    $('.social-items-menu').fadeToggle();
    $('.social-btn').toggleClass('active');
    $('.social-btn .s-btn-close').toggleClass('active');
    $('.social-btn-pulse').toggleClass('active');
    $('.social-btn-bg').toggleClass('active');
    $('.social-btn .btn-1').toggleClass('close');
    $('.social-btn .btn-2').toggleClass('close');
    $('.social-items-bg').fadeToggle();
    $('.social-items-bg').toggleClass('active');
}

swap_social_button_icons();

function swap_social_button_icons() {
    $('.btn-1').fadeToggle(1500);
    $('.btn-2').fadeToggle(1500);
    setTimeout(swap_social_button_icons, 2000);
}

$('.social-items-wrapper, .social-items-bg ').click(function () {
    toggle_social_button();
});





$('.call-contact-form, #contact-from-bg .close-form').click(function(){
    $('#contact-from-bg').fadeToggle();
});

$('#contact-from-bg').click(function(e){
    var form_bg = $('#contact-from-bg');
    if ( form_bg.is(e.target ) && form_bg.has(e.target).length === 0) {
        $('#contact-from-bg').fadeToggle();
    }
});
