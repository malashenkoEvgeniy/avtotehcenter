
$(document).ready(function() {
    let model = $('#marka');
    $('#form-filter input').change(function (){
        //
        $('#marka *').remove();
        let radioVal = $(this).val();
        selectModel(radioVal, model);
        $('.catalog-filter-block-link span').text($(this).next().text());
        $('.catalog-filter-checkbox-block').toggleClass('catalog-filter-checkbox-visible');


    });

    if($('body').has('.class_btn').length){
        let radioVal = $('.class_btn').val();

    }

function selectModel(val, model) {
    $.ajax({
        type: "POST",
        url: "{{route('request-form-date')}}",
        data: {'_token': $('meta[name = "csrf-token"]').attr('content'), 'c_id':val},
    }).done(function( data ) {
        model.append("<option value='0'>Выберите марку</option>");
        for(let i = 0; i< data.length; i++) {
            model.append("<option style='padding-bottom: 10px' value='"+ data[i]['id']+"'>" + data[i]['translate_table']['title'] + "</option>");
        }});
    }






    // block sort in liftin pour
     $('.serch-rezult-btn').click(function(){
         $('.serch-block-none').toggleClass('search-rezult-block');
    });

    $('.catalog-filter-filter').click(function(){
         $('.catalog-filter-wrapper').toggleClass('catalog-filter-wrapper-block');
    });

    $('.catalog-filter-block-link').click(function(){
         $('.catalog-filter-checkbox-block').toggleClass('catalog-filter-checkbox-visible');
    });

});
