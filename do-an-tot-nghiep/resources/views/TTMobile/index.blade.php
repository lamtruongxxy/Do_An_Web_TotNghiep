@extends("TTMobile.master-page")

@section('main-content')
<section class="awe-section-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="promo-title">
                    <a class="promo-title-a" href="#" title="Sản Phẩm Mới">Sản Phẩm đang sale</a>
                    <div id="owl-promo" class="section-tour-owl2 owl-carousel not-dqowl">
                        @foreach($sanPhamSale as $sale)
                        <div class="item">
                            <div class="news-item-products">
                                <a href="detail.html" title="{{ $sale->ten_sp }}"></a>
                                <div class="relative fix-images">
                                    <img data-src="{{ asset('storage') }}/san-pham/{{ $sale->hinhAnhSP[1]->duong_dan }}" alt="{{ $sale->ten_sp }}" class="img-responsive center-block" />
                                    <label class="per">Sale off</label>
                                </div>
                                <h3>{{ $sale->ten_sp }}</h3>
                                <div class="price">
                                    <strong>{{ $sale->gia_khuyen_mai }}</strong>
                                    <span>{{ $sale->gia_sp }}₫</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="awe-section-4">
    <div class="container">
        <div class="row">
            <div class="col-md- ">
                <div class="section_product clearfix">
                    <div class="section-head clearfix">
                        <h2 class="title_blog">Điện Thoại phổ thông</h2>
                        <div class="viewallcat hidden-xs">
                            <a href="/dien-thoai" title="Điện thoại">Điện thoại</a>
                            <a href="/tablet" title="Tablet">Tablet</a>
                            <a href="/laptop" title="Laptop">Laptop</a>
                            <a href="/phu-kien" title="Phụ kiện">Phụ kiện</a>
                            <a href="/dong-ho" title="Đồng hồ">Đồng hồ</a>
                            <a href="/may-cu" title="Máy cũ">Máy cũ</a>
                        </div>
                    </div>
                    <div class="product-blocks clearfix">
                        @foreach($sanPham as $sp)
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                            <div class="news-item-products">
                                <a href="/oppo-a3s-16gb" title="{{ $sp->ten_sp }}"></a>
                                <div class="relative fix-images">
                                    <img data-src="{{ asset('storage') }}/san-pham/{{ $sp->hinhAnhSP[1]->duong_dan }}" alt="{{ $sp->ten_sp }}" class="img-responsive center-block" />
                                    @if ( $sp->gia_khuyen_mai != 0 )
                                    <label class="per">Sale off</label>
                                    @endif
                                </div>
                                <h3>{{ $sp->ten_sp }}</h3>
                                <div class="price">
                                    @if ( $sp->gia_khuyen_mai == 0 )
                                    <strong>{{ $sp->gia_sp }}₫</strong>
                                    @else
                                    <strong>{{ $sp->gia_khuyen_mai }}</strong>
                                    <span>{{ $sp->gia_sp }}₫</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection