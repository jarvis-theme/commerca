<!-- Web Fonts  -->
<!-- If you want to use google font remove this comment block and local font stylesheet
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
-->
{{generate_theme_css('commerca/assets/css/fonts/open-sans/stylesheet.css')}}
{{generate_theme_css('commerca/assets/css/fonts/icomoon/style.css')}}

<!-- CSS styles  -->
{{generate_theme_css('commerca/assets/css/bootstrap.min.css')}}
@if($tema->isiCss=='')
    {{generate_theme_css('commerca/assets/css/style.css?v=006')}}
@else
    {{generate_theme_css('commerca/assets/css/editstyle.css?v=006')}}
@endif
{{generate_theme_css('commerca/assets/css/responsive.css')}}
{{generate_theme_css('commerca/assets/css/animate.css')}}
{{generate_theme_css('commerca/assets/css/color-scheme.css')}}
<!-- Slider -->
{{generate_theme_css('commerca/assets/css/flexslider/flexslider.css')}}
{{generate_theme_css('commerca/assets/css/flexslider/default.css')}}

<!-- Other -->
{{favicon()}}