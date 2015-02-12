			<div id="site-wrapper">			
				<!-- /BREADCRUMBS -->
				<div class="breadcrumbs-wrapper">
					<div class="container">					
						<div class="row">
							<div class="col-xs-12 col-sm-6 center-sm">
								<div class="breadcrumbs">
									<ul class="unstyled">
										<li><a href="{{URL::to('/')}}">Home</a></li>
										{{$breadcrumb}}
									</ul>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
							
							<div class="col-xs-12 col-sm-6 center-sm">
								<div class="display-mode">
									<!-- <ul class="unstyled float-right"> PAUL SMITH SHOES & ACCESSORIES </ul> -->
								</div>
							</div>
						</div>					
					</div>
				</div>
				<!-- /BREADCRUMBS -->
				
				<!-- CONTENT CONTAINER -->
				<div class="main-content">
					<div class="container">
						<div class="row">							
							<!-- SIDE BAR -->
							<div class="col-xs-12 col-sm-4 col-lg-3 pull-left sidebar">								
								<!-- CATEGORIES LIST -->
								<div class="accordionmenu section">
									<h4 class="section-title">Kategori</h4>
									@foreach($kategori as $key=>$menu)
										@if($menu->parent=='0')
											<a class="menuitem submenuheader" href="{{slugKategori($menu)}}" >{{$menu->nama}}</a>
											@foreach($kategori as $key=>$submenu)
												@if($menu->id==$submenu->parent)
												<div class="submenu">
													<ul class="unstyled pretty-list arrow-list cl-effect-1">
														<li><a href="{{slugKategori($submenu)}}">{{$submenu->nama}}</a></li>
													</ul>
												</div>
												@endif
											@endforeach
										@endif
									@endforeach
								</div>
								<!-- /CATEGORIES LIST -->
								<!-- carousel wrapper -->
								<div class="section carousel-iframe">
									<div class="container">									
										<div class="row carousel-iframe offer">
											<div class="col-xs-12 col-sm-12">											
												<h4 class="section-title">KOLEKSI</h4>
												<div class="section-inner">												
													<!-- carousel control nav direction -->
													<div class="carousel-direction-arrows">
														<ul class="direction-nav carousel-direction">
															<li>
																<a class="crsl-prev btn" href="#">
																	<span class="icon-arrow-left10"></span>
																</a>
															</li>
															<li>
																<a class="crsl-next btn" href="#">
																	<span class="icon-arrow-right9"></span>
																</a>
															</li>
														</ul>
													</div>
													<!-- /carousel control nav direction -->
													
													<!-- carousel wrapper -->
													<div class="carousel-wrapper row" data-minitems="1" data-maxitems="4" data-loop="true" data-autoplay="false" data-slideshow-speed="3000" data-speed="300">
														<ul class="products-container product-grid carousel-list portrait  ">															
														@foreach($koleksi as $mykoleksi)
														<li>
															<div class="product">
																<a href="{{slugKoleksi($mykoleksi)}}" class="product-link clearfix">
																	<div class="ribbon special">{{$mykoleksi->nama}}</div>
																	<div class="product-thumbnail">
																		<img src="{{URL::to(getPrefixDomain().'/koleksi/'.$mykoleksi->gambar)}}" alt="banner" />
																	</div>
																</a>
															</div>
														</li>
														@endforeach															
														</ul>
													</div>
													<!-- /CAROUSEL WRAPPER -->												
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /CAROUSEL WRAPPER -->
								
								<!-- BANNER MODULE -->
								<div class="accordionmenu section">
								<h4 class="section-title">BANNER</h4>
								@foreach(getBanner(2) as $key=>$banner)
								<div class="section banner-show">
									<a href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" width="100%"/></a>
								</div>
								@endforeach
								</div>
								<!-- /BANNER MODULE -->								
							</div>
							<!-- /SIDE BAR -->

							<!-- MAIN CONTENT -->
							<div class="col-xs-12 col-sm-8 col-lg-9 main">								
								<!-- SINGLE PRODUCT DETAILS -->
								<div class="section product-single">									
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<div class="product-album" >
												<a href="#" class="jq-zoom" title="hover to zoom">
													<img src="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}" alt="{{$produk->nama}}" />
												</a>
												
												<ul class="unstyled ">
												@if($produk->gambar2)
													<li class="slides"><a href="javascript:void(0);">{{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar2, '$produk->nama')}}</a></li>
												@endif
												@if($produk->gambar3)
													<li class="slides"><a href="javascript:void(0);">{{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar3, '$produk->nama')}}</a></li>
												@endif
												@if($produk->gambar4)
													<li class="slides"><a href="javascript:void(0);">{{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar4, '$produk->nama')}}</a></li>
												@endif
												</ul>											
											</div>
										</div>

										<div class="col-xs-12 col-sm-6">
											<div class="productpage-info clearfix">
												<h3 class="title">
													<a href="#">{{$produk->nama}}</a>
												</h3>
												<div class="description">
												@if(@$po)
													<br>
													<div>
														<p>
															Tanggal mulai pemesanan : {{waktuDbBalik($po->tanggalmulai)}}<br>
															@if($po->kuota=='0')
																Tanggal akhir pemesanan : {{waktuDbBalik($po->tanggalakhir)}}
															@elseif($po->tanggalakhir=='0000-00-00')
																Kuota minimum proses pre-order : {{$po->kuota}}
															@endif
															<br>
															DP : {{$po->dp}}
														</p>
													</div>
												@endif
												@if($setting->checkoutType!=2)
													<div class="prices" style="width: auto;">
														<span class="off-price">{{ price($produk->hargaJual) }}  </span>
													@if($produk->hargaCoret!=0)
														<s class="orginal-price">- {{ price($produk->hargaCoret) }}</s>
													@endif
													</div>
												@endif  
													<br>
													<form action="#" id='addorder'>
													@if($setting->checkoutType==3 && !$po)
														<span>Belum memasuki periode pemesanan</span>
													@else
														@if(@$po)
															@if(@$availablepo=='1')
																<div class="size_info">
																	@if($opsiproduk->count()>0)
																		<select name="opsiproduk">
																			@foreach ($opsiproduk as $key => $opsi)
																			<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
																				{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
																			</option>
																			@endforeach
																		</select>
																	@endif
																</div>
																<div class="space30 clearfix"></div>
																<div class="qty-btngroup clearfix">
																	<button type="button" class="minus">-</button>
																		<input type="text" class="qty" name='qty' value="1" size="2" id="qty-input">
																	<button type="button" class="plus">+</button>
																</div>
																<div class="space30 clearfix"></div>
																<div class="add-to-cart">
																	<input style="padding: 15px 20px;" type="submit" id="button-cart" class="btn btn-primary btn-iconed" value="Pre Order">
																</div>
															@else
																<span>Belum memasuki periode pemesanan</span>
															@endif
														@else
															@if($opsiproduk->count()>0)
															<select name="opsiproduk">
																@foreach ($opsiproduk as $key => $opsi)
																<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
																	{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
																</option>
																@endforeach
															</select>
															@endif
															<div class="space30 clearfix"></div>
															<div class="qty-btngroup clearfix">
																<button type="button" class="minus">-</button>
																	<input type="text" class="qty" name='qty' value="1" size="2" id="qty-input">
																<button type="button" class="plus">+</button>
															</div>
															<div class="space30 clearfix"></div>
															<div class="add-to-cart">
																<input style="padding: 15px 20px;" type="submit" id="button-cart" class="btn btn-primary btn-iconed" value="Masukan Keranjang">
															</div>
														@endif														
													@endif
													</form>
													<br><br>													
													<!-- /SHARE CONTENT -->
													<div class="space20 clearfix"></div>
													<div style="margin: 20px 0px; border-top: 1px solid #EEE; padding: 20px 0px;">
														<iframe src="//www.facebook.com/plugins/share_button.php?href={{URL::to(slugProduk($produk))}}&amp;layout=button" scrolling="no" frameborder="0" style="border:none; overflow:hidden;height:20px;width:75px;" allowTransparency="true"></iframe>
														<a class="twitter-share-button" href="https://twitter.com/share" data-count="none">Tweet </a>
														<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
													</div>
													<!-- /SHARE CONTENT -->
												</div>
											</div>
										</div>
									</div>									
								</div>
								<!-- /SINGLE PRODUCT DETAILS -->
								<div class="bs-example bs-example-tabs">
									<ul id="myTab" class="nav nav-tabs">
										<li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
										<li><a href="#review" data-toggle="tab">Review</a></li>
										<li><a href="#comment" data-toggle="tab">Comment</a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div class="tab-pane fade in active" id="desc">
											<p>{{$produk->deskripsi}}</p>
										</div>
										<div class="tab-pane fade" id="review">
											{{pluginTrustklik()}}
										</div>
										<div class="tab-pane fade" id="comment">
											{{$fbscript}}
											{{fbcommentbox(slugProduk($produk), '640px', '5', 'light')}}
										</div>
									</div>
								</div>
								@if(count($produklain) != 0)
								<!-- RELATED PRODUCTS -->
								<div class="section carousel-iframe">
									<div class="container">									
										<div class="row carousel-iframe offer">
											<div class="col-xs-12 col-sm-12">											
												<h4 class="section-title">RELATED PRODUCTS</h4>
												<div class="section-inner">												
													<!-- carousel control nav direction -->
													<div class="carousel-direction-arrows">
														<ul class="direction-nav carousel-direction">
															<li>
																<a class="crsl-prev btn" href="#">
																	<span class="icon-arrow-left10"></span>
																</a>
															</li>
															<li>
																<a class="crsl-next btn" href="#">
																	<span class="icon-arrow-right9"></span>
																</a>
															</li>
														</ul>
													</div>
													<!-- /carousel control nav direction -->
													
													<!-- carousel wrapper -->
													<div class="carousel-wrapper row" data-minitems="1" data-maxitems="4" data-loop="true" data-autoplay="false" data-slideshow-speed="3000" data-speed="300">
														<ul class="products-container product-grid carousel-list portrait ">
															@foreach($produklain as $myproduk)	
															<li>
																<div class="product">
																	<a href="{{URL::to(slugProduk($myproduk))}}" class="product-link clearfix">
																		@if(is_terlaris($myproduk))	
																			<div class="ribbon special">Featured</div>
																		@elseif(is_produkbaru($myproduk))	
																			<span class="ribbon special">Baru</span>
																		@elseif(is_outstok($myproduk))	
																			<div class="ribbon special">Kosong</div>
																		@endif	
																		<div class="product-thumbnail">
																			{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('style' => 'height:220px'))}}
																		</div>
																	</a>
																	<div class="button-add">
																		<div class="button-add-inner">
																			<!-- <a onclick="#" class="wishlist-hover" title="">  ADD TO WISHLIST</a> -->
																			<a href="{{URL::to(slugProduk($myproduk))}}" class="compare-hover">  Lihat Detail</a>
																			<!-- <a onclick="#" class="add-to-cart cart-hover" title="">  ADD TO CART</a> -->
																		</div>
																	</div>
																	
																	<div class="product-info clearfix">
																		<h4 class="title">
																			<a href="{{URL::to(slugProduk($myproduk))}}">{{$myproduk->nama}}</a>
																		</h4>
																		@if($setting->checkoutType!=2)	
																		<div class="details">
																			<div class="product-price"> 
																				<span class="price-old">
																				@if($myproduk->hargaCoret != 0)	
																				{{jadiRupiah($myproduk->hargaCoret)}}</span>
																				@endif	
																				<span class="price-new">{{jadiRupiah($myproduk->hargaJual)}}</span> 
																			</div>
																		</div>
																		@endif	
																	</div>
																</div>
															</li>
															@endforeach	
														</ul>
													</div>
													<!-- /CAROUSEL WRAPPER -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /RELATED PRODUCTS -->
								@endif	
							</div>
						</div>
					</div>
				</div>				
			</div>
			<!-- /SITE CONTENT -->