// Hamburger menu function
$(".menu__link").on("click", function(e) {
  e.preventDefault;
  $(this).toggleClass("menu__link--active");
  $(".nav").toggleClass("visible");
});

// When search is on focus (user is typing), hide list of works
$(".search-bar").on("focus", function(){
    $(".work").css("display","none");
});

$(".search-bar").on("focusout", function(){
    $(".work").css("display","block");
});