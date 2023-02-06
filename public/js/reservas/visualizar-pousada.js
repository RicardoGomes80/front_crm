$(document).ready(function() {    
    $(document).on('click','.jFiler-item-thumb', function(e) {
        var imgSrc = $(this).find('.jFiler-item-thumb-image').find('img').attr('src')
        $('#imagepreview').attr('src', imgSrc);
        $('#imagemodal').modal('show');
     });
});