$('.show-more').click(function(){

    let page = $(this).attr('data-page');

    $.ajax({
        method: 'GET',
        url: page,
        data: {
            _token: '{{csrf_token()}}',
        }
    }).done(function(data){
        let page = $(data);
        let items = page.find('.catalog-card-item');
        if (page.find('.show-more').length == 1) {
            let nextPage = page.find('.show-more').attr('data-page');
            $('.show-more').attr('data-page', nextPage);
        }else{
            $('.show-more').remove();
        }

        $('.catalog-card-list').append(items);

        let next = $('.page-item.active').next();
        $('.page-item.active').removeClass('active');
        next.addClass("active");
    });
});
