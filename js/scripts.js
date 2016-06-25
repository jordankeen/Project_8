$(function(){


	// Smooth Scroll

	$(".menu-item a").smoothScroll({offset: 0, });

  // Show animated hamburger and menu
      $(".btn-nav").on("click tap", function() {
   
        $('ul.menu').toggleClass("show");
        $(this).toggleClass("animated");

      });

  // Remove hamburger animated class and
  // main menu show class
        $('.menu-item a').on('click tap', function (){
        $('.btn-nav').removeClass('animated');
        $('ul.menu').removeClass('show');
        
      });

});