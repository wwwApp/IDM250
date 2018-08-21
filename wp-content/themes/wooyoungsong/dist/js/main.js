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

    // vTciker settting that does rolling texts
    jQuery(function() {
        jQuery(".loop__container").vTicker('init', {
            speed: 600, 
            pause: 2000,
            padding: 10});
    });

    // Wrap all iframe in div for css style to work
    jQuery( "iframe" ).wrap( "<div class='embed-container'></div>" );

    // Necessary to remove wp style that override my custom css for image in general page
    jQuery(".wp-caption").removeAttr('style');

});