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
                                    <img data-src="{{ asset('storage') }}/san-pham/{{ $sale->hinhAnhSP[1]->duong_dan }}" 
                                    alt="{{ $sale->ten_sp }}" class="img-responsive center-block" />
                                    
                                    <label class="per">Tiết kiệm {{ $sale->gia_khuyen_mai }}₫</label>
                                </div>
                                <h3>{{ $sale->ten_sp }}</h3>
                                <div class="price">
                                    <strong>{{ $sale->gia_sp }}₫</strong>
                                    <span>{{ $sale->gia_khuyen_mai }}₫</span>
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
                        <h2 class="title_blog">Điện Thoại bán chạy</h2>
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
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                            <div class="news-item-products">
                                <a href="/oppo-a3s-16gb" title="Oppo A3s 16GB"></a>
                                <div class="relative fix-images">
                                    <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636688079458645221-oppoa3s-tim-1.jpg?v=1551252470783" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" alt="Oppo A3s 16GB" class="img-responsive center-block" />
                                </div>
                                <h3>Oppo A3s 16GB</h3>
                                <div class="price">
                                    <strong>3.290.000₫</strong>
                                </div>
                            </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                            <div class="news-item-products">
                                <a href="/samsung-galaxy-j8" title="Samsung Galaxy J8"></a>
                                <div class="relative fix-images">
                                    <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636668977169527052-samsung-j8-tim-1.jpg?v=1551252361210" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" alt="Samsung Galaxy J8" class="img-responsive center-block" />
                                </div>
                                <h3>Samsung Galaxy J8</h3>
                                <div class="price">
                                    <strong>4.970.000₫</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection