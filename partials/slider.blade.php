    <!-- FLEXSLIDER CONTAINER -->
    <div id="top-slider" class="flexslider-container container">
        <div class="flexslider">
            <!-- BEGIN SLIDES -->
            <ul class="slides">
                @foreach(slideshow() as $slide)
                <li>
                    @if($slide->text == '')
                    <a href="#">
                    @else
                    <a href="{{filter_link_url($slide->text)}}" target="_blank">
                    @endif
                    {{HTML::image(slide_image_url($slide->gambar),'slideshow',array('style'=>'max-height:435px'))}}
                    </a>
                </li>
                @endforeach
            </ul>
            <!-- #END SLIDES -->
        </div>
    </div>
    <!-- /FLEXSLIDER CONTAINER -->

    <!--Banner Ends -->
    <!-- <div class="container">
    @foreach(horizontal_banner() as $banner)
        <a class="inner" href="{{url($banner->url)}}"><img src="{{url(banner_image_url($banner->gambar))}}" alt="Info Promo"/></a>
    @endforeach
    </div> -->