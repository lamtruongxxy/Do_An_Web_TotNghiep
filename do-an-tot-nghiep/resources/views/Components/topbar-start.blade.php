<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown notification-list">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>
            @auth
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <form action="{{ route('admin-danh-sach') }}">
                        <button type="submit" class="btn btn-danger waves-effect waves-light" @if (Auth()->user()->trang_thai != 1) {{ 'hidden' }} @endif >
                            <span class="btn-label">
                                <i class="fas fa-user-cog"></i>
                            </span>All admin
                        </button>
                    </form>
                </a>
            </li>
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                    <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        {{ Auth()->user()->ho_ten }}
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                    @endauth
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            Welcome !
                        </h5>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('admin-dang-xuat') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Đăng xuất</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{ route('admin-dashboard') }}" class="logo text-center">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logoadmin-dark.png') }}" alt="" height="60">
                    <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">X</span> -->
                    <img src="{{ asset('assets/images/logoadmin-sm.png') }}" alt="" height="28">
                </span>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>