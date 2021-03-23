
$(document).ready(function() {







    // block sort in liftin pour
     $('.serch-rezult-btn').click(function(){
         $('.serch-block-none').toggleClass('search-rezult-block');
    });

    $('.catalog-filter-filter, .filter-class').click(function(){
         $('.catalog-filter-wrapper').toggleClass('catalog-filter-wrapper-block');
    });

    $('.catalog-filter-block-link').click(function(){
         $('.catalog-filter-checkbox-block').toggleClass('catalog-filter-checkbox-visible');
    });

});


