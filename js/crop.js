$(document).ready(function(){

    $image = $('.image-container img');
    width = $image.width();
    height = $image.height();

    $image.css({
        left: 0 - (width / 2),
        top: 0 - (height / 2)
    });
});
