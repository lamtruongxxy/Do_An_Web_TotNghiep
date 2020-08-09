@extends("TTMobile.master-page")

@section('main-content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Điện Thoại Mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Có {{ count($sanPhamSale) }} Sản Phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            {{-- load sản phẩm --}}
                            @foreach($sanPhamSale as $sale)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if( $sale->gia_khuyen_mai !=0 )
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @else
                                    @endif
                                    <div class="single-item-header">
                                        <a href="product.html"><img style="width: 230px;height: 250px;" src="{{ asset('storage') }}/san-pham/{{ $sale->hinhAnhSP[1]->duong_dan }} " alt="{{ $sale->ten_sp }}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $sale->ten_sp }}</p>
                                        <p class="single-item-price">
                                            @if( $sale->gia_khuyen_mai==0 )
                                            <span class="flash-sale">{{ number_format($sale->gia_sp,0) }} đ</span>
                                            @else
                                            <span class="flash-sale">{{ number_format($sale->gia_khuyen_mai,0) }} đ</span>
                                            <span class="flash-del">{{ number_format($sale->gia_sp,0) }} đ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            {{-- end --}}
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Top Điện Thoại</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Có {{ count($sanPham) }} Sản Phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($sanPham as $sanPham)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if( $sale->gia_khuyen_mai !=0 )
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @else
                                    @endif
                                    <div class="single-item-header">
                                        <a href="product.html"><img style="width: 230px;height: 250px;" src="{{ asset('storage') }}/san-pham/{{ $sanPham->hinhAnhSP[1]->duong_dan }} " alt="{{ $sanPham->ten_sp }}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $sanPham->ten_sp }}</p>
                                        <p class="single-item-price">
                                            @if( $sanPham->gia_khuyen_mai==0 )
                                            <span class="flash-sale">{{ number_format($sanPham->gia_sp ,0) }} đ</span>
                                            @else
                                            <span class="flash-sale">{{ number_format($sanPham->gia_khuyen_mai,0) }} đ</span>
                                            <span class="flash-del">{{ number_format($sanPham->gia_sp,0) }} đ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                        <div class="space40">&nbsp;</div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection