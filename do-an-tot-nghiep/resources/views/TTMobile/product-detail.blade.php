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
                    <div class="col-sm-7">
                        {{-- @foreach( $hinhAnh as $ha)
                        <img src="{{ asset('storage') }}/san-pham/{{ $ha->duong_dan }}" height="220px" width="220px" />
                        @endforeach --}}
                        <div id="myCarousel" style="width:80%" class="carousel slide" data-interval="false"
                            data-ride="carousel" data-pause="hover">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                @foreach($hinhAnh as $key=>$ha)
                                <li data-target="#myCarousel" data-slide-to="{{$key}}" @if($key===0)class="active" @else
                                    @endif></li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                @foreach($hinhAnh as $key=>$ha)
                                @if($key===0)
                                <div class="item active">
                                    @else
                                    <div class="item">

                                        @endif
                                        <img src="{{ asset('storage') }}/san-pham/{{ $ha->duong_dan }}" alt="null"
                                            style="width:100%;height:430px;">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-5">
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
                            <p class="single-item-title">Nhà sản xuất: {{ $thongTinSP->nhaSanXuat->ten_nha_sx}}</p>
                            <br />
                            <p class="single-item-title">Loại: {{ $thongTinSP->loaiSanPham->ten_loai_sp }}</p><br />
                            <p class="single-item-title">Chế độ bảo hành: {{ $thongTinSP->che_do_bao_hanh }}</p><br />
                            <p class="single-item-title">Ngày ra mắt: {{ $thongTinSP->created_at->format('d/m/Y') }}</p>
                            <div class="space30">&nbsp;</div>

                            <div>
                                <a class="add-to-cart" href="{{ route('add-to-cart',$thongTinSP->id) }}"><i
                                        class="fa fa-shopping-cart"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">Mô Tả Sản Phẩm</a></li>
                            <li><a href="#tab-reviews">Bình Luận @if($binhLuan){{ count($binhLuan) }} @else @endif</a>
                            </li>
                        </ul>

                        <div class="panel" id="tab-description">
                            <p style="font-size: 15px">{{ $thongTinSP->mo_ta_sp }}</p>
                        </div>
                        <div class="panel" id="tab-reviews">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="comments-list">
                                            @if($binhLuan!=null)
                                            @foreach ($binhLuan as $binhluansp)
                                            <div class="media">
                                                <p class="pull-right"><small>{{$binhluansp->created_at}}</small></p>

                                                <div class="media-body">
                                                    <h4 class="media-heading user_name" style="font-size:15px;
                                              font-weight: bold;">{{$binhluansp->nguoi_binh_luan}}</h4>
                                                    <p style="font-size: 14px">{{$binhluansp->noi_dung_bl}}<p>
                                                </div>
                                            </div>
                                            <hr>
                                            @endforeach
                                            @else
                                            <p>No Reviews</p>
                                            @endif
                                            <div class="media">
                                                <form action="{{route('putcomment')}}" method="post"
                                                    class="beta-form-checkout">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <p style="font-size: 15px;font-weight: bold;">Comments</p>
                                                    <div class="space20">&nbsp;</div>
                                                    <input type="hidden" name="san_pham_id"
                                                        value="{{ $thongTinSP->id }}">
                                                    <div class="form-block">
                                                        <label for="nguoi_binh_luan">Họ tên*</label>
                                                        <input type="text" id="nguoi_binh_luan" name="nguoi_binh_luan"
                                                            maxlength="50" placeholder="Họ tên" required>
                                                    </div>
                                                    <div class="form-block">
                                                        <label for="sdt_nguoi_bl">Điện thoại*</label>
                                                        <input type="text" maxlength="11" id="sdt_nguoi_bl"
                                                            name="sdt_nguoi_bl" placeholder="Số điện thoại" required>
                                                    </div>
                                                    <div class="form-block">
                                                        <label for="noi_dung_bl">Nội Dung:</label>
                                                        <textarea id="noi_dung_bl" name="noi_dung_bl"
                                                            required></textarea>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="beta-btn primary"
                                                            href="#">Comments</i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                                        <a href="{{ route('products-detail',$sale->id) }}"><img
                                                style="width: 230px;height: 250px;"
                                                src="{{ asset('storage') }}/san-pham/{{ $sale->hinhAnhSP[0]->duong_dan }} "
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
                                        <a class="beta-btn primary"
                                            href="{{ route('products-detail',$sale->id) }}">Details
                                            <i class="fa fa-chevron-right"></i></a>
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
