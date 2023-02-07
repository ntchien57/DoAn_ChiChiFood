<!doctype html>
<html lang="vi">

@include('guest.layout.head')

<body>

    @include('guest.layout.modal')

    <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="Bạn đang tìm gì?"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div>
    <div class="as-menu-wrapper">
        <div class="as-menu-area text-center"><button class="as-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="{{ route('home') }}"><img
                        src="{{ asset('/templates/guest/assets/img/logochichi.svg') }}" alt="ChiChiFood"></a>
            </div>
            <div class="as-mobile-menu">
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li><a href="javascript:;">Giới thiệu</a></li>
                    <li class="menu-item-has-children"><a href="javascript:;">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">Sủi cảo</a></li>
                            <li><a href="javascript:;">Dồi sụn</a></li>
                            <li><a href="javascript:;">Nem chua rán</a></li>
                            <li><a href="javascript:;">Khác</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Tin tức</a>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:;">Góc ẩm thực</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">Công thức làm bánh</a></li>
                            <li><a href="javascript:;">Món ngon dễ làm</a></li>
                            <li><a href="javascript:;">Đặc sản thế giới</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="as-header header-layout1">
        <div class="header-top">
            <div class="container as-container">
                <div class="header-top-inner">
                    <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                        <div class="col-auto d-none d-md-block">
                            <p class="header-notice">Chào mừng đến với ChiChiFood.com</p>
                        </div>
                        <div class="col-auto">
                            @if (Session::get('check'))
                                <div id="login-success" class="">
                                    <div class="d-flex">
                                        <div class="as-social">
                                            <a href="https://www.facebook.com/profile.php?id=100087666656874"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="javascript:;"><svg width="13px"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 32">
                                                    <path
                                                        d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                                    </path>
                                                </svg></a>
                                        </div>
                                        <div class="dropdown">
                                            <p style="margin: 0" class="dropdown-toggle" href="#" role=""
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="pl-4 pr-2 name-customer">{{ Auth::user()->username }}</span>
                                            </p>

                                            <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Đơn mua</a>
                                                <a type="" data-toggle="modal" data-target="#changePasswordModal"
                                                    href="javascript:;" class="dropdown-item link-changepassword"
                                                    href="#">Đổi mật khẩu</a>
                                                <a class="dropdown-item" href="/logout">Đăng xuất</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div id="login-normal" class="as-social">
                                    <a href="https://www.facebook.com/profile.php?id=100087666656874"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="javascript:;"><svg width="13px" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 32">
                                            <path
                                                d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                            </path>
                                        </svg></a>
                                    <a type="" data-toggle="modal" data-target="#loginModal"
                                        href="javascript:;"><i class="far fa-user"></i></a>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container as-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-auto">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="logo-style1"><a href="{{ route('home') }}"><img width="130px"
                                        src="{{ asset('/templates/guest/assets/img/logochichi.svg') }}"
                                        alt="ChiChiFood"></a></div>
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                    <li><a href="javascript:;">Giới thiệu</a></li>
                                    <li class="menu-item-has-children"><a href="javascript:;">Sản phẩm</a>
                                        <ul class="sub-menu">
                                            <li><a href="javascript:;">Sủi cảo</a></li>
                                            <li><a href="javascript:;">Dồi sụn</a></li>
                                            <li><a href="javascript:;">Nem chua rán</a></li>
                                            <li><a href="javascript:;">Khác</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Tin tức</a></li>
                                    <li class="menu-item-has-children"><a href="javascript:;">Góc ẩm thực</a>
                                        <ul class="sub-menu">
                                            <li><a href="javascript:;">Công thức làm bánh</a></li>
                                            <li><a href="javascript:;">Món ngon dễ làm</a></li>
                                            <li><a href="javascript:;">Đặc sản thế giới</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Liên hệ</a></li>
                                </ul>
                            </nav><button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="icon-btn searchBoxToggler">
                                <i class="far fa-search"></i>
                            </button>
                            <a href="javascript:;">
                                <div class="header-button"><button type="button" class="icon-btn"><i
                                            class="far fa-shopping-cart"></i> <span class="badge">5</span></button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
