(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

			jQuery('header nav ul').slicknav();
			
			jQuery('.gallery .gallery-item a').fancybox({
				openEffect : 'fade',
				
			});


			jQuery('ul.slider').bxSlider({
				//mode:'vertical',
				pager: false,
				 auto: true,
				speed: 200,
				
			});
			  
	});
	
})(jQuery, this);
