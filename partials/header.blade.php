<!-- SITE HEADER  -->
<div id="header-container">
    <!-- top header bar -->
    <div id="header-container-inner">
        <div class="container headtop">
            <div class="row">
                <!-- top header links -->
                <div class="col-xs-12 col-sm-6 top-links center-sm">
                    <ul class="link-menu cl-effect-21">
                        @if ( !is_login() )
                            <li>{{HTML::link('member', 'Login')}}</li>
                            <li>{{HTML::link('member/create', 'Register')}}</li>
                            <li>{{HTML::link('produk', 'Produk')}}</li>
                            <li>{{HTML::link('blog', 'Blog')}}</li>
                            <li>{{HTML::link('checkout', 'Keranjang Belanja')}}</li>
                        @else
                            <li class="dropdown hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown">Akun<i class="icon-arrow-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li>  {{HTML::link('member', 'My Account')}}</li>
                                    <li> {{HTML::link('logout', 'Logout')}}</li>
                                </ul>
                            </li>
                            <li>{{HTML::link('produk', 'Produk')}}</li>
                            <li>{{HTML::link('blog', 'Blog')}}</li>
                            <li>{{HTML::link('checkout', 'Keranjang Belanja')}}</li>
                        @endif
                    </ul>
                </div>
                <!-- /top header links -->

                <div class="col-xs-12 col-sm-6 header-social-icons multicolor center-sm">
                    <ul>
                        @if($kontak->tw)
                        <li><a target="_blank" href="{{url($kontak->tw)}}" class="twitter"><br/></a></li>
                        @endif
                        @if($kontak->fb)
                        <li><a target="_blank" href="{{url($kontak->fb)}}" class="facebook"><br/></a></li>
                        @endif
                        @if($kontak->ig)
                        <!-- <li><a target="_blank" href="{{url($kontak->ig)}}" class="linkedin"><br/></a></li> -->
                        @endif
                        <!-- <li><a href="#" class="rss"><br/></a></li>
                        <li><a href="#" class="skype"><br/></a></li>
                        <li><a href="#" class="deviantart"><br/></a></li> -->
                        @if($kontak->gp)
                        <li><a target="_blank" href="{{url($kontak->gp)}}" class="googleplus"><br/></a></li>
                        @endif
                    </ul>
                </div>
                <!-- /social icons -->
            </div>
        </div>
    </div>
    <!-- /top header bar -->
    
    <!-- main header -->
    <div id="header-center">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-xs-8 col-sm-8 logo-container">
                    <strong class="logo ">
                    @if(@getimagesize( url(logo_image_url()) ))
                        <a href="{{url('home')}}">
                            {{HTML::image(logo_image_url(),'logo '.Theme::place('title'),array('style'=>'max-height:100px'))}}
                        </a>
                    @else
                        <a class="nodecor" href="{{url('home')}}"><h1 class="logotext">{{ Theme::place('title') }}</h1></a>
                    @endif
                    </strong>
                </div>
                <!-- /logo -->
                
                <!-- shopping cart -->
                <div id="shoppingcartplace">{{ shopping_cart() }}</div>
                <!-- /shopping cart -->
            </div>
        </div>
    </div>
    <!-- /main header -->
    
    <!-- Navigation menu -->
    <div id="menu-container">
        <div class="container">
            <div class="inner">
                <!-- main menu -->
                <ul class="main-menu menu visible-lg">
                    <li class="active"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                    @foreach(category_menu() as $key=>$menu)
                    @if($menu->parent=='0')
                    <li>
                        <a href="{{category_url($menu)}}">{{$menu->nama}}</a>
                        @if($menu->anak->count() > 0)
                        <ul class="sub_menu">
                        @foreach($menu->anak as $submenu)
                            @if($submenu->parent == $menu->id)
                                <li><a href="{{category_url($submenu)}}">{{$submenu->nama}}</a></li>
                                @if($submenu->anak->count() > 0)
                                <ul>
                                    @foreach($submenu->anak as $submenu2)
                                    @if($submenu2->parent == $submenu->id)
                                    <li><a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endif
                            @endif
                        @endforeach
                        </ul>
                        @endif
                    </li>
                    @endif
                    @endforeach
                </ul>
                <!-- /main menu -->
                
                <!-- mobile main menu -->
                <div class="mobile-menu hidden-lg">
                    <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger"><i class="icon-menu2"></i></button>
                        <ul class="dl-menu">
                            <li class="active">
                                <a href="{{url('/')}}"><i class="icon-home"></i></a>
                            </li>
                            @foreach(list_category() as $key=>$menu)
                            @if($menu->parent == '0')
                            <li>
                                @if(count($menu->anak) > 0)
                                <a href="javsacript:void(0);">{{$menu->nama}}</a>
                                <ul class="dl-submenu">
                                    @foreach($menu->anak as $submenu)
                                        @if($submenu->parent == $menu->id)
                                        <li>
                                            <a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
                                            @if(count($submenu->anak) > 0)
                                            <ul>
                                                @foreach($submenu->anak as $submenu2)
                                                @if($submenu2->parent == $submenu->id)
                                                <li><a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @else
                                <a href="{{category_url($menu)}}">{{$menu->nama}}</a>
                                @endif
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /mobile main menu -->
                
                <!-- search box -->
                <div class="search-cont">
                    <form action="{{url('search')}}" method="post">
                        <input id="search" type="text" name="search" class="query" placeholder="Search here" />
                        <button class="btn-search"><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Navigation menu -->
</div>
<!-- /SITE HEADER -->