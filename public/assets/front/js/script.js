
$(document).ready(function() {
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
