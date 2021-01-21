

jQuery(function(){
    $('.review_post_modal').on('click',function(){
      $('.review_post').fadeIn(0);
      return false;
    });
    $('.review_modal_close').on('click',function(){
      $('.review_post').fadeOut(0);
      return false;
    });
    $(document).click(function(event) {
    if(!$(event.target).closest('.review_post').length){
      $('.review_post').fadeOut(0);
      return true;
    }
    });
});
