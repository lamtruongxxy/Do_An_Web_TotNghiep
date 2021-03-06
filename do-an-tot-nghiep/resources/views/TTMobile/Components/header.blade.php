<div id="header">
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left ">
                <a href="{{ route('index') }}" id="logo"><img src="{{ asset('ttmobile/images/logo-shop.png') }}"
                        width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
    
                
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{ route('search-order') }}">
                        <input type="text" value="" name="keysearch" id="s" placeholder="Nhập sdt tra cứu đơn hàng..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{ route('search') }}">
                        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>
                <div class="beta-comp">

                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng
                            (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif) <i
                                class="fa fa-chevron-down"></i></div>
                        @if(Session::has('cart'))
                        <div class="beta-dropdown cart-body">
                            @foreach ($product_cart as $product)
                            <div class="cart-item">
                                <a class="cart-item-delete" href="{{route('delete-cart',$product['item']['id'])}}"><i
                                        class="fa fa-times"></i> </a>
                                <div class="media">
                                    <a class="pull-left">
                                        <img style="width: 50%;"
                                            src="{{ asset('ttmobile/images/products/cart/1.png') }}" alt=""></a>
                                    {{-- {{$product['item']['image']}} --}}
                                    <div class="media-body">
                                        <span class="cart-item-title">{{$product['item']['ten_sp']}}</span>
                                        <span
                                            class="cart-item-amount">{{$product['qty']}} x <span>@if($product['item']['gia_khuyen_mai']==0){{number_format($product['item']['gia_sp'])}}@else{{number_format($product['item']['gia_khuyen_mai'])}}@endif</span></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                            <div class="cart-caption">
                                <div class="cart-total text-right">Tổng tiền: <span
                                        class="cart-total-value">{{number_format(Session('cart')->totalPrice)}}
                                        đồng</span></div>
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{ route('checkout') }}" class="beta-btn primary text-center">Đặt hàng <i
                                            class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cart -->
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->

    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #f30;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span>
                <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ route('index') }}">Trang chủ</a></li>
                    <li><a href="{{ route('product') }}">Điện Thoại</a>
                        <ul class="sub-menu">
                            @foreach ($nhaSanXuat as $dsNSX)
                            <li><a href="{{ route('products', $dsNSX->id) }}">{{$dsNSX->ten_nha_sx}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                    <li><a href="{{ route('contacts') }}">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->
