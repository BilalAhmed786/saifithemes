//header display

$(window).scroll(function(){
	var sticky = $('.customnav '),
		scroll = $(window).scrollTop();
  
	if (scroll >= 1000) sticky.addClass('fixed-top');
	else sticky.removeClass('fixed-top');
  }); 
//menu dropdown

$(document).ready(function(){
	$('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
	$('.dropdown-submenu > a').on("click", function(e) {
	var dropdown = $(this).parent().find(' > .show');
		$('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
		$(this).next('.dropdown-menu').toggleClass('show');
		e.stopPropagation();
	});
	$('.dropdown').on("hidden.bs.dropdown", function() {
		$('.dropdown-menu.show').removeClass('show');
	});
});


$(document).ready(function(){
	$(".navbar-toggler").click(function(){
	  $(".searchform").toggle();
	});
  });


//scroll to top button
$(function () {
	var $window = $(window);
	var $buttonTop = $('.button-top');
	var scrollTimer;
  
	$buttonTop.on('click', function () {
	  $('html, body').animate({
		scrollTop: 0,
	  });
	});
  
	$window.on('scroll', function () {
	  clearTimeout(scrollTimer);
	  scrollTimer = setTimeout(function() {
	   if ($window.scrollTop() > 500) {
		  $buttonTop.addClass('button-top-visible');
		} else {
		  $buttonTop.removeClass('button-top-visible');
		}         
	  });
	});  
  })


    //preloader

	$(function() 
	{
		$('#preloader').fadeOut(5000, function() 
		{
			$(this).remove();
		});
	})


	$(function() 
	{
		$('#frontpreloader').fadeOut(5000, function() 
		{
			$(this).remove();
		});
	})