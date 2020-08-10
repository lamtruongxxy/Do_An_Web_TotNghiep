@extends("TTMobile.master-page")

@section('main-content')
<div class="space10">&nbsp;</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Thông Tin Sản Phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('index')}}">Home</a> / <span>Thông tin sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<hr>
<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-8">
                        @foreach( $hinhAnh as $ha)
                        <img src="{{ asset('storage') }}/san-pham/{{ $ha->duong_dan }}" height="220px" width="220px" />
                        @endforeach
                    </div>
                    <div class="col-sm-4">
                        <div class="single-item-body">
                            <p class="single-item-title" style="font-size: 20px">{{ $thongTinSP->ten_sp }}</p>
                            <p class="single-item-price">
                                @if( $thongTinSP->gia_khuyen_mai==0 )
                                <span class="flash-sale">{{ number_format($thongTinSP->gia_sp,0) }} đ</span>
                                @else
                                <span class="flash-sale">{{ number_format($thongTinSP->gia_khuyen_mai,0) }}đ</span>
                                <span class="flash-del">{{ number_format($thongTinSP->gia_sp,0) }} đ</span>
                                @endif
                            </p>
                        </div>
                        <div class="space30">&nbsp;</div>
                        <p class="single-item-title">Nhà sản xuất: {{ $thongTinSP->nhaSanXuat->ten_nha_sx}}</p><br />
                        <p class="single-item-title">Loại: {{ $thongTinSP->loaiSanPham->ten_loai_sp }}</p><br />
                        <p class="single-item-title">Chế độ bảo hành: {{ $thongTinSP->che_do_bao_hanh }}</p><br />
                        <p class="single-item-title">Ngày ra mắt: {{ $thongTinSP->created_at->format('d/m/Y') }}</p>
                        <div class="space30">&nbsp;</div>
                        <p>Số Lượng:</p>
                        <div class="single-item-options">
                            <select class="wc-select" name="size">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô Tả Sản Phẩm</a></li>
                        <li><a href="#tab-reviews">Bình Luận</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p style="font-size: 15px">{{ $thongTinSP->mo_ta_sp }}</p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Sản Phẩm Tương Tự</h4>
                    <div class="row">
                        {{-- load sản phẩm --}}
                        @foreach($sanPhamSale as $sale)
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    @if( $sale->gia_khuyen_mai !=0 )
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                @else
                                @endif
                                </div>
                                <div class="single-item-header">

                                    <a href="{{ route('products-detail',$sale->id) }}"><img style="width: 230px;height: 250px;"
                                            src="{{ asset('storage') }}/san-pham/{{ $sale->hinhAnhSP[1]->duong_dan }} "
                                            alt="{{ $sale->ten_sp }}" alt="{{ $sale->ten_sp }}"></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{ $sale->ten_sp }}</p>
                                    <p class="single-item-price">
                                        @if( $sale->gia_khuyen_mai==0 )
                                        <span class="flash-sale">{{ number_format($sale->gia_sp,0) }} đ</span>
                                        @else
                                        <span class="flash-sale">{{ number_format($sale->gia_khuyen_mai,0) }}
                                            đ</span>
                                        <span class="flash-del">{{ number_format($sale->gia_sp,0) }} đ</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="{{ route('add-to-cart',$sale->id) }}"><i
                                            class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{ route('products-detail',$sale->id) }}">Details <i
                                            class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Thông Số Sản Phẩm</h3>
                    <div class="widget-body" style="font-size: 13px;">
                        <div class="beta-lists">
                            @foreach( $tenThongSo as $tt)
                            <div class="media beta-sales-item">
                                <div class="media-body">
                                    <p>{{ $tt->thongSo->ten_thong_so }}:&nbsp;{{ $tt->gia_tri }}&nbsp;{{ $tt->thongSo->don_vi }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->

@endsection
