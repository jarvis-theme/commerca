<!-- Web Fonts  -->
<!-- If you want to use google font remove this comment block and local font stylesheet
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
-->
{{HTML::style(dirTemaToko().'commerca/assets/css/fonts/open-sans/stylesheet.css')}}
{{HTML::style(dirTemaToko().'commerca/assets/css/fonts/icomoon/style.css')}}

<!-- CSS styles  -->
{{HTML::style(dirTemaToko().'commerca/assets/css/bootstrap.min.css')}}
@if($tema->isiCss=='')
	{{HTML::style(dirTemaToko().'commerca/assets/css/style.css')}}
@else
	{{HTML::style(dirTemaToko().'commerca/assets/css/editstyle.css')}}
@endif
{{HTML::style(dirTemaToko().'commerca/assets/css/responsive.css')}}
{{HTML::style(dirTemaToko().'commerca/assets/css/animate.css')}}
{{HTML::style(dirTemaToko().'commerca/assets/css/color-scheme.css')}}
<!-- Slider -->
{{HTML::style(dirTemaToko().'commerca/assets/css/flexslider/flexslider.css')}}
{{HTML::style(dirTemaToko().'commerca/assets/css/flexslider/default.css')}}

<!-- Other -->
{{createFavicon($toko)}}