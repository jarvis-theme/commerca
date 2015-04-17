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
				<div class="col-xs-12 col-sm-6 col-lg-3">
					<div class="widget">
						<h4 class="widget-header">Posting Terbaru</h4>
						<div class="widget-inner">
							@foreach (list_blog(3) as $items)
							<div class="media">
								<a href="{{slugBlog($items)}}">{{$items->judul}}</a><br />
								<small>— diposting pada {{waktuTgl($items->created_at)}}</small>
							</div>
							@endforeach
						</div>
					</div>
				</div>
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
									<p>{{@$kontak->alamat}}</p>
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
							@if($kontak->ym)
							<div class="media">
								<div class="pull-left">
									<i class="icon-chat2"></i>
								</div>
								<div class="media-body">
									<p>{{@$kontak->ym}}</p>
									<p>{{ymyahoo(@$kontak->ym)}}</p>
								</div>
							</div>
							@endif
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
											@if($link->linkTo == 'halaman/about-us')
											<a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
											@else
											<a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
											@endif
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
								@if(list_payments()[0]->aktif == 1)
								<li><img src="{{URL::to('img/bank/paypal.png')}}" alt="support paypal" /></li>
								@endif
								@if(list_payments()[2]->aktif == 1)
								<li><img src="{{URL::to('img/bank/ipaymu.jpg')}}" alt="support ipaymu" /></li>
								@endif
								@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
								<li><img src="{{URL::to('img/bank/doku.jpg')}}" alt="support doku myshortcart" /></li>
								@endif
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