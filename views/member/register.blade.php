@if($errors->all())
<div class="error" id='message' style='display:none'>
	Kami menemukan error berikut:
	<br>
	<ul>
		@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif

@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	Selamat anda telah terdaftar.      
</div>
@endif

	<!-- SITE CONTENT  -->
	<div id="site-wrapper">
		<!-- /BREADCRUMBS -->
		<div class="breadcrumbs-wrapper">
			<div class="container">		
				<div class="row">
					<div class="col-xs-12 col-sm-6 center-sm">
						<div class="breadcrumbs">
							<ul class="unstyled">
								<li><a href="{{URL::to('/')}}">Home</a></li>
								<li class="active">Register</li>																							
							</ul>
						</div>
					</div>					
					<div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
							
					<div class="col-xs-12 col-sm-6 center-sm">
						<div class="display-mode">
							<ul class="unstyled float-right"> Register </ul>
						</div>
					</div>
				</div>			
			</div>
		</div>
		<!-- /BREADCRUMBS -->
		
		<!-- SIDEBAR + MAIN CONTENT CONTAINER -->
		<div class="main-content">
			<div class="container">
				<div class="row">													
					<!-- SIDE BAR -->
					<div class="col-xs-12 col-sm-4 col-lg-3 pull-right sidebar">
						<!-- CHOOSE COLOR -->						
						<div class="section  module-list-items">
							<h4 class="section-title">Banner</h4>
							<div class="section-inner">
								@foreach(getBanner(1) as $key=>$banner)
								<div class="section">
									<div class="cat-image">
										<a href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}" width="100%"/></a>                                    
									</div>
								</div>      
								@endforeach
							</div>
						</div>
						<!-- /CHOOSE COLOR -->
					</div>
					<!-- /SIDE BAR -->			

					<!-- MAIN CONTENT -->
					<div class="col-xs-12 col-sm-8 col-lg-9 main">
						<div class="section">
							<p>If you already have an account with us, please login at the <a href="{{URL::to('member/login')}}">login page</a>.</p>
							{{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
								<h2>Your Personal Details</h2>
								<div class="content">
									<table class="form">
										<tbody>
											<tr>
												<td><span class="required">*</span> Nama:</td>
												<td><input style="width:80%" type="text" name="nama" value="{{Input::old('nama')}}" required></td>
											</tr>
											<tr>
												<td><span class="required">*</span> E-Mail:</td>
												<td><input style="width:80%" type="text" name='email' value='{{Input::old("email")}}' required></td>
											</tr>
											<tr>
												<td><span class="required">*</span> Telephone:</td>
												<td><input style="width:80%" type="text" name='telp' value='{{Input::old("telp")}}' required></td>
											</tr>
										</tbody>
									</table>
								</div>
								<h2>Your Address</h2>
								<div class="content">
									<table class="form">
										<tbody>
											<tr>
												<td><span class="required">*</span> Alamat:</td>
												<td><textarea style="width:80%" name='alamat' required>{{Input::old("alamat")}}</textarea></td>
											</tr>
											<tr>
												<td><span id="postcode-required" class="required">*</span> Kode Pos:</td>
												<td><input style="width:80%" type="text" name='kodepos' value='{{Input::old("kodepos")}}'></td>
											</tr>
											<tr>
												<td><span class="required">*</span> Negara:</td>
												<td>
													{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , Input::old("negara"), array('required', 'name="negara" id="negara" data-rel="chosen" onchange="searchProvinsi(this.value)"'))}}
												</td>
											</tr>
											<tr>
												<td><span class="required">*</span> Provisi:</td>
												<td>
													{{Form::select('provinsi',array('' => '-- Pilih Provinsi --'), Input::old("provinsi"),array('required', 'name="provinsi" id="provinsi" data-rel="chosen" onchange="searchKabupaten(this.value)"'))}}
												</td>
											</tr>
											<tr>
												<td><span class="required">*</span> Kabupaten:</td>
												<td>
													{{Form::select('kota',array('' => '-- Pilih Kota --'), Input::old("kota"),array('required name="kota" id="kota" data-rel="chosen"'))}}
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h2>Your Password</h2>
								<div class="content">
									<table class="form">
										<tbody>
											<tr>
												<td><span class="required">*</span> Password:</td>
												<td><input type="password" name="password" required></td>
											</tr>
											<tr>
												<td><span class="required">*</span> Password Confirm:</td>
												<td><input type="password" name="password_confirmation" required></td>
											</tr>
											<tr>
												<td><span class="required">*</span> Captcha:</td>
												<td style="width:20%"><input type="text" name='captcha' placeholder="Masukan text berikut" required ></td>
												<td>{{ HTML::image(Captcha::img(), 'Captcha image') }}</td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div class="buttons">
									<div class="right">I have read and agree to the <a class="colorbox cboxElement" href="{{URL::to('service')}}" alt="Privacy Policy" target="_blank"><b>Privacy Policy</b></a> <input type="checkbox" required name='readme' value="1">
									<input type="submit" value="Continue" class="button">
									</div>
								</div>
							{{Form::close()}}
						</div>
					</div>
					<!-- MAIN CONTENT -->
				</div>
			</div>
		</div>
		<!-- /SITE CONTENT -->