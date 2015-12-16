$(document).ready(function(){

    $('.btn-search').click(function(e){

        //add if condition to check active
        //alert('hello search test');
        e.preventDefault();
        $('.social-media').slideToggle(100);

        $('.pull-right').toggle('slow', function(){
            $(this).css("width", "200");
        });
        $(this).addClass( "search-active" )
    });
});
