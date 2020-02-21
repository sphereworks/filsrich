jQuery(document).ready(function($) {



	var myTheme = window.myTheme || {},
    $win = $( window );
		

	myTheme.Isotope = function () {
	
		// 4 column layout
		var isotopeContainer = $('.isotopeContainer');
		if( !isotopeContainer.length || !jQuery().isotope ) return;
		$win.on('load', function(){
			isotopeContainer.isotope({
				itemSelector: '.isotopeSelector'
			});
		$('.isotopeFilters').on( 'click', 'a', function(e) {
				$('.isotopeFilters').find('.active').removeClass('active');
				$(this).parent().addClass('active');
				var filterValue = $(this).attr('data-filter');
				isotopeContainer.isotope({ filter: filterValue });
				e.preventDefault();
			});
		});
		
		// 3 column layout
		var isotopeContainer2 = $('.isotopeContainer2');
		if( !isotopeContainer2.length || !jQuery().isotope ) return;
		$win.on('load', function(){
			isotopeContainer2.isotope({
				itemSelector: '.isotopeSelector'
			});
		$('.isotopeFilters2').on( 'click', 'a', function(e) {
				$('.isotopeFilters2').find('.active').removeClass('active');
				$(this).parent().addClass('active');
				var filterValue = $(this).attr('data-filter');
				isotopeContainer2.isotope({ filter: filterValue });
				e.preventDefault();
			});
		});
		
		// 2 column layout
		var isotopeContainer3 = $('.isotopeContainer3');
		if( !isotopeContainer3.length || !jQuery().isotope ) return;
		$win.on('load', function(){
			isotopeContainer3.isotope({
				itemSelector: '.isotopeSelector'
			});
		$('.isotopeFilters3').on( 'click', 'a', function(e) {
				$('.isotopeFilters3').find('.active').removeClass('active');
				$(this).parent().addClass('active');
				var filterValue = $(this).attr('data-filter');
				isotopeContainer3.isotope({ filter: filterValue });
				e.preventDefault();
			});
		});
		
		// 1 column layout
		var isotopeContainer4 = $('.isotopeContainer4');
		if( !isotopeContainer4.length || !jQuery().isotope ) return;
		$win.on('load', function(){
			isotopeContainer4.isotope({
				itemSelector: '.isotopeSelector'
			});
		$('.isotopeFilters4').on( 'click', 'a', function(e) {
				$('.isotopeFilters4').find('.active').removeClass('active');
				$(this).parent().addClass('active');
				var filterValue = $(this).attr('data-filter');
				isotopeContainer4.isotope({ filter: filterValue });
				e.preventDefault();
			});
		});
	
	};
	
	
	myTheme.Isotope();
	// myTheme.Fancybox();
});


// main js start here //
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $('#top-fix').css('background', 'rgb(234, 233, 233)');
       $('#top-fix').css('top', '0%');
        $('#top-fix').css('position', 'fixed');
        $('#top-fix').css('z-index', '9');
        $('#top-fix').css('width', '100%');
        $('#top-fix').css('box-shadow', 'rgba(226, 226, 226, 0.86) 1px 1px 1px');
      } else {
        $('#top-fix').css('background', '#fff');
        $('#top-fix').css('top', '0%');
        $('#top-fix').css('position', 'relative');
      }
    }

$(document).ready(function(){
  $("#account").click(function(){
    $(".profile-dropdown").toggle();
  });
});

$(document).ready(function(){
  $("#notification").click(function(){
    $(".notification-dropdown").toggle();
  });
});

$(".mobile-toggle").click(function(){
        $(".nav-menus").toggleClass("open");
    });
$(".mobile-search").click(function(){
        $(".form-control-plaintext").toggleClass("open");
    });
// main js end here //

