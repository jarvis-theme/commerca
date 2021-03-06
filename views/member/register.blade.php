<!-- SITE CONTENT  -->
<div id="site-wrapper">
    <!-- /BREADCRUMBS -->
    <div class="breadcrumbs-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 center-sm">
                    <div class="breadcrumbs">
                        <ul class="unstyled">
                            <li><a href="{{url('/')}}">Home</a></li>
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
                    <div class="section  module-list-items">
                        <!-- <h4 class="section-title">Promo</h4> -->
                        <div class="section-inner">
                            @foreach(vertical_banner() as $key=>$banner)
                            <div class="section">
                                <div class="cat-image">
                                    <a href="{{url($banner->url)}}">
                                        {{HTML::image(banner_image_url($banner->gambar),'Info Promo')}}
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /SIDE BAR -->

                <!-- MAIN CONTENT -->
                <div class="col-xs-12 col-sm-8 col-lg-9 main">
                    <div class="section">
                        <p>Sudah punya akun {{Theme::place('title')}}? Masuk <a class="link" href="{{url('member/login')}}">di sini</a></p>
                        {{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
                            <h2>Informasi Umum</h2>
                            <div class="content">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td><span class="required">*</span> Nama Lengkap:</td>
                                            <td><input class="input-profil" type="text" name="nama" value="{{Input::old('nama')}}" required></td>
                                        </tr>
                                        <tr>
                                            <td><span class="required">*</span> Email:</td>
                                            <td><input class="input-profil" type="text" name="email" value="{{Input::old('email')}}" required></td>
                                        </tr>
                                        <tr>
                                            <td><span class="required">*</span> No Telepon:</td>
                                            <td><input class="input-profil" type="text" name="telp" value="{{Input::old('telp')}}" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>Informasi Alamat</h2>
                            <div class="content">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td><span class="required">*</span> Alamat:</td>
                                            <td><textarea class="input-profil" name="alamat" required>{{Input::old("alamat")}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <td><span id="postcode-required" class="required">*</span> Kode Pos:</td>
                                            <td><input class="input-profil" type="text" name="kodepos" value="{{Input::old('kodepos')}}"></td>
                                        </tr>
                                        <tr>
                                            <td><span class="required">*</span> Negara:</td>
                                            <td>
                                                {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, Input::old("negara"), array('required', 'name'=>"negara", 'id'=>"negara", 'data-rel'=>"chosen"))}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="required">*</span> Provinsi:</td>
                                            <td>
                                                {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', 'name'=>"provinsi", 'id'=>"provinsi", 'data-rel'=>"chosen"))}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="required">*</span> Kota:</td>
                                            <td>
                                                {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"),array('required', 'name'=>"kota", 'id'=>"kota", 'data-rel'=>"chosen"))}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>Informasi Password</h2>
                            <div class="content">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td><span class="required">*</span> Password:</td>
                                            <td><input type="password" name="password" required></td>
                                        </tr>
                                        <tr>
                                            <td><span class="required">*</span> Ulangi Password:</td>
                                            <td><input type="password" name="password_confirmation" required></td>
                                        </tr>
                                        <tr>
                                            <td><span class="required">*</span> Kode Captcha:</td>
                                            <td class="captcha">{{ HTML::image(Captcha::img(), 'Captcha image') }}<input type="text" name="captcha" placeholder="Masukan kode berikut" required ></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="buttons">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="checkbox" name="readme" value="1" required checked> Saya telah membaca dan menyetujui <a class="colorbox cboxElement" href="{{url('service')}}" alt="Privacy Policy" target="_blank"><b>Syarat dan Ketentuan</b></a> di {{Theme::place('title')}}.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="submit" value="Daftar" class="button">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
                <!-- MAIN CONTENT -->
            </div>
        </div>
    </div>
</div>
<!-- /SITE CONTENT -->