@extends("TTMobile.master-page")

@section('main-content')
<div class="space10">&nbsp;</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        <li><h6>Nhà Sản Xuất</h6></li>
                        @foreach ($dsnhaSanXuat as $dsnsx)
                        <li><a href="{{ route('products', $dsnsx->id) }}">{{ $dsnsx->ten_nha_sx }}</a></li>
                        @endforeach
                        <li><h6>Loại Điện Thoại</h6></li>
                        @foreach ($dsloaiSanPham as $dsLoaiSP)
                        <li><a href="{{ route('products-type', $dsLoaiSP->id) }}">{{ $dsLoaiSP->ten_loai_sp }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Điện Thoại</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Có {{ count($dsSP) }} Sản Phẩm Hiển Thị</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            {{-- load sản phẩm --}}
                            @foreach($dsSP as $dsSanPham)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        @if( $dsSanPham->gia_khuyen_mai !=0 )
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @else
                                    @endif
                                    </div>
                                    <div class="single-item-header">
                                        <a href="{{ route('products-detail',$dsSanPham->id) }}"><img style="width: 230px;height: 250px;" src="  {{ asset('storage') }}/san-pham/{{ $dsSanPham->hinhAnhSP[1]->duong_dan }} " alt="{{ $dsSanPham->ten_sp }}"
                                                alt="{{ $dsSanPham->ten_sp }}"></a>
                                    </div>
                                  
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $dsSanPham->ten_sp }}</p>
                                        <p class="single-item-price">
                                            @if( $dsSanPham->gia_khuyen_mai==0 )
                                            <span class="flash-sale">{{ number_format($dsSanPham->gia_sp,0) }} đ</span>
                                            @else
                                            <span class="flash-sale">{{ number_format($dsSanPham->gia_khuyen_mai,0) }}đ</span>
                                            <span class="flash-del">{{ number_format($dsSanPham->gia_sp,0) }} đ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ route('products-detail',$dsSanPham->id) }}">Details <i
                                                class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                          
                            @endforeach
                            <div class="space40">&nbsp;</div>
                            <div class="row">
                                <div style="text-align: center"> {{ $dsSP->links() }}</div>
                            </div>
                            {{-- end --}}
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
