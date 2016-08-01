$(document).ready(function(){
   var scroll_start = 0;
   var startchange = $('.intro');
   var offset = startchange.offset();
   $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.navbar-default .navbar-brand').css('visibility', 'visible');
          $('.navbar-default .navbar-brand').css('opacity', '1');
      } else {
          $('.navbar-default .navbar-brand').css('visibility', 'none');
          $('.navbar-default .navbar-brand').css('opacity', '0');
          $(".navbar-nav li").removeClass("active");
          $(".index").addClass("active")
      }
   });
    $(".navbar-nav li").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(this).addClass("active");
    });
    $(".footer-1").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".index").addClass("active");
    });
    $(".tab-1").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".restoration").addClass("active");
    });
    $(".footer-2").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".restoration").addClass("active");
    });
    $(".tab-2").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".clean").addClass("active");
    });
    $(".footer-3").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".clean").addClass("active");
    });
    $(".tab-3").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".repairs").addClass("active");
    });
    $(".footer-4").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".repairs").addClass("active");
    });
    $(".tab-4").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".installations").addClass("active");
    });
    $(".footer-5").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".installations").addClass("active");
    });
    $(".repairs-1").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".installations").addClass("active");
    });
    $(".repairs-2").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".restoration").addClass("active");
    });
    $(".repairs-3").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".restoration").addClass("active");
    });
    $(".intro-1").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".restoration").addClass("active");
    });
    $(".intro-2").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".repairs").addClass("active");
    });
    $(".intro-3").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".clean").addClass("active");
    });
    $(".intro-4").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".installations").addClass("active");
    });
    $(".footer-6").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".gallery-link").addClass("active");
    });
    $(".view-1").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".gallery-link").addClass("active");
    });
    $(".footer-7").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".contact-link").addClass("active");
    });
    $(".view-2").click(function () {
        $(".navbar-nav li").removeClass("active");
        $(".contact-link").addClass("active");
    });
});







