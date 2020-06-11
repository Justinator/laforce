// open menu
$(function() {
    $(".menu-button-wrap").click(function(e){
        $(".main-menu-wrapper").toggleClass("open");
        	e.stopPropagation();
    });
});
// close menu
$(function() {
    $("#close-menu").click(function(e){
        $(".main-menu-wrapper").toggleClass("open");
        	e.stopPropagation();
    });
});
// Hamburger menu animation
$(function() {
    $(".menu-button-wrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Hamburger menu animation
$(function() {
    $("#close-menu").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Toggle search
$(function() {
    $("#search").click(function(e){
        $("#search-form-wrap").toggleClass("search-open");
        	e.stopPropagation();
    });
});
// Toggle search icon
$(function() {
    $("#btnCloseUpdateBrowser").click(function(e){
        $("#outdated").addClass("none");
        	e.stopPropagation();
    });
});
// Hide main navigation on scroll
$(document).ready(function () {

  'use strict';

   var c, currentScrollTop = 0,
       navbar = $('.site-header');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();

      currentScrollTop = a;

      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scroll-up");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scroll-up");
      }
      c = currentScrollTop;
  });

});
// slide up blog subscribe form on scroll
$(window).scroll(function() {
    var available = $(document).height();
    var percentage_of_page = 0.3;
    var half_screen = available * percentage_of_page;
    var height = $(window).scrollTop();
    if ( height > half_screen ) {
        $('.subscribe-form-slideup').addClass("slide-up");
    } else {
        $('.subscribe-form-slideup').removeClass("slide-up");
    }
});
// open video popup
$(function() {
    $(".video-caption").click(function(e){
        $(".popup-video-container").toggleClass("flex");
        	e.stopPropagation();
    });
});
// close video popup
$(function() {
    $(".popup-video-container").click(function(e){
        $(".popup-video-container").toggleClass("flex");
        	e.stopPropagation();
    });
});
$(function() {
    $(".video-close").click(function(e){
        $(".popup-video-container").toggleClass("flex");
        	e.stopPropagation();
    });
});
