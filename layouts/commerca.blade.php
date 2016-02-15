<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        {{ Theme::partial('seostuff') }}  
        {{ Theme::partial('defaultcss') }}  
        <!--Google Webfont -->
        <link href='//fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
        {{ Theme::asset()->styles() }}  
    </head>
    <body>
        <div id="template-wrapper" class="wide">
            {{ Theme::partial('header') }}
            <div id="site-wrapper">
                {{ Theme::partial('slider') }}
                {{ Theme::place('content') }}
            </div>
            {{ Theme::partial('footer') }}
            {{ Theme::partial('defaultjs') }}
        </div>
        {{ Theme::partial('analytic') }}
    </body>
</html>