<div class="breadcrumbs-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 center-sm">
                <div class="breadcrumbs">
                    <ul class="unstyled">
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('member')}}">Member</a></li>
                        <li class="active">Konfirmasi Order</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
            
            <div class="col-xs-12 col-sm-6 center-sm">
                <div class="display-mode">
                    <ul class="unstyled float-right"> Konfirmasi Order </ul>
                </div>
            </div>
        </div>
    
    </div>
</div>
<div class="main-content">
    <div class="container"> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 main">
                <!-- CART ITEMS -->
                <div class="section table-responsive">
                    <table class="my-cart">
                        <thead>
                            <tr>
                                <th class="product-action">Kode Order</th>
                                <th class="product-action">Tgl Order</th>
                                <th class="product-name">Detail Produk</th>
                                <th class="product-price">Total</th>
                                @if($checkouttype != 1)
                                <th class="product-name">Jumlah yg belum di Bayar</th>
                                @endif
                                <th class="product-price">No Resi</th>
                                <th class="product-action">Status</th>
                                <a class="pr_name" href="#">Details Order: {{--date('d M Y')--}}</a>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $checkouttype==1 ? prefixOrder().$order->kodeOrder : prefixOrder().$order->kodePreorder}}</td>
                                <td>{{ $checkouttype==1 ? waktu($order->tanggalOrder) : waktu($order->tanggalPreorder) }}</td>
                                <td>
                                    @if ($checkouttype==1)
                                        @foreach ($order->detailorder as $detail)
                                            <li> {{ $detail->produk->nama }} {{ $detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':'' }} - {{ $detail->qty }}</li>
                                        @endforeach
                                    @else
                                        {{ $order->preorderdata->produk->nama }} 
                                        ({{ $order->opsiSkuId==0 ? 'No Opsi' : $order->opsisku->opsi1.($order->opsisku->opsi2!='' ? ' / '.$order->opsisku->opsi2:'').($order->opsisku->opsi3!='' ? ' / '.$order->opsisku->opsi3:'') }})
                                         - {{$order->jumlah}}
                                    @endif
                                </td>
                                <td>{{ price($order->total) }}</td>
                                @if($checkouttype != 1)
                                <td class="align_center vline">
                                    @if($checkouttype==1)
                                    - {{price($order->total)}}
                                    @else 
                                        @if($order->status < 2)
                                            - {{price($order->total)}}
                                        @elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
                                            - {{price($order->total - $order->dp)}}
                                        @else
                                        0
                                        @endif
                                    @endif
                                </td>
                                @endif
                                <td class="align_center vline">{{ $order->noResi }}</td>
                                <td class="align_center vline">
                                    @if($checkouttype==1)
                                        @if($order->status==0)
                                        <span class="label label-warning">Pending</span>
                                        @elseif($order->status==1)
                                        <span class="label label-important">Konfirmasi diterima</span>
                                        @elseif($order->status==2)
                                        <span class="label label-info">Pembayaran diterima</span>
                                        @elseif($order->status==3)
                                        <span class="label label-success">Terkirim</span>
                                        @elseif($order->status==4)
                                        <span class="label label-default">Batal</span>
                                        @endif
                                    @else 
                                        @if($order->status==0)
                                        <span class="label label-warning">Pending</span>
                                        @elseif($order->status==1)
                                        <span class="label label-important">Konfirmasi DP diterima</span>
                                        @elseif($order->status==2)
                                        <span class="label label-info">DP terbayar</span>
                                        @elseif($order->status==3)
                                        <span class="label label-info">Menunggu pelunasan</span>
                                        @elseif($order->status==4)
                                        <span class="label label-info">Pembayaran lunas</span>
                                        @elseif($order->status==5)
                                        <span class="label label-success">Terkirim</span>
                                        @elseif($order->status==6)
                                        <span class="label label-default">Batal</span>
                                        @elseif($order->status==7)
                                        <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="clear"></div>
                <div class="well">
                    @if($order->jenisPembayaran == 1 && $order->status == 0)
                    <h2>{{trans('content.step5.confirm_btn')}}</h2>
                    @if($checkouttype==1)
                    {{-- */ $konfirmasi = 'konfirmasiorder/' /* --}}  
                    @else
                    {{-- */ $konfirmasi = 'konfirmasipreorder/' /* --}}  
                    @endif

                    {{Form::open(array('url'=> $konfirmasi.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}} 
                        <div class="control-group">
                            <label class="control-label" for="inputEmail" > Nama Pengirim</label>
                            <div class="controls">
                                <input class="span6" type="text" name="nama" value="{{Input::old('nama')}}" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"> No Rekening</label>
                            <div class="controls">
                                <input type="text" class="span6" name="noRekPengirim" value="{{Input::old('noRekPengirim')}}" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"> Rekening Tujuan</label>
                            <div class="controls" id="norek">
                                <select name="bank" class="banks">
                                    <option value="">-- Pilih Bank Tujuan --</option>
                                    @foreach (list_banks() as $bank)
                                    <option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"> Jumlah</label>
                            <div class="controls">
                                @if($checkouttype==1)
                                    <input class="span6" type="text" name="jumlah" value="{{$order->total}}" required>
                                @else
                                    @if($order->status < 2)
                                    <input class="span6" type="text" name="jumlah" value="{{$order->dp}}" required>
                                    @elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
                                    <input class="span6" type="text" name="jumlah" value="{{$order->total - $order->dp}}" required>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn theme"><i class="icon-check"></i> {{trans('content.step5.confirm_btn')}}</button>
                            </div>
                        </div>
                    {{Form::close()}}
                    @endif
                    <br>

                    @if($paymentinfo!=null)
                    <h3><center>Paypal Payment Details</center></h3><br>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr><td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td></tr>
                            <tr><td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td></tr>
                            <tr><td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td></tr>
                            <tr><td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td></tr>
                            <tr><td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td></tr>
                            <tr><td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td></tr>
                            <tr><td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td></tr>
                        </table>
                    </div>
                    <p>Thanks you for your order.</p><br>
                    @endif 
              
                    @if($order->jenisPembayaran==2)
                    <center>
                        <h3><strong>{{trans('content.step5.confirm_btn')}} Paypal</strong></h3><hr>
                        <p>{{trans('content.step5.paypal')}}</p>
                    </center>
                    <center id="paypal">{{$paypalbutton}}</center>
                    <br>
                    @elseif($order->jenisPembayaran==5 && $order->status == 0)
                    <center>
                        <h3><strong>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</strong></h3><hr>
                        <p>{{trans('content.step5.doku')}}</p>
                        {{ $doku_button }}
                    </center>
                    <br>
                    @elseif($order->jenisPembayaran==6 && $order->status == 0)
                    <center>
                        <h3><strong>{{trans('content.step5.confirm_btn')}} Bitcoin</strong></h3><hr>
                        <p>{{trans('content.step5.bitcoin')}}</p>
                        {{$bitcoinbutton}}
                    </center>
                    <br>
                    @elseif($order->jenisPembayaran == 8 && $order->status == 0)
                    <center>
                        <h3><strong>{{trans('content.step5.confirm_btn')}} Veritrans</strong></h3><hr>
                        <p>{{trans('content.step5.veritrans')}}</p>
                        <button class="btn-veritrans" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
                    </center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>