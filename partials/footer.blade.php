<!-- FOOTER ANNONCE -->
<!-- <div id="footer-annonce" class="footer-annonce">
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 annonce">
            <div class="annonce-inner">
                <div class="iconic icon-support"></div>
                <h3>24/7 Support</h3>
                <p>We support everything we sell</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 annonce">
            <div class=" annonce-inner">
                <div class="iconic icon-gift"></div>
                <h3>Surprise Gift</h3>
                <p>Value $50 on orders over $700</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 annonce">
            <div class="annonce-inner">
                <div class="iconic icon-headphones"></div>
                <h3>24/7 Support</h3>
                <p>We support everything we sell</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 annonce">
            <div class=" annonce-inner">
                <div class="iconic icon-truck"></div>
                <h3>Free Shipping</h3>
                <p>All over in world over $100</p>
            </div>
        </div>
    </div>
</div> -->
<!-- /FOOTER ANNONCE -->
<!-- SITE FOOTER -->
<div id="footer-container" class="footer-container">

    <div class="footer-inner alt">
        <div class="container">
        
            <div class="row">
                
                <!-- WIDGET: ABOUT US -->
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="widget widget-text">
                        <h4 class="widget-header">About Us</h4>
                        <div class="widget-inner">
                            <p>{{shortDescription($aboutUs[1]->isi,300)}}</p>
                        
                        </div>
                    </div>
                    <div class="space40 hidden-lg"></div>
                </div>
                <!-- /WIDGET: ABOUT US -->

                <div class="col-xs-12 col-sm-12 hidden-lg"></div>
                
                <!-- WIDGET: TWITTER FEED -->
                    <!-- <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="widget widget-twitter">
                            <h4 class="widget-header">Latest Tweets</h4>
                            <div class="widget-inner twitterfeed iconlist">
                                <div class="media">
                                    <div class="pull-left">
                                        <i class="icon-tweet"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>Briza 1.5 has been quickly releas edto fix some bugs from the pre More on <a href="http://t.co/MqacjST" target="_blank">http://t.co/MqacjST</a></p>
                                        <p><i>12 minutes ago</i></p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <i class="icon-tweet"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>@Commercatemplate please, use the <a href="http://t.co/zRmkywea" target="_blank">http://t.co/zRmkywea</a> to ask support questions [...]</p>
                                        <p><i>25 minutes ago</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space40 hidden-lg"></div>
                    </div> -->
                <!-- /WIDGET: TWITTER FEED -->
                <!-- WIDGET: FACEBOOK FEED -->
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="widget widget-facebook">
                        <h4 class="widget-header">Facebook Widget</h4>
                        <div class="widget-inner">
                        
                            <!-- facebook social plugin SDK -->
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                            <!-- /facebook social plugin SDK -->
                            <div class="fb-like-box" data-href="{{$kontak->fb}}" data-width="270" data-height="200" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>

                        </div>
                    </div>
                    <div class="space40 hidden-lg"></div>
                </div>
                <!-- /WIDGET: FACEBOOK FEED -->
                
                <!-- WIDGET: CONTACT US -->
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="widget widget-contact">
                        <h4 class="widget-header">Contact Us</h4>
                        <div class="widget-inner iconlist">
                        
                            <div class="media">
                                <div class="pull-left">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{@$kontak->alamat}}<!-- , --> <br/>{{--@$kontak->kota--}}<!-- , --> {{--@$kontak->negara--}} {{--@$kontak->kodepos--}}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{@$kontak->telepon}}<br/>{{@$kontak->hp}}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <i class="icon-mail6"></i>
                                </div>
                                <div class="media-body">
                                    <p><a href="mailto:{{$kontak->email}}">{{@$kontak->email}}</a></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <i class="icon-chat2"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{@$kontak->ym}}</p>
                                    <p>{{ymyahoo(@$kontak->ym)}}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="space40 hidden-lg"></div>
                </div>
                <!-- /WIDGET: CONTACT US -->
                
            </div>
        
        </div>
    </div>
    
    <div class="footer-inner alt">
        <div class="container">
        
            <div class="row">

                @foreach($tautan as $key=>$group)
                <!-- WIDGET LINKS -->
                <div class="col-xs-6 col-sm-3 col-lg-2">
                    <div class="widget wdgt-linklist">
                        <div class="widget-inner">
                            <h4 class="widget-header">{{$group->nama}}</h4>
                            <ul class="cl-effect-1">
                                @foreach($group->link as $key=>$link)
                                    <li>
                                        @if($link->halaman=='1')
                                            <a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                        @elseif($link->halaman=='2')
                                            <a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                        @elseif($link->url=='1')
                                            <a href="{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
                                        @else
                                            <a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                        @endif
                                    </li>                        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach  

                
                <!-- /WIDGET LINKS -->
                <!-- SUBSCRIPTION -->
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <div class="widget widget-subs">
                        <div class="widget-inner">
                            <!-- <p>Proin ut quam eros. Donec sed lobortis diam. Nulla nec odio lacus. Quisque porttitor egestas dolor in placerat. Nunc vehicula dapibus ipsum [...]</p> -->
                            <div class="clearfix"></div>
                            <form class="frm-subs clearfix">
                                <label for="subscribe-input" class="subscribe-title">Subscribe to our newsletter : </label>
                                <div>
                                <input type="text" id="subscribe-input" class="subscribe-input" placeholder="Your email address" />
                                <button class="btn btn-primary button-sbsr" disabled="true">Submit</button>
                                </div>
                            </form>
                            <ul class="card-icons">
                                @foreach($bank as $value)
                                    <li><img style="" src="{{URL::to('img/'.$value->bankdefault->logo)}}" alt="" /></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="space40 hidden-lg"></div>
                </div>
                <!-- /SUBSCRIPTION -->
            </div>
        
        </div>
    </div>
    
    <div class="footer-powered">
        <div class="container">
        
            <div class="row">
            
                <div class="col-xs-12 col-sm-6 copyright center-sm">
                     Copyright &copy; {{date('Y')}} {{ Theme::place('title') }} | All Rights Reserved | Powered by <a style="text-decoration: none;" target="_blank" href="http://jarvis-store.com">Jarvis Store</a>
                </div>
                
                <div class="col-xs-12 space10 visible-xs"></div>
                
                <div class="col-xs-12 col-sm-6 text-right center-sm">
                    <!-- <a href="#">Buy This Template</a> -->
                </div>
        
            </div>
            
        </div>
    </div>
    
</div>
<!-- /SITE FOOTER -->
{{pluginPowerup()}}
