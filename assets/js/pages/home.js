define(['jquery','flexslider'], function($, flexslider)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			slideshow();
		};

		var slideshow = function(){
			var $slider = $('#top-slider > .flexslider');
	        
            $slider.flexslider({
                animation: 'slide',
                easing: 'easeInBack',
                useCSS: false,
                animationSpeed: 1000,
                slideshow: false,
                smoothHeight: true,
                start: function(slider) {
                    // wrap control nav inside container
                    var $controlNav = $slider.find('.flex-control-nav');                    
                    $controlNav.wrap('<div class="flex-pagination-container" />').wrap('<div class="container" />').wrap('<div class="col-xs-12 col-sm-12" />');
                    $controlNav.fadeIn();
                }
            });
	        $(window).on('throttledresize', function() {
	            $slider.find('.flex--slide .caption-body').each(function() {
	                var $caption = $(this),
	                    captionH = $caption.outerHeight(),
	                    sliderH = $slider.height(),
	                    top = (sliderH - captionH) / 2;
	            
	                $caption.css( 'top', top + 'px' );
	            });
	        });
		};

	};
});