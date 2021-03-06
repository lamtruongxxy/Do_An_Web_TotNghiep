@extends("TTMobile.master-page")

@section('main-content')
<div class="space10">&nbsp;</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đặt hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{route('index')}}">Home</a> / <span>Đặt hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<hr>
<div class="container">
    <div id="content">

        <form action="{{route('checkout')}}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            @if(Session::has('thongbao'))
            <div class="row">
                <div class="alert alert-info">{{Session::get('thongbao')}} Đặt Hàng Thành Công Xem Thêm Sản Phẩm <a href="{{route('index')}}" style="color: red"> Trang Chủ</a></div>
            </div>
            @endif
            <div class="row">
                <div class="col-sm-6">
                    <h4>Đặt hàng</h4>
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        <label for="ten_khach_hang">Họ tên*</label>
                        <input type="text" maxlength="50" id="ten_khach_hang" name="ten_khach_hang" placeholder="Họ tên" required>
                    </div>
                    <div class="form-block">
                        <label>Giới tính </label>
                        <input id="gioi_tinh" type="radio" class="input-radio" name="gioi_tinh" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                        <input id="gioi_tinh" type="radio" class="input-radio" name="gioi_tinh" value="nữ" style="width: 10%"><span>Nữ</span>
                    </div>

                    <div class="form-block">
                        <label for="dia_chi">Địa chỉ*</label>
                        <input type="text" maxlength="200" id="dia_chi" name="dia_chi" placeholder="Địa chỉ" required>
                    </div>
                    <div class="form-block">
                        <label for="sdt">Số điện thoại*
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <p style="color: red">{{ $error }}</p>
                            @endforeach
                            @endif
                        </label>
                        <input type="text" id="sdt" name="sdt" maxlength="11" required>
                    </div>
                    <div class="form-block">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" required placeholder="expample@gmail.com">
                    </div>
                    <div class="form-block">
                        <label for="ghi_chu">Ghi chú</label>
                        <textarea id="ghi_chu" name="ghi_chu" required></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head">
                            <h5>Đơn hàng của bạn</h5>
                        </div>
                        <div class="your-order-body" style="padding: 0px 10px">
                            <div class="your-order-item">
                                <div>
                                    @if(Session::has('cart'))
                                    @foreach ($product_cart as $product)
                                    <!--  one item	 -->
                                    <div class="media">
                                        <img width="10%" src="{{ asset('ttmobile/images/products/cart/1.png') }}" alt="" class="pull-left">
                                        <div class="media-body">
                                            <p class="font-large" style="font-weight: bold">
                                                {{$product['item']['ten_sp']}}</p><br />
                                            <span class="color-gray your-order-info" style="font-size: 15px">Đơn giá:
                                                @if($product['item']['gia_khuyen_mai']==0){{number_format($product['item']['gia_sp'])}}@else{{number_format($product['item']['gia_khuyen_mai'])}}@endif
                                                đồng</span>
                                            <span class="color-gray your-order-info" style="font-size: 15px">Số lượng:
                                                {{$product['qty']}}</span>
                                        </div>
                                    </div>
                                    <!-- end one item -->
                                    @endforeach
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left">
                                    <p class="your-order-f18">Tổng tiền:</p>
                                </div>
                                <div class="pull-right">
                                    <h5 class="color-black"> @if(Session::has('cart')){{number_format($totalPrice)}}
                                        đồng @else 0 đồng @endif </h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="your-order-head">
                            <h5>Hình thức thanh toán</h5>
                        </div>

                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="hinh_thuc_thanh_toan" type="radio" class="input-radio" value="0" name="hinh_thuc_thanh_toan" checked="checked" data-order_button_text="">
                                    <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                    <div class="payment_box payment_method_bacs" style="display: block;">
                                        Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho
                                        nhân viên giao hàng
                                    </div>
                                </li>

                                <li class="payment_method_cheque">
                                    <input id="hinh_thuc_thanh_toan" type="radio" class="input-radio" value="1" name="hinh_thuc_thanh_toan" data-order_button_text="">
                                    <label for="payment_method_cheque">Chuyển khoản </label>
                                    <div class="payment_box payment_method_cheque" style="display: none;">
                                        Chuyển tiền đến tài khoản sau:
                                        <br>- Số tài khoản: 123 456 789
                                        <br>- Chủ TK: Le Hong Lam Truong
                                        <br>- Ngân hàng VCB, Chi nhánh TPHCM
                                    </div>
                                </li>

                            </ul>
                        </div>

                        @if(Session::has('cart')) <div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
                        @else
                        <div class="text-center"><a class="beta-btn primary" href="{{route('product')}}">Mua hàng
                            </a></div>
                        @endif
                    </div> <!-- .your-order -->
                </div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection