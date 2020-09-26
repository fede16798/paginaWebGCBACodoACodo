$(document).ready(function(){
    var altura = $('.menu-drop').offset().top;
    
    $(window).on('scroll', function(){
        if($(window).scrollTop() > altura ){
            $('.menu-drop').addClass('menu-fixed');
        } else {
            $('.menu-drop').removeClass('menu-fixed');
        }
    })
})