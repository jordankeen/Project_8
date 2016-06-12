$(function(){


	// Smooth Scroll

	$(".menu-item a").smoothScroll({offset: 0, });


	// $('.nav-toggle').click(function() {
 //  	$('.nav-icon').toggleClass('active');
	// });

	 // $(".menu").on("click", function() {
  //   	$('ul.menu').toggleClass("show");
  //     console.log("what the");
  //   });


     
      $(".btn-nav").on("click tap", function() {
        // $(".nav-content").toggleClass("showNav hideNav").removeClass("hidden");
        // $(this).toggleClass("animated");

        // $("ul.menu").toggleClass("showNav hideNav").removeClass("hidden");
        $('ul.menu').toggleClass("show");
        $(this).toggleClass("animated");

      });

      $('.menu-item a').on('click', function (){
        $('.btn-nav').removeClass('animated');
        $('ul.menu').toggleClass('show');
        console.log("removed animation");
      });
 


});