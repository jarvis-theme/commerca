<!-- Javascripts  -->
<!--[if IE 8]><script src="js/respond.min.js"></script><![endif]-->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
<!-- <script>window.jQuery || document.write(""<script src="http://example.jarvis-store.test/themes/7-tema/commerca/assets/js/jquery.min.js");</script> -->
{{HTML::script(dirTemaToko().'commerca/assets/js/jquery.min.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/bootstrap.min.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/modernizr.min.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/package.min.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/jquery.tweet.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/scripts.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/jquery.flexslider.min.js')}}

<script>
    jQuery(function($) {
        var $slider = $('#top-slider > .flexslider');
        $slider.imagesLoaded(function() {
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
                    
                    center_caption(slider);
                }
            });
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
    });
</script>
{{HTML::script(dirTemaToko().'commerca/assets/js/jquery.carouFredSel.min.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/jquery.mixitup.min.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/jquery.nouislider.min.js')}}
{{HTML::script(dirTemaToko().'commerca/assets/js/jquery.zoom-min.js')}}