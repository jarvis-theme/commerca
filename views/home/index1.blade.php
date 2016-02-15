    <!--Product List Ends-->
    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <!--SIDE NAV STARTS-->
            <div id="side_nav">
                <div class="sideNavCategories">
                    <ul class="sidebar">
                        {{ pluginSidePowerup() }}
                        <li class="header">Banner</li>
                        @foreach(vertical_banner() as $banner)
                        <a target="_blank" href="{{ url($banner->url) }}">
                            <img src="{{ banner_image_url($banner->gambar) }}" alt="Info Promo" />
                        </a>
                        @endforeach
                    </ul>

                    <ul class="sidebar">
                        <li class="header">Hubungi Kami</li>
                        @if(!empty($shop->ym))
                        {{ ymyahoo($shop->ym) }}
                        <br>
                        @endif
                        @if($shop->telepon)
                        <span class="side-contact">Telepon : <b>{{ $shop->telepon }}</b></span><br>
                        @endif
                        @if($shop->hp)
                        <span class="side-contact">SMS  : <b>{{ $shop->hp }}</b></i></span><br>
                        @endif
                        @if($shop->bb)
                        <span class="side-contact">BBM  : <b>{{ $shop->bb }}</b></span><br>
                        @endif
                    </ul>

                    <ul class="sidebar">
                        <li class="header">Testimonial</li>
                        <span>
                            <ul>
                                @foreach (list_testimonial() as $items)
                                <li><i>"{{ $items->isi }}"</i><br /><small class="side-contact">oleh <b>{{ $items->nama }}</b></small></li>
                                <br><br>
                                @endforeach
                            </ul>
                        </span>
                        <b class="pull-right"><a class="nodecor" href="{{ url('testimoni') }}">Lainnya..</a></b>
                    </ul>
                </div>
            </div>
            <!--SIDE NAV ENDS-->
            <!--MAIN CONTENT STARTS-->
            <div id="main_content">
                <div class="category_banner"></div>
                <ul class="breadcrumb">
                    <li><a href="#">Produk</a></li>
                </ul>
                <!--Product List Starts-->
                <div class="toolbar"></div>

                <div class="products_list products_slider">
                    <ul>
                        @foreach(home_product() as $myproduk)
                        <li class="relative"> 
                            @if(is_terlaris($myproduk)) 
                            <div class="ribbon special badge-hot">Terlaris</div>
                            @elseif(is_produkbaru($myproduk))  
                            <span class="ribbon special badge-new">Baru</span>
                            @elseif(is_outstok($myproduk))  
                            <div class="ribbon special badge-empty">Kosong</div>
                            @endif 
                            <a href="{{ product_url($myproduk) }}" class="product_image">
                                {{ HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('class' => 'imgpro')) }}
                            </a>
                            <div class="product_info">
                                <h3><a href="{{ product_url($myproduk) }}">{{ strtoupper(short_description($myproduk->nama,24)) }}</a></h3>
                                <small>{{ short_description($myproduk->deskripsi,80) }}</small>
                            </div>
                            @if($setting->checkoutType==1)
                            <div class="price_info">
                                <!-- <a href="#">+ Add to wishlist</a> -->
                                <button onclick="window.location.href='{{ product_url($myproduk) }}'" class="price_add" title="" type="button"><span class="pr_price">&nbsp;{{ price($myproduk->hargaJual) }}</span><span class="pr_add">Lihat</span></button>
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--Product List Ends-->
            </div>
            <!--MAIN CONTENT ENDS-->
        </section>
        <!--Mid Section Ends-->
    </div>