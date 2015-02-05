<!-- FLEXSLIDER CONTAINER -->
<div id="top-slider" class="flexslider-container container">
    <div class="flexslider">
    
        <!-- BEGIN SLIDES -->
        <ul class="slides">
            <li>
                <img style="max-height: 435px;" src="{{URL::to(getPrefixDomain().'/galeri/banner-width1.jpg')}}" alt="banner1" />

            </li>
            <li>
                <img style="max-height: 435px;" src="{{URL::to(getPrefixDomain().'/galeri/banner-width2.jpg')}}" alt="banner2" />
            </li>
            <li><img style="max-height: 435px;" src="{{URL::to(getPrefixDomain().'/galeri/banner-width3.jpg')}}" alt="banner3" /></li>
            <!-- <li><img src="img/placeholder/slider.jpg" alt="" /></li>
            <li><img src="img/placeholder/slider.jpg" alt="" /></li> -->
        </ul>
        <!-- #END SLIDES -->
        
    </div>
</div>
<!-- /FLEXSLIDER CONTAINER -->


<!--Banner Ends
@foreach(getBanner(2) as $banner)
    <a href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}"/></a>
@endforeach