<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="{{ route('admin-dashboard') }}">
                        <i class="la la-dashboard"></i>Dashboard</a>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('san-pham.danh-sach') }}">
                        <!-- <i class="la la-dashboard"></i>San pham <div class="arrow-down"></div></a> -->
                        <i class="la la-list-ul"></i>Sản Phẩm <div class="arrow-down"></div></a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('san-pham.danh-sach') }}">Danh sách sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{ route('loai-san-pham.danh-sach') }}">Loại sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{ route('thong-so.danh-sach') }}">Thông số</a>
                        </li>
                        <!-- <li>
                            <a href="{{ route('hinh-anh.danh-sach') }}">Hình ảnh</a>
                        </li> -->
                        <!-- {{-- <li><a href="{{ route('nha-san-xuat.danh-sach') }}">Nhà sản xuất</a></li> --}} -->
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('nha-san-xuat.danh-sach') }}"> <i class="la la-briefcase"></i>Nhà Sản Xuất<div class="arrow-down"></div></a>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ route('nha-san-xuat.create') }}">Thêm Nhà Sản Xuất</a>
                                </li>
                                <li>
                                    <a href="{{ route('nha-san-xuat.danh-sach') }}">Danh Sách Nhà Sản Xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('don-hang.danh-sach') }}">
                        <i class="la la-cube"></i>Đơn Hàng<div class="arrow-down"></div></a>
                    <ul class="submenu">
                        <!-- <li>
                            <a href="#">Thêm Đơn Hàng</a>
                        </li> -->
                        <li>
                            <a href="{{ route('don-hang.danh-sach') }}">Danh Sách Đơn Hàng</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('khach-hang.danh-sach') }}"> <i class="la la-user"></i>Khách Hàng <div class="arrow-down"></div></a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('khach-hang.create') }}">Thêm Khách Hàng</a>
                        </li>
                        <li>
                            <a href="{{ route('khach-hang.danh-sach') }}">Danh Sách Khách Hàng</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('binh-luan.danh-sach') }}"> <i class="la la-comments"></i>Quản Lý Bình Luận</a>
                </li>
            </ul>
            <!-- End navigation menu -->
            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>