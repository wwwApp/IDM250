jQuery(function($) {

    // Hamburger menu function
    jQuery(".menu__link").on("click", function(e) {
    e.preventDefault;
    jQuery(this).toggleClass("menu__link--active");
    jQuery(".nav").toggleClass("visible");
    });

    // When search is on focus (user is typing), hide list of works
    jQuery(".search-bar").on("focus", function(){
        jQuery(".work").css("display","none");
    });

    jQuery(".search-bar").on("focusout", function(){
        jQuery(".work").css("display","block");
    });

    jQuery(function() {
        jQuery('.loop__container').vTicker('init', {
            speed: 600, 
            pause: 2000,
            padding: 10});
    });

});