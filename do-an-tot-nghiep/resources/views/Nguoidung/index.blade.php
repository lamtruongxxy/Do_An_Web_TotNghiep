<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>TTmobile</title>
      <script src="users/js/defer_plus.js" type="text/javascript"></script>
      <script>deferscript('js/polyfill.js', 'polyfill-js', 1)</script>
      <link rel="icon" href="" type="image/x-icon" />
      <link href="users/css/bootstrap.scss.css" rel="stylesheet" type="text/css" />
      <link href="users/css/plugin.scss.css" rel="stylesheet" type="text/css" />
      <link href="users/css/base.scss.css" rel="stylesheet" type="text/css" />
      <link href="users/css/ant-mobile.scss.css" rel="stylesheet" type="text/css" />

      <!-- <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'> -->
      <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="users/assets/dest/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css"> -->
      <!-- <link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css"> -->
      <!-- <link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css"> -->
      <!-- <link rel="stylesheet" title="style" href="assets/dest/css/style.css"> -->
      <!-- <link rel="stylesheet" href="assets/dest/css/animate.css"> -->
      <!-- <link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css"> -->
      
   </head>
   
   <body >
      <header class="header">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-2 col-100-h">
                  <button type="button" class="navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                  <div class="logo"><a href="index.html" class="logo-wrapper" title="Web Mobile"><img src="users/images/logo.png" alt="logo Ant Mobile" /></a></div>
                  <div class="mobile-cart visible-sm visible-xs">
                     <a href="" title="Giỏ hàng">
                        <i class="fa fa-cart-arrow-down"></i>
                        <div class="cart-right"><span class="count_item_pr">0</span>&#9783;</div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 add-arrow">
                  <form class="search-bar has-validation-callback" action="" method="" role="search">
                     <input type="search" name="query" value="" placeholder="Tìm kiếm..." class="input-group-field search-text" autocomplete="off">
                     <button class="btn icon-fallback-text">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve" width="20px" height="20px">
                           <g>
                              <g>
                                 <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" data-original="#000000" class="active-path" data-old_color="#ff3300" fill="#ff3300"/>
                              </g>
                           </g>
                        </svg>
                     </button>
                  </form>
                  <div class="arrow-left"></div>
               </div>
               <div class="col-md-7 col-lg-7 nav-bg-white hidden-sm hidden-xs">
                  <ul id="nav" class="nav">
                     <li class="nav-item active"><a class="nav-link" href="index.html" title="Trang chủ">Trang chủ</a></li>
                     <li class="nav-item "><a class="nav-link" href="gioithieu.html" title="Giới thiệu">Giới thiệu</a></li>
                     <li class="nav-item ">
                        <a href="product.html" class="nav-link" title="San Pham">Sản Phẩm <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>			           
                        <ul class="dropdown-menu">
                           <li class="level1 item">
                                 <h5> <a class="hmega" href="#" title="Điện thoại">Điện thoại</a></h5>
                                 <ul class="level1">
                                    <li class="level2">
                                       <a href="#" title="Samsung">Samsung</a>
                                    </li>
                                    <li class="level2">
                                       <a href="#" title="Apple">Apple</a>
                                    </li>
                                    <li class="level2">
                                       <a href="#" title="Sony">Sony</a>
                                    </li>
                                    <li class="level2">
                                       <a href="#" title="Oppo">Oppo</a>
                                    </li>
                                    <li class="level2">
                                       <a href="#" title="Huawei">Huawei</a>
                                    </li>
                                    <li class="level2">
                                       <a href="#" title="Xiaomi">Xiaomi</a>
                                    </li>
                                    <li class="level2">
                                       <a href="#" title="Vivo">Vivo</a>
                                    </li>
                                 </ul>
                              </li>
                        </ul>
                    </li>
                     <li class="nav-item "><a class="nav-link" href="lienhe.html" title="Liên hệ">Liên hệ</a>  
                     </li>
                     <li> </li>
                  </ul>
               </div>
            </div>
         </div>
      </header>

      <script src="users/js/jquery.min.js" type="text/javascript"></script>
      <script src="users/js/option-selectors.js" type="text/javascript"></script>
      <script src="users/js/api.jquery.js?4" type="text/javascript"></script>
      <script src="users/js/owl.carousel.min.js" type="text/javascript"></script>
      <h1 class="hidden">Ant Mobile</h1>
      <section class="awe-section-2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="promo-title">
                     <a class="promo-title-a" href="#" title="Sản Phẩm Mới">Sản Phẩm Mới</a>
                     <div id="owl-promo" class="section-tour-owl2 owl-carousel not-dqowl">
                        <div class="item">
                           <div class="news-item-products">
                              <a href="detail.html" title="Samsung Galaxy S10+ (8 + 128GB)"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636863659522918468-ss-galaxy-s10-plus-xanh-1.png?v=1552139238637" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy S10+ (8 + 128GB)" class="img-responsive center-block" />
                                 <label class="per">Giảm  2% </label>
                              </div>
                              <h3>Samsung Galaxy S10+ (8 + 128GB)</h3>
                              <div class="price">
                                 <strong>22.990.000₫</strong>
                                 <span>23.500.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-s10e" title="Samsung Galaxy S10e"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636863622278818137-ss-galaxy-s10e-den-1.png?v=1552138222357" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy S10e" class="img-responsive center-block" />
                                 <label class="per">Giảm  6% </label>
                              </div>
                              <h3>Samsung Galaxy S10e</h3>
                              <div class="price">
                                 <strong>15.990.000₫</strong>
                                 <span>17.000.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-a9-2018" title="Samsung Galaxy A9 2018"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636776104541101822-galaxy-a7-blue-5.png?v=1551252657427" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy A9 2018" class="img-responsive center-block" />
                                 <label class="per">Giảm  16% </label>
                              </div>
                              <h3>Samsung Galaxy A9 2018</h3>
                              <div class="price">
                                 <strong>10.490.000₫</strong>
                                 <span>12.500.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-a7-2018" title="Samsung Galaxy A7 (2018)"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636746958719163577-a7-2018-blue-1.png?v=1551252578530" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy A7 (2018)" class="img-responsive center-block" />
                                 <label class="per">Giảm  7% </label>
                              </div>
                              <h3>Samsung Galaxy A7 (2018)</h3>
                              <div class="price">
                                 <strong>6.990.000₫</strong>
                                 <span>7.500.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="news-item-products">
                              <a href="/oppo-a3s-16gb" title="Oppo A3s 16GB"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636688079458645221-oppoa3s-tim-1.jpg?v=1551252470783" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Oppo A3s 16GB" class="img-responsive center-block" />
                              </div>
                              <h3>Oppo A3s 16GB</h3>
                              <div class="price">
                                 <strong>3.290.000₫</strong>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-j8" title="Samsung Galaxy J8"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636668977169527052-samsung-j8-tim-1.jpg?v=1551252361210" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy J8" class="img-responsive center-block" />
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
      <section class="awe-section-3">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section_product clearfix">
                     <div class="section-head clearfix">
                        <h2 class="title_blog">Điện thoại Cảm Ứng</h2>
                        <div class="viewallcat hidden-xs">
                           <a href="/samsung" title="Samsung">Samsung</a>
                           <a href="/apple" title="Apple">Apple</a>
                           <a href="/sony" title="Sony">Sony</a>
                           <a href="/oppo" title="Oppo">Oppo</a>
                           <a href="/huawei" title="Huawei">Huawei</a>
                           <a href="/xiaomi" title="Xiaomi">Xiaomi</a>
                        </div>
                     </div>
                     <div class="product-blocks clearfix">
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-s10e" title="Samsung Galaxy S10e"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636863622278818137-ss-galaxy-s10e-den-1.png?v=1552138222357" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy S10e" class="img-responsive center-block" />
                                 <label class="per">Giảm  6% </label>
                              </div>
                              <h3>Samsung Galaxy S10e</h3>
                              <div class="price">
                                 <strong>15.990.000₫</strong>
                                 <span>17.000.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-a9-2018" title="Samsung Galaxy A9 2018"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636776104541101822-galaxy-a7-blue-5.png?v=1551252657427" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy A9 2018" class="img-responsive center-block" />
                                 <label class="per">Giảm  16% </label>
                              </div>
                              <h3>Samsung Galaxy A9 2018</h3>
                              <div class="price">
                                 <strong>10.490.000₫</strong>
                                 <span>12.500.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-a7-2018" title="Samsung Galaxy A7 (2018)"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636746958719163577-a7-2018-blue-1.png?v=1551252578530" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy A7 (2018)" class="img-responsive center-block" />
                                 <label class="per">Giảm  7% </label>
                              </div>
                              <h3>Samsung Galaxy A7 (2018)</h3>
                              <div class="price">
                                 <strong>6.990.000₫</strong>
                                 <span>7.500.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/oppo-a3s-16gb" title="Oppo A3s 16GB"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636688079458645221-oppoa3s-tim-1.jpg?v=1551252470783" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Oppo A3s 16GB" class="img-responsive center-block" />
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
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636668977169527052-samsung-j8-tim-1.jpg?v=1551252361210" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy J8" class="img-responsive center-block" />
                              </div>
                              <h3>Samsung Galaxy J8</h3>
                              <div class="price">
                                 <strong>4.970.000₫</strong>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-s9" title="Samsung Galaxy S9"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636552317043233179-1.jpg?v=1551242342070" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy S9" class="img-responsive center-block" />
                              </div>
                              <h3>Samsung Galaxy S9</h3>
                              <div class="price">
                                 <strong>19.990.000₫</strong>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/nokia-6-1-plus" title="Nokia 6.1 Plus"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636737264632784078-nokia6plus-den-1.jpg?v=1551242185720" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Nokia 6.1 Plus" class="img-responsive center-block" />
                              </div>
                              <h3>Nokia 6.1 Plus</h3>
                              <div class="price">
                                 <strong>5.990.000₫</strong>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-a7-2018-128gb" title="Samsung Galaxy A7 2018 - 128GB"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636749648129210031-a7-2018-den-1.jpg?v=1551242012420" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy A7 2018 - 128GB" class="img-responsive center-block" />
                              </div>
                              <h3>Samsung Galaxy A7 2018 - 128GB</h3>
                              <div class="price">
                                 <strong>7.990.000₫</strong>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a href="san-pham-moi" title="Xem tất cả Điện thoại" class="hidden-lg hidden-md mobile-viewmore">Xem tất cả Điện thoại</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="awe-section-4">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section_product clearfix">
                     <div class="section-head clearfix">
                        <h2 class="title_blog">Điện Thoại Phổ Thông</h2>
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
                              <a href="/samsung-galaxy-s10e" title="Samsung Galaxy S10e"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636863622278818137-ss-galaxy-s10e-den-1.png?v=1552138222357" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy S10e" class="img-responsive center-block" />
                                 <label class="per">Giảm  6% </label>
                              </div>
                              <h3>Samsung Galaxy S10e</h3>
                              <div class="price">
                                 <strong>15.990.000₫</strong>
                                 <span>17.000.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-a9-2018" title="Samsung Galaxy A9 2018"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636776104541101822-galaxy-a7-blue-5.png?v=1551252657427" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy A9 2018" class="img-responsive center-block" />
                                 <label class="per">Giảm  16% </label>
                              </div>
                              <h3>Samsung Galaxy A9 2018</h3>
                              <div class="price">
                                 <strong>10.490.000₫</strong>
                                 <span>12.500.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-a7-2018" title="Samsung Galaxy A7 (2018)"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636746958719163577-a7-2018-blue-1.png?v=1551252578530" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy A7 (2018)" class="img-responsive center-block" />
                                 <label class="per">Giảm  7% </label>
                              </div>
                              <h3>Samsung Galaxy A7 (2018)</h3>
                              <div class="price">
                                 <strong>6.990.000₫</strong>
                                 <span>7.500.000₫</span>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/oppo-a3s-16gb" title="Oppo A3s 16GB"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636688079458645221-oppoa3s-tim-1.jpg?v=1551252470783" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Oppo A3s 16GB" class="img-responsive center-block" />
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
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636668977169527052-samsung-j8-tim-1.jpg?v=1551252361210" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy J8" class="img-responsive center-block" />
                              </div>
                              <h3>Samsung Galaxy J8</h3>
                              <div class="price">
                                 <strong>4.970.000₫</strong>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-s9" title="Samsung Galaxy S9"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636552317043233179-1.jpg?v=1551242342070" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy S9" class="img-responsive center-block" />
                              </div>
                              <h3>Samsung Galaxy S9</h3>
                              <div class="price">
                                 <strong>19.990.000₫</strong>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/nokia-6-1-plus" title="Nokia 6.1 Plus"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636737264632784078-nokia6plus-den-1.jpg?v=1551242185720" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Nokia 6.1 Plus" class="img-responsive center-block" />
                              </div>
                              <h3>Nokia 6.1 Plus</h3>
                              <div class="price">
                                 <strong>5.990.000₫</strong>
                              </div>
                           </div>
                        </div>
                        <div class="item-border col-md-15 col-sm-4 col-xs-6 no-padding">
                           <div class="news-item-products">
                              <a href="/samsung-galaxy-a7-2018-128gb" title="Samsung Galaxy A7 2018 - 128GB"></a>
                              <div class="relative fix-images">
                                 <img data-src="https://bizweb.dktcdn.net/thumb/medium/100/348/133/products/636749648129210031-a7-2018-den-1.jpg?v=1551242012420" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="  alt="Samsung Galaxy A7 2018 - 128GB" class="img-responsive center-block" />
                              </div>
                              <h3>Samsung Galaxy A7 2018 - 128GB</h3>
                              <div class="price">
                                 <strong>7.990.000₫</strong>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a href="san-pham-moi" title="Xem tất cả Tablet" class="hidden-lg hidden-md mobile-viewmore">Xem tất cả Tablet</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- footer -->
      <footer class="footer ">
         <div class="site-footer">
            <div class="container">
               <div class="footer-inner">
                  <div class="row bottom-footer">
                     <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-payment">
                           <h3><span>Phương thức thanh toán</span></h3>
                           <ul class="list-menu clearfix">
                              <li class="item">
                                 <img src="https://bizweb.dktcdn.net/100/348/133/themes/709285/assets/payment_2.png?1559638811340" alt="Phương thức thanh toán" />
                              </li>
                              <li class="item">
                                 <img src="https://bizweb.dktcdn.net/100/348/133/themes/709285/assets/payment_3.png?1559638811340" alt="Phương thức thanh toán" />
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-social">
                           <h3><span>Kết nối với chúng tôi</span></h3>
                           <ul class="list-menu list-inline">
                              <li class="twitter">
                                 <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve" width="15px" height="15px">
                                       <g>
                                          <path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411    c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513    c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101    c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104    c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194    c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485    c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z" data-original="#010002" class="active-path" data-old_color="#010002" fill="#FFFFFF"/>
                                       </g>
                                    </svg>
                                 </a>
                              </li>
                              <li class="facebook">
                                 <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 430.113 430.114" style="enable-background:new 0 0 430.113 430.114;" xml:space="preserve">
                                       <path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805   c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354   c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                    </svg>
                                 </a>
                              </li>
                              <li class="pinterest">
                                 <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 310.05 310.05" style="enable-background:new 0 0 310.05 310.05;" xml:space="preserve" width="15px" height="15px">
                                       <path id="XMLID_799_" d="M245.265,31.772C223.923,11.284,194.388,0,162.101,0c-49.32,0-79.654,20.217-96.416,37.176   c-20.658,20.9-32.504,48.651-32.504,76.139c0,34.513,14.436,61.003,38.611,70.858c1.623,0.665,3.256,1,4.857,1   c5.1,0,9.141-3.337,10.541-8.69c0.816-3.071,2.707-10.647,3.529-13.936c1.76-6.495,0.338-9.619-3.5-14.142   c-6.992-8.273-10.248-18.056-10.248-30.788c0-37.818,28.16-78.011,80.352-78.011c41.412,0,67.137,23.537,67.137,61.425   c0,23.909-5.15,46.051-14.504,62.35c-6.5,11.325-17.93,24.825-35.477,24.825c-7.588,0-14.404-3.117-18.705-8.551   c-4.063-5.137-5.402-11.773-3.768-18.689c1.846-7.814,4.363-15.965,6.799-23.845c4.443-14.392,8.643-27.985,8.643-38.83   c0-18.55-11.404-31.014-28.375-31.014c-21.568,0-38.465,21.906-38.465,49.871c0,13.715,3.645,23.973,5.295,27.912   c-2.717,11.512-18.865,79.953-21.928,92.859c-1.771,7.534-12.44,67.039,5.219,71.784c19.841,5.331,37.576-52.623,39.381-59.172   c1.463-5.326,6.582-25.465,9.719-37.845c9.578,9.226,25,15.463,40.006,15.463c28.289,0,53.73-12.73,71.637-35.843   c17.367-22.418,26.932-53.664,26.932-87.978C276.869,77.502,265.349,51.056,245.265,31.772z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                    </svg>
                                 </a>
                              </li>
                              <li class="google">
                                 <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 491.858 491.858" style="enable-background:new 0 0 491.858 491.858;" xml:space="preserve" width="15px" height="15px" class="">
                                       <path d="M377.472,224.957H201.319v58.718H308.79c-16.032,51.048-63.714,88.077-120.055,88.077     c-69.492,0-125.823-56.335-125.823-125.824c0-69.492,56.333-125.823,125.823-125.823c34.994,0,66.645,14.289,89.452,37.346     l42.622-46.328c-34.04-33.355-80.65-53.929-132.074-53.929C84.5,57.193,0,141.693,0,245.928s84.5,188.737,188.736,188.737     c91.307,0,171.248-64.844,188.737-150.989v-58.718L377.472,224.957L377.472,224.957z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                       <polygon points="491.858,224.857 455.827,224.857 455.827,188.826 424.941,188.826 424.941,224.857 388.91,224.857      388.91,255.74 424.941,255.74 424.941,291.772 455.827,291.772 455.827,255.74 491.858,255.74    " data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                    </svg>
                                 </a>
                              </li>
                              <li class="instagram">
                                 <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15px" height="15px">
                                       <path d="m75 512h362c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                       <path d="m256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                       <path d="m406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                    </svg>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="footer-widget footer-subcrible">
                           <h3><span>Đăng ký nhận tin</span></h3>
                           <p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
                           <form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                              <div class="input-group">
                                 <input type="email" class="form-control" value="" placeholder="Email của bạn" name="EMAIL" id="mail">
                                 <span class="input-group-btn">
                                 <button class="btn btn-default" name="subscribe" id="subscribe" type="buton">Đăng ký</button>
                                 </span>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright clearfix">
            <div class="container">
               <div class="inner clearfix">
                  <div class="row">
                     <div class="col-sm-12 text-center">
                        <span>@ 2020 TTMobile  <span class="s480-f">
                     </div>
                  </div>
               </div>
               <div class="back-to-top"><i class="fa fa-arrow-circle-up"></i></div>
            </div>
         </div>
      </footer>
      <!-- endfooter -->
    
      <!-- mobile -->
      <div id="myModal" class="modal fade" role="dialog"></div>
      <script src="users/js/appear.js" type="text/javascript"></script>
      <script src="users/js/cs.script.js" type="text/javascript"></script>
      <script src="users/js/main.js" type="text/javascript"></script>				
      <div class="backdrop__body-backdrop___1rvky"></div>
      <div class="mobile-main-menu">
         <div class="la-scroll-fix-infor-user">
            <div class="la-nav-menu-items">
               <div class="la-title-nav-items"><strong>Danh mục</strong></div>
               <ul class="la-nav-list-items">
                  <li class="ng-scope"><a href="#" title="Trang chủ">Trang chủ</a></li>
                  <li class="ng-scope"><a href="#" title="Giới thiệu">Giới thiệu</a></li>
                  <li class="ng-scope ng-has-child1">
                     <a href="product.html" title="Sản phẩm">Sản phẩm <i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                     <ul class="ul-has-child1">
                        <li class="ng-scope ng-has-child2">
                           <a href="#" title="Điện thoại">Điện thoại <i class="fa fa-plus fa2" aria-hidden="true"></i></a>
                           <ul class="ul-has-child2">
                              <li class="ng-scope"><a href="#" title="Samsung">Samsung</a></li>
                              <li class="ng-scope"><a href="#" title="Apple">Apple</a></li>
                              <li class="ng-scope"><a href="#" title="Sony">Sony</a></li>
                              <li class="ng-scope"><a href="#" title="Oppo">Oppo</a></li>
                              <li class="ng-scope"><a href="#" title="Huawei">Huawei</a></li>
                              <li class="ng-scope"><a href="#" title="Xiaomi">Xiaomi</a></li>
                              <li class="ng-scope"><a href="#" title="Vivo">Vivo</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
            
                  <li class="ng-scope"><a href="#" title="Liên hệ">Liên hệ</a></li>
               </ul>
            </div>
         </div>
         <ul class="mobile-support">
            <li>
               <div class="drawer-text-support">HỖ TRỢ</div>
            </li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> HOTLINE: <a href="#" title="0842969667">0842969667</a></li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL: <a href="#" title="lamtruongxxy@gmail.com">lamtruongxxy@gmail.com</a></li>
         </ul>
      </div>
      <div id="menu-overlay" class=""></div>
      <!-- endmobile -->
   </body>
</html>