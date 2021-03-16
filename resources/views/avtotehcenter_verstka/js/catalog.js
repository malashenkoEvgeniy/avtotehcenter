
$(document).ready(function() {
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
