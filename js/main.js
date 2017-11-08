jQuery( document ).ready(function($) {
    new WOW().init();

    $('#datetimepicker4').datepicker();
    $('#datetimepicker').datepicker();

    $('li.menu-item-has-children').on('click', function() {
    	$(this).toggleClass('show');
    });

    $( ".dropdown-menu > li:hover .dropdown-menu" ).addClass('show');
    $( ".navbar-nav > li" ).hover(function() {
    	$(this).addClass('show');
    	$(this).find('.dropdown-menu').addClass('show');
    });
    $( ".navbar-nav > li" ).mouseover(function() {
    	$(this).removeClass('show');
    });

    $(".navbar-toggler").click(function() {
	    $(".menu-xider-menyu-container").toggleClass("show");
	  });

    $('.zoom-gallery').magnificPopup({
    	delegate: 'a',
  		type: 'image',
  		closeOnContentClick: false,
  		closeBtnInside: false,
  		mainClass: 'mfp-with-zoom mfp-img-mobile',
  		image: {
  			verticalFit: true,
  			titleSrc: function(item) {
  				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
  			}
  		},
  		gallery: {
  			enabled: true
  		},
  		zoom: {
  			enabled: true,
  			duration: 300, // don't foget to change the duration also in CSS
  			opener: function(element) {
  				return element.find('img');
  			}
  		}
      });

    $('.about-page-zoom-gallery').magnificPopup({
    	delegate: 'a',
  		type: 'image',
  		closeOnContentClick: false,
  		closeBtnInside: false,
  		mainClass: 'mfp-with-zoom mfp-img-mobile',
  		image: {
  			verticalFit: true,
  			titleSrc: function(item) {
  				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
  			}
  		},
  		gallery: {
  			enabled: true
  		},
  		zoom: {
  			enabled: true,
  			duration: 300, // don't foget to change the duration also in CSS
  			opener: function(element) {
  				return element.find('img');
  			}
  		}
      });
});
