<!doctype html>
<html lang="vi">
@include('guest.layout.head')

<body>
    @include('guest.layout.modal')

    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white">
            <div class="row">
                <div class="col-lg-7">
                    <div class="product-thumb-area">
                        <div class="product-thumb-tab" data-asnavfor=".product-big-img">
                            <div class="tab-btn active"><img src="/templates/guest/assets/img/menu/menu_thumb_1_1.png"
                                    alt="Product Thumb"></div>
                            <div class="tab-btn"><img src="/templates/guest/assets/img/menu/menu_thumb_1_2.png"
                                    alt="Product Thumb">
                            </div>
                            <div class="tab-btn"><img src="/templates/guest/assets/img/menu/menu_thumb_1_3.png"
                                    alt="Product Thumb">
                            </div>
                            <div class="tab-btn"><img src="/templates/guest/assets/img/menu/menu_thumb_1_4.png"
                                    alt="Product Thumb">
                            </div>
                            <div class="tab-btn"><img src="/templates/guest/assets/img/menu/menu_thumb_1_5.png"
                                    alt="Product Thumb">
                            </div>
                        </div>
                        <div class="product-big-img as-carousel" data-slide-show="1" data-md-slide-show="1"
                            data-fade="true">
                            <div class="col-auto">
                                <div class="img"><img src="/templates/guest/assets/img/menu/product_details_1_1.png"
                                        alt="Product Image">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="img"><img src="/templates/guest/assets/img/menu/product_details_1_2.png"
                                        alt="Product Image">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="img"><img src="/templates/guest/assets/img/menu/product_details_1_3.png"
                                        alt="Product Image">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="img"><img src="/templates/guest/assets/img/menu/product_details_1_4.png"
                                        alt="Product Image">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="img"><img src="/templates/guest/assets/img/menu/product_details_1_5.png"
                                        alt="Product Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="product-about">
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on
                                    <span class="rating">1</span> customer rating</span></div><a
                                href="shop-details.html" class="woocommerce-review-link">(<span class="count">3</span>
                                customer reviews)</a>
                        </div>
                        <h2 class="product-title">Chicken Masala</h2>
                        <p class="price">$180.85<del>$350.99</del></p>
                        <p class="text">There are many variations of passages of lorem Ipum available theresu anything
                            embarrassing It’s a long established fact that a reader will be looking at its layout.</p>
                        <div class="actions">
                            <div class="quantity"><input type="number" class="qty-input" step="1" min="1"
                                    max="100" name="quantity" value="1" title="Qty"> <button
                                    class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button> <button
                                    class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button></div>
                            <button class="as-btn">Add to Cart</button> <a class="icon-btn" href="wishlist.html"><i
                                    class="fal fa-heart"></i></a>
                        </div>
                        <div class="product_meta"><span class="sku_wrapper">SKU: <span
                                    class="sku">C2546</span></span>
                            <span class="posted_in">Category: <a href="shop.html" rel="tag">Chicken
                                    Pizza</a></span>
                            <span>Tags: <a href="shop.html">Fast Food</a><a href="shop.html">Grill</a></span>
                        </div>
                        <div class="share">
                            <p class="share-title"><i class="fa-solid fa-share"></i> Share</p>
                            <div class="as-social">
                                <a target="_blank" href="https://www.facebook.com/amthucchichifood">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a target="_blank" href="javascript:;">
                                    <svg width="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 32">
                                        <path
                                            d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                        </path>
                                    </svg>
                                </a>
                                <a type="" data-toggle="modal" data-target="#loginModal"
                                    href="javascript:;"><i class="far fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>


    <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="Bạn đang tìm gì?"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div>
    <div class="as-menu-wrapper">
        <div class="as-menu-area text-center"><button class="as-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="javascript:;"><img src="/templates/guest/assets/img/logochichi.svg"
                        alt="chichifood"></a>
            </div>
            <div class="as-mobile-menu">
                <ul>
                    <li><a href="javascript:;">Trang chủ</a>
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
                    @if (!Session::get('check'))
                        <li><a href="javascript:;">Liên hệ</a></li>
                    @else
                        <li><a href="javascript:;">Liên hệ</a></li>
                        <li>
                            <div class="d-flex pt-2" >
                                <div style="width:50px" class="pr-2">
                                    <img width="80%" class="rounded-circle"
                                    src="https://avatar-nct.nixcdn.com/avatar/2022/08/23/b/8/3/d/1661244177038.jpg"><br>
                                <img width="60%"
                                    src="{{ asset('templates/guest/assets/img/icon/icon-vip.jpg') }}">
                                </div>

                                <div style="line-height: 48px">
                                    {{ Auth::user()->username }}
                                </div>
                            </div>

                        </li>

                        <li><a href="{{ route('guest.logout') }}">Đăng xuất</a></li>
                    @endif
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header class="as-header header-layout2">
        <div class="header-shape1"></div>
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <p class="header-info"><i class="fas fa-map-marker-alt"></i> Triều Khúc - Thanh Xuân - Hà Nội
                        </p>
                        <p class="header-info"><i class="fas fa-phone"></i> <a href="tel:0961659091">037-679-3817</a>
                        </p>
                        <p class="header-info"><i class="fas fa-envelope"></i> <a
                                href="mailto:ntchien5701@gmail.com">ntchien5701@gmail.com</a></p>
                    </div>
                    <div class="col-auto">
                        @if (Session::get('check'))
                            <div id="login-success" class="">
                                <div class="d-flex">
                                    <div class="as-social">
                                        <a href="https://www.facebook.com/profile.php?id=100087666656874"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="javascript:;"><svg width="13px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 32">
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
                                            <a class="dropdown-item" href="{{ route('guest.logout') }}">Đăng xuất</a>
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
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="menu-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto d-none d-xl-block"><button type="button"
                                    class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button></div>
                            <div class="col-auto d-none d-lg-block">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="javascript:;">Trang chủ</a></li>
                                        <li><a href="javascript:;">Giới thiệu</a></li>
                                        <li class="menu-item-has-children"><a href="javascript:;">Sản phẩm</a>
                                            <ul class="sub-menu">
                                                <li><a href="javascript:;">Sủi cảo</a></li>
                                                <li><a href="javascript:;">Dồi sụn</a></li>
                                                <li><a href="javascript:;">Nem chua rán</a></li>
                                                <li><a href="javascript:;">Khác</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto">
                                <div class="header-logo"><a href="javascript:;"><img width="120px"
                                            src="/templates/guest/assets/img/logochichi.svg" alt="ChiChiFood"></a>
                                </div>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <nav class="main-menu">
                                    <ul>
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
                                </nav>
                            </div>
                            <div class="col-auto">
                                <a href="javascript:;">
                                    <div class="header-button"><button type="button" class="icon-btn"><i
                                                class="far fa-shopping-cart"></i> <span
                                                class="badge">5</span></button>
                                    </div>
                                </a>
                            </div>
                            @if (Session::get('check'))

                            @else
                                <div class="col-auto pl-0">
                                    <a class="d-inline-block d-lg-none text-dark" type="" data-toggle="modal"
                                        data-target="#loginModal" href="javascript:;"><i class="far fa-user"></i></a>
                                </div>
                            @endif
                            <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="d-none d-md-block">
        <div id="slider" class="ls-wp-container fitvidsignore hero-2 as-hero-carousel"
            data-bg-src="/templates/guest/assets/img/hero/hero_bg_2_1.jpg"
            style="width:1920px;height:1000px;margin:0 auto;margin-bottom: 0px;">
            <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;"><img width="153"
                    height="149" src="/templates/guest/assets/img/hero/hero_shape_2_2.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:500px; left:175px;"
                    data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
                <img width="190" height="118" src="/templates/guest/assets/img/hero/hero_shape_7.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:853px; left:31px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
                <img width="200" height="173" src="/templates/guest/assets/img/hero/hero_shape_8.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:784px; left:592px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="178" height="76" src="/templates/guest/assets/img/hero/hero_shape_2_1.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:859px; left:286px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:50deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="837" height="813" src="/templates/guest/assets/img/hero/hero_img_2_1.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:187px; left:914px;"
                    data-ls="offsetxin:500; durationin:600; delayin:100; easingin:easeOutBack; rotatein:80; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:900; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:80px; top:477px; left:340px; font-size:70px; color:#010f1c; white-space:normal; width: 30%;"
                    class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Welcome To</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:80px; top:552px; left:340px; font-size:70px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood</h1><img width="2" height="100"
                    src="/templates/guest/assets/img/hero/dot_line.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:135px; top:349px;"
                    data-ls="static:forever; position:fixed;"> <img width="2" height="100"
                    src="/templates/guest/assets/img/hero/dot_line_2.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:135px; top:718px;"
                    data-ls="static:forever; position:fixed;"> <a style=""
                    class="ls-l ls-hide-tablet ls-hide-phone" href="reservation.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:14px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:162px; left:344px; top:681px; text-transform:uppercase; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style=" display: none;" class="ls-l ls-hide-tablet ls-hide-phone" href="shop.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:14px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:162px; left:530px; top:681px; text-transform:uppercase; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <img width="837" height="813" src="/templates/guest/assets/img/hero/hero_img_2_1.png"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:187px; left:989px; width:838px; height:813px;"
                    data-ls="offsetxin:500; durationin:600; delayin:100; easingin:easeOutBack; rotatein:80; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:900; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:110px; top:467px; left:72px; font-size:100px; color:#010f1c; white-space:normal;"
                    class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Welcome To</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:110px; top:574px; left:72px; font-size:100px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood 2</h1><a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="javascript:;"
                    target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:34px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:340px; left:72px; top:733px; text-transform:uppercase; line-height:34px; padding-top:32px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:30px;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="shop.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:34px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:320px; left:458px; top:733px; text-transform:uppercase; line-height:34px; padding-bottom:30px; padding-top:32px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="#1" target="_self"
                    data-ls="static:forever; position:fixed;"><img width="70" height="70"
                        src="/templates/guest/assets/img/hero/hero_thumb_2_1.png" class="ls-img-layer" alt=""
                        decoding="async"
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:468px;">
                </a><a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="#2" target="_self"
                    data-ls="static:forever; position:fixed;"><img width="70" height="70"
                        src="/templates/guest/assets/img/hero/hero_thumb_2_2.png" class="ls-img-layer" alt=""
                        decoding="async"
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:548px;">
                </a><a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="#3" target="_self"
                    data-ls="static:forever; position:fixed;"><img width="70" height="70"
                        src="/templates/guest/assets/img/hero/hero_thumb_2_3.png" class="ls-img-layer" alt=""
                        decoding="async"
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:628px;">
                </a><img width="70" height="70"
                    src="/templates/guest/assets/img/hero/hero_thumb_2_1_active.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:468px;"
                    data-ls="position:fixed;">
            </div>
            <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;"><img width="153"
                    height="149" src="/templates/guest/assets/img/hero/hero_shape_2_2.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:500px; left:175px;"
                    data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
                <img width="190" height="118" src="/templates/guest/assets/img/hero/hero_shape_7.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:853px; left:31px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
                <img width="200" height="173" src="/templates/guest/assets/img/hero/hero_shape_8.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:784px; left:592px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="146" height="63" src="/templates/guest/assets/img/hero/hero_shape_2_5.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:859px; left:286px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:50deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="814" height="820" src="/templates/guest/assets/img/hero/hero_img_2_2.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:182px; left:974px;"
                    data-ls="offsetxin:500; durationin:600; delayin:100; easingin:easeOutBack; rotatein:80; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:900; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:80px; top:477px; left:340px; font-size:70px; color:#010f1c; white-space:normal; width: 400px;"
                    class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Sủi Cảo</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:80px; top:552px; left:340px; font-size:70px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood</h1><img width="2" height="100"
                    src="/templates/guest/assets/img/hero/dot_line.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:135px; top:349px;"
                    data-ls="static:forever; position:fixed;"> <img width="2" height="100"
                    src="/templates/guest/assets/img/hero/dot_line_2.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:135px; top:718px;"
                    data-ls="static:forever; position:fixed;"> <a style=""
                    class="ls-l ls-hide-tablet ls-hide-phone" href="reservation.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:14px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:162px; left:344px; top:681px; text-transform:uppercase; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="shop.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:14px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:162px; left:530px; top:681px; text-transform:uppercase; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <img width="814" height="820" src="/templates/guest/assets/img/hero/hero_img_2_2.png"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:187px; left:989px; width:838px; height:813px;"
                    data-ls="offsetxin:500; durationin:600; delayin:100; easingin:easeOutBack; rotatein:80; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:900; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:110px; top:467px; left:72px; font-size:100px; color:#010f1c; white-space:normal;"
                    class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Dồi Sụn</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:110px; top:574px; left:72px; font-size:100px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood 2</h1><a style="" class="ls-l ls-hide-desktop ls-hide-phone"
                    href="reservation.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:34px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:340px; left:72px; top:733px; text-transform:uppercase; line-height:34px; padding-top:32px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:30px;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="shop.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:34px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:320px; left:458px; top:733px; text-transform:uppercase; line-height:34px; padding-bottom:30px; padding-top:32px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <img width="70" height="70" src="/templates/guest/assets/img/hero/hero_thumb_2_2_active.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:548px; z-index:999;"
                    data-ls="position:fixed;">
            </div>
            <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;"><img width="153"
                    height="149" src="/templates/guest/assets/img/hero/hero_shape_2_2.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:500px; left:175px;"
                    data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
                <img width="190" height="118" src="/templates/guest/assets/img/hero/hero_shape_7.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:853px; left:31px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
                <img width="200" height="173" src="/templates/guest/assets/img/hero/hero_shape_8.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:784px; left:592px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="135" height="96" src="/templates/guest/assets/img/hero/hero_shape_2_6.png"
                    class="ls-l ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:859px; left:286px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:50deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="822" height="808" src="/templates/guest/assets/img/hero/hero_img_2_3.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:182px; left:1001px;"
                    data-ls="offsetxin:500; durationin:600; delayin:100; easingin:easeOutBack; rotatein:80; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:900; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:80px; top:477px; left:340px; font-size:70px; color:#010f1c; white-space:normal; width: 400px;"
                    class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Dồi Sụn</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:80px; top:552px; left:340px; font-size:70px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood</h1><img width="2" height="100"
                    src="/templates/guest/assets/img/hero/dot_line.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:135px; top:349px;"
                    data-ls="static:forever; position:fixed;"> <img width="2" height="100"
                    src="/templates/guest/assets/img/hero/dot_line_2.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:135px; top:718px;"
                    data-ls="static:forever; position:fixed;"> <a style=""
                    class="ls-l ls-hide-tablet ls-hide-phone" href="reservation.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:14px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:162px; left:344px; top:681px; text-transform:uppercase; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style="" class="ls-l ls-hide-tablet ls-hide-phone" href="shop.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:14px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:162px; left:530px; top:681px; text-transform:uppercase; line-height:14px; padding-bottom:20px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <img width="822" height="808" src="/templates/guest/assets/img/hero/hero_img_2_3.png"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:187px; left:1015px; width:838px; height:813px;"
                    data-ls="offsetxin:500; durationin:600; delayin:100; easingin:easeOutBack; rotatein:80; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:800; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:110px; top:467px; left:72px; font-size:100px; color:#010f1c; white-space:normal;"
                    class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Pizzer</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:110px; top:574px; left:72px; font-size:100px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Restaurants</h1><a style="" class="ls-l ls-hide-desktop ls-hide-phone"
                    href="reservation.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:34px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:340px; left:72px; top:733px; text-transform:uppercase; line-height:34px; padding-top:32px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:30px;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style="" class="ls-l ls-hide-desktop ls-hide-phone" href="shop.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:34px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:320px; left:458px; top:733px; text-transform:uppercase; line-height:34px; padding-bottom:30px; padding-top:32px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <img width="70" height="70" src="/templates/guest/assets/img/hero/hero_thumb_2_3_active.png"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-img-layer" alt="" decoding="async"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:628px; z-index:999;"
                    data-ls="position:fixed;">
            </div>
        </div>
    </div>
    <div class="d-block d-md-none">
        <div class="ls-wp-container fitvidsignore hero-2 as-hero-carousel phone"
            style="width:500px;height:660px;margin:0 auto;margin-bottom: 0px;">
            <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;"><img width="500"
                    height="660" src="/templates/guest/assets/img/hero/hero_bg_2_1_phone.jpg" class="ls-bg"
                    alt="hero img">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:900; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:54px; top:313px; left:15px; font-size:44px; color:#010f1c; white-space:normal;"
                    class="ls-l hero-title ls-text-layer"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Welcome To</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:55px; top:367px; left:15px; font-size:44px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-text-layer"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood1</h1><a style="" class="ls-l" href="reservation.html" target="_self"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:20px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:198px; left:18px; top:465px; text-transform:uppercase; line-height:20px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:22px; padding-top:22px;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style="" class="ls-l" href="shop.html" target="_self"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:19px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:178px; left:234px; top:465px; text-transform:uppercase; line-height:19px; padding-bottom:22px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <img width="190" height="118" src="/templates/guest/assets/img/hero/hero_shape_7.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:593px; left:11px; width:92px; height:57px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
                <img width="200" height="173" src="/templates/guest/assets/img/hero/hero_shape_8.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:554px; left:279px; width:65px; height:56px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="153" height="149" src="/templates/guest/assets/img/hero/hero_shape_2_2.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:194px; left:19px; width:56px; height:54px;"
                    data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
                <img width="178" height="76" src="/templates/guest/assets/img/hero/hero_shape_2_1.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:563px; left:145px; width:97px; height:42px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:50deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            </div>
            <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;"><img width="500"
                    height="660" src="/templates/guest/assets/img/hero/hero_bg_2_1_phone.jpg" class="ls-bg"
                    alt="hero img">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:900; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:54px; top:313px; left:15px; font-size:44px; color:#010f1c; white-space:normal;"
                    class="ls-l hero-title ls-text-layer"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Sủi Cảo</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:55px; top:367px; left:15px; font-size:44px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-text-layer"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood2</h1><a style="" class="ls-l" href="reservation.html" target="_self"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:20px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:198px; left:18px; top:465px; text-transform:uppercase; line-height:20px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:22px; padding-top:22px;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style="" class="ls-l" href="shop.html" target="_self"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:19px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:178px; left:234px; top:465px; text-transform:uppercase; line-height:19px; padding-bottom:22px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <img width="190" height="118" src="/templates/guest/assets/img/hero/hero_shape_7.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:593px; left:11px; width:92px; height:57px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
                <img width="200" height="173" src="/templates/guest/assets/img/hero/hero_shape_8.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:554px; left:279px; width:65px; height:56px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="153" height="149" src="/templates/guest/assets/img/hero/hero_shape_2_2.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:194px; left:19px; width:56px; height:54px;"
                    data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
                <img width="146" height="63" src="/templates/guest/assets/img/hero/hero_shape_2_5.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:563px; left:145px; width:97px; height:42px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:50deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            </div>
            <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnsscale:1.2;"><img width="500"
                    height="660" src="/templates/guest/assets/img/hero/hero_bg_2_1_phone.jpg" class="ls-bg"
                    alt="hero img">
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:800; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Nunito; line-height:54px; top:313px; left:15px; font-size:44px; color:#010f1c; white-space:normal;"
                    class="ls-l hero-title ls-text-layer"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:-150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    Dồi Sụn</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:55px; top:367px; left:15px; font-size:44px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-text-layer"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood2</h1><a style="" class="ls-l" href="reservation.html" target="_self"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:20px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:198px; left:18px; top:465px; text-transform:uppercase; line-height:20px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:22px; padding-top:22px;"
                        class="ls-button-layer">Đặt hàng ngay</ls-layer>
                </a>
                <!-- <a style="" class="ls-l" href="shop.html" target="_self"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:19px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:178px; left:234px; top:465px; text-transform:uppercase; line-height:19px; padding-bottom:22px; padding-top:22px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#ff9d2d;"
                        class="ls-button-layer">Xem menu</ls-layer>
                </a> -->
                <img width="190" height="118" src="/templates/guest/assets/img/hero/hero_shape_7.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:593px; left:11px; width:92px; height:57px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:60deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; rotation:00deg; position:fixed;">
                <img width="200" height="173" src="/templates/guest/assets/img/hero/hero_shape_8.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:554px; left:279px; width:65px; height:56px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:-90deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
                <img width="153" height="149" src="/templates/guest/assets/img/hero/hero_shape_2_2.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:194px; left:19px; width:56px; height:54px;"
                    data-ls="offsetxin:-300; durationin:1400; rotatein:80deg; durationout:1500; parallax:true; parallaxlevel:10; parallaxdurationmove:800; position:fixed;">
                <img width="135" height="96" src="/templates/guest/assets/img/hero/hero_shape_2_6.png"
                    class="ls-l ls-img-layer" alt="hero img"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:563px; left:145px; width:97px; height:42px;"
                    data-ls="offsetyin:200; durationin:1400; rotatein:50deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12; parallaxdurationmove:400; position:fixed;">
            </div>
        </div>
    </div>
    <div id="about-homect" class="space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 pe-xxl-5">
                    <div class="img-box2">
                        <div class="img1"><img src="/templates/guest/assets/img/normal/about_2_1.png"
                                alt="About"></div>
                        <div class="shape1"><img src="/templates/guest/assets/img/normal/about_2_2.png"
                                alt="About"></div>
                        <div class="discount_style1"
                            data-bg-src="/templates/guest/assets/img/shape/discount_bg_1.svg">
                            <h4 class="percentage">40 <span class="small-text">%<br><span
                                        class="text">Off</span></span>
                            </h4>
                        </div><a href="shop.html" class="order-btn"><span class="font-style text-theme">Đặt
                            </span>Ngay</a>
                    </div>
                </div>
                <div class="col-xl-5 space-top space-xl">
                    <div class="title-area mb-30"><span class="sub-title"><img class="icon"
                                src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> Giới
                            thiệu</span>
                        <h2 class="sec-title">Giới Thiệu Sản Phẩm <span
                                class="font-style text-theme">ChiChiFood</span>
                        </h2>
                    </div>
                    <p class="mt-n2 mb-20">Là thương hiệu chế biến thực phẩm sạch hàng đầu. Nơi đây chúng tôi không
                        chỉ cung cấp những món ăn tuyệt vời mà còn luôn luôn cố gắng mang đến hương vị trọn vẹn nhất
                        trong
                        các sản phẩm nổi bật của ChiChiFood như: Sủi cảo nhân thịt, sủi cảo nhân hải sản, dồi sụn, nem
                        chua rán.</p>
                    <p class="mb-4">Tất cả đều được gửi gắm trong các gói sản phẩm thiết kế đẹp mắt và ấn tượng.</p>
                    <div class="btn-wrap style1"><a href="about.html" class="as-btn">tìm hiểu thêm</a>
                        <div class="about-counter1">
                            <h3 class="counter-title"><span class="counter-number">20</span></h3>
                            <div class="media-body">
                                <p class="counter-info">NĂM KINH NGHIỆM</p>
                                <h5 class="counter-text">nghiên cứu</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup leaf jump" data-top="4%" data-left="5%"><img
                src="/templates/guest/assets/img/shape/chocolate_1.png" alt="shape"></div>
        <div class="shape-mockup leaf jump-reverse d-none d-xl-block" data-bottom="4%" data-right="5%"><img
                src="/templates/guest/assets/img/shape/pot_1.png" alt="shape"></div>
    </div>
    <section class="space z-index-common">
        <div class="bg-img shape_style1" data-bg-src="/templates/guest/assets/img/bg/feature_bg_1.png"></div>
        <div class="container z-index-common">
            <div class="title-area text-center"><span class="sub-title"><img class="icon"
                        src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> Nổi Bật</span>
                <h2 class="sec-title">Giá Trị Sản Phẩm <span class="font-style text-theme">ChiChiFood</span></h2>
                <p class="sec-text ms-auto me-auto">Các sản phẩm của ChiChiFood ra đời như là một sứ mệnh chịu
                    trách<br>
                    nhiệm mang đến lợi ích về thời gian, sự an toàn cho người tiêu dùng.</p>
            </div>
            <div class="feature-grid-wrap">
                <div class="feature-grid">
                    <div class="feature-grid_img"><img src="/templates/guest/assets/img/icon/clock.png"
                            alt="Food"></div>
                    <div>
                        <h3 class="feature-grid_title box-title">Tiết Kiệm Thời Gian</h3>
                        <p class="feature-grid_text">Với ưu điểm là các sản phẩm chế biến sẵn nên thời gian vào bếp sẽ
                            được rút ngắn rất nhiều. Giúp người nội trợ có thể dành nhiều thời gian cho các hoạt động
                            khác</p>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature-grid_img"><img src="/templates/guest/assets/img/icon/heart.png"
                            alt="Food"></div>
                    <div>
                        <h3 class="feature-grid_title box-title">An Toàn Sức Khỏe</h3>
                        <p class="feature-grid_text">Với việc đặt sức khỏe cộng đồng lên hàng đầu, các sản phẩm của
                            ChiChiFood luôn đảm bảo chất lượng cao và ưu tiên an toàn cho người sử dụng lên hàng đầu</p>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature-grid_img"><img src="/templates/guest/assets/img/icon/plate.png"
                            alt="Food"></div>
                    <div>
                        <h3 class="feature-grid_title box-title">Đầy Đủ Chất Dinh Dưỡng</h3>
                        <p class="feature-grid_text">Mặc dù các sản phẩm đều là chế biến sẵn nhưng với kinh nghiệm 20
                            năm trong ngành thực phẩm người tạo ra đã nghiên cứu làm sao để tạo ra sản phẩm cân bằng
                            dinh dưỡng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space counter-sec1" data-bg-src="/templates/guest/assets/img/bg/counter_bg_1.jpg"
        data-overlay="title" data-opacity="9">
        <div class="container z-index-common">
            <div class="row gy-40 justify-content-between">
                <div class="col-sm-6 col-xl-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="/templates/guest/assets/img/icon/counter_1_1.svg"
                                alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">50</span>k<span
                                    class="plus">
                                    tấn</span></h2>
                            <p class="counter-card_text">Sản Phẩm Bán Ra</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="/templates/guest/assets/img/icon/counter_1_2.svg"
                                alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">30</span><span
                                    class="plus">+</span></h2>
                            <p class="counter-card_text">Nhà Phân Phối</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="/templates/guest/assets/img/icon/counter_1_3.svg"
                                alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">2.4</span>k<span
                                    class="plus">+</span></h2>
                            <p class="counter-card_text">Khách Hàng</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="/templates/guest/assets/img/icon/counter_1_4.svg"
                                alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number">TOP <span class="counter-number">1</h2>
                            <p class="counter-card_text">An Toàn Thực Phẩm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img class="icon"
                        src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> Sản Phẩm</span>
                <h2 class="sec-title">Sản Phẩm Bán Chạy Của <span class="font-style text-theme">ChiChiFood</span></h2>
                <p class="sec-text ms-auto me-auto">Các sản phẩm tại ChiChiFood luôn được mọi người đón nhận và yêu<br>
                    thích vì sự an toàn chất lượng của sản phẩm</p>
                <div class="tab-menu1 filter-menu-active"><button data-filter="*" class="active" type="button">tất
                        cả</button> <button data-filter=".cat1" type="button">sủi cảo</button> <button
                        data-filter=".cat2" type="button">dồi sụn</button> <button data-filter=".cat3"
                        type="button">nem
                        chua rán</button> <button data-filter=".cat4" type="button">khác</button>
                </div>
            </div>
            <div class="row gy-40 filter-active">
                <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat1">
                    <div class="as-product product_style1">
                        <div class="product-img"><img src="/templates/guest/assets/img/menu/menu_1_1.png"
                                alt="Product Image"></div>
                        <div class="product-content"><a href="shop.html" class="category">Sủi cảo</a>
                            <div class="product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                        style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                            <h3 class="product-title"><a href="shop-details.html">Sủi Cảo ChiChi Nhân Thịt 1000G</a>
                            </h3><span class="price">75.000đ<del>100.000đ</del></span>
                            <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i
                                        class="fal fa-eye"></i></a> <a href="cart.html" class="icon-btn"><i
                                        class="fal fa-cart-plus"></i></a> <a href="wishlist.html" class="icon-btn"><i
                                        class="fal fa-heart"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat1">
                    <div class="as-product product_style1">
                        <div class="product-img"><img src="/templates/guest/assets/img/menu/menu_1_2.png"
                                alt="Product Image"></div>
                        <div class="product-content"><a href="shop.html" class="category">Sủi cảo</a>
                            <div class="product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                        style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                            <h3 class="product-title"><a href="shop-details.html">Sủi Cảo ChiChi Nhân Thịt 500G</a>
                            </h3>
                            <span class="price">39.000đ</span>
                            <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i
                                        class="fal fa-eye"></i></a> <a href="cart.html" class="icon-btn"><i
                                        class="fal fa-cart-plus"></i></a> <a href="wishlist.html"
                                    class="icon-btn"><i class="fal fa-heart"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat2">
                    <div class="as-product product_style1">
                        <div class="product-img"><img src="/templates/guest/assets/img/menu/menu_1_3.png"
                                alt="Product Image"></div>
                        <div class="product-content"><a href="shop.html" class="category">Dồi sụn</a>
                            <div class="product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                        style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                            <h3 class="product-title"><a href="shop-details.html">Dồi Sụn ChiChi 500G</a>
                            </h3><span class="price">45.000đ</span>
                            <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i
                                        class="fal fa-eye"></i></a> <a href="cart.html" class="icon-btn"><i
                                        class="fal fa-cart-plus"></i></a> <a href="wishlist.html"
                                    class="icon-btn"><i class="fal fa-heart"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat3">
                    <div class="as-product product_style1">
                        <div class="product-img"><img src="/templates/guest/assets/img/menu/menu_1_4.png"
                                alt="Product Image"></div>
                        <div class="product-content"><a href="shop.html" class="category">Nem chua</a>
                            <div class="product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                        style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                            <h3 class="product-title"><a href="shop-details.html">Nem Chua Rán ChiChi</a></h3><span
                                class="price">40.000đ</span>
                            <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i
                                        class="fal fa-eye"></i></a> <a href="cart.html" class="icon-btn"><i
                                        class="fal fa-cart-plus"></i></a> <a href="wishlist.html"
                                    class="icon-btn"><i class="fal fa-heart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5"><a href="shop.html" class="as-btn">xem thêm</a></div>
        </div>
        <div class="shape-mockup chili jump-reverse" data-top="0%" data-right="0"><img
                src="/templates/guest/assets/img/shape/red_chili.png" alt="shape"></div>
    </section>
    <div class="z-index-common">
        <div class="container">
            <div class="video-box1"><img src="/templates/guest/assets/img/normal/video_1.jpg" alt="video">
                <div class="video-content">
                    <h2 class="h4 text-white font-style">Xem Video</h2><a
                        href="https://www.youtube.com/watch?v=MPt18YUfzj8" class="play-btn popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="shape-mockup leaf jump-reverse d-none d-md-block" data-top="10%" data-left="2%"><img
                src="/templates/guest/assets/img/shape/chips_2.png" alt="shape"></div>
    </div>
    <section class="space-top">
        <div class="container">
            <div class="row space-extra">
                <div class="col-xl-5">
                    <div class="title-area text-center text-xl-start"><span class="sub-title"><img class="icon"
                                src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> Phản
                            Hồi</span>
                        <h2 class="sec-title">Khách Hàng Của <span class="font-style text-theme">ChiChiFood</span>
                        </h2>
                        <p class="sec-text ms-auto me-auto ms-xl-0">ChiChiFood luôn nhận được rất nhiều phản hồi của
                            khách hàng<br>về chất lượng sản phẩm</p>
                    </div>
                    <div class="testi-slide-wrap">
                        <div class="row slider-shadow as-carousel number-dots" data-slide-show="1"
                            data-lg-slide-show="2" data-md-slide-show="1" data-dots="true" data-xl-dots="true"
                            data-ml-dots="true" data-lg-dots="true" data-md-dots="true">
                            <div class="col-xl-4 col-lg-6">
                                <div class="testi-box">
                                    <div class="testi-box_icon"><img
                                            src="/templates/guest/assets/img/icon/quote_left.svg" alt="quote">
                                    </div>
                                    <p class="testi-box_text">“Mình rất thích các sản phẩm của ChiChiFood, đồ ăn chế
                                        biến sẵn đóng
                                        gói cẩn thận, dùng rất tiện và an tâm. Ngon và đảm bảo sức khỏe”</p>
                                    <div class="testi-box_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testi-box_profile">
                                        <div class="testi-box_avater"><img
                                                src="/templates/guest/assets/img/testimonial/testi_1_1.jpg"
                                                alt="Avater"></div>
                                        <div class="media-body">
                                            <h3 class="testi-box_name">Anh Hiếu</h3><span class="testi-box_desig">ĐÀ
                                                NẴNG</span>
                                        </div>
                                    </div>
                                    <div class="testi-box_img"><img
                                            src="/templates/guest/assets/img/testimonial/review_1_1.png"
                                            alt="Reveiw Image"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="testi-box">
                                    <div class="testi-box_icon"><img
                                            src="/templates/guest/assets/img/icon/quote_left.svg" alt="quote">
                                    </div>
                                    <p class="testi-box_text">“Sản phẩm chất lượng tốt, giá cả hợp lý, đa dạng món ăn,
                                        đảm bảo an toàn thực phẩm. Tư vấn nhiệt tình”</p>
                                    <div class="testi-box_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testi-box_profile">
                                        <div class="testi-box_avater"><img
                                                src="/templates/guest/assets/img/testimonial/testi_1_2.jpg"
                                                alt="Avater"></div>
                                        <div class="media-body">
                                            <h3 class="testi-box_name">Anh Bảo</h3><span class="testi-box_desig">HÀ
                                                NỘI</span>
                                        </div>
                                    </div>
                                    <div class="testi-box_img"><img
                                            src="/templates/guest/assets/img/testimonial/review_1_2.png"
                                            alt="Reveiw Image"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="testi-box">
                                    <div class="testi-box_icon"><img
                                            src="/templates/guest/assets/img/icon/quote_left.svg" alt="quote">
                                    </div>
                                    <p class="testi-box_text">“Một ngày thèm dồi sụn và nem chua rán mà lười ra cửa
                                        hàng
                                        mua. Mình
                                        lên mạng đặt đồ về chế biến nên biết đến ChiChiFood. Shop giao hàng rất nhanh,
                                        đóng gói cẩn thận, nói chung là ưng.”</p>
                                    <div class="testi-box_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testi-box_profile">
                                        <div class="testi-box_avater"><img
                                                src="/templates/guest/assets/img/testimonial/testi_1_3.jpg"
                                                alt="Avater"></div>
                                        <div class="media-body">
                                            <h3 class="testi-box_name">Chị Ngọc</h3><span class="testi-box_desig">TP
                                                HCM</span>
                                        </div>
                                    </div>
                                    <div class="testi-box_img"><img
                                            src="/templates/guest/assets/img/testimonial/review_1_3.png"
                                            alt="Reveiw Image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 d-none d-xl-block">
                    <div class="text-center text-xl-start"><img src="/templates/guest/assets/img/hero/chichi-2.png"
                            alt="Testimonial"></div>
                </div>
            </div>
        </div>
        <div class="shape-mockup bg-shape2" data-top="120px" data-left="0"><img
                src="/templates/guest/assets/img/shape/bg_shape_3.png" alt="shape"></div>
        <div class="shape-mockup bg-shape2 d-block d-xl-none" data-bottom="0" data-left="right"><img
                src="/templates/guest/assets/img/shape/bg_shape_2.png" alt="shape"></div>
        <div class="shape-mockup leaf-group" data-top="20%" data-right="0"><img
                src="/templates/guest/assets/img/shape/leaf_group_1.png" alt="shape"></div>
    </section>
    <section class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img class="icon"
                        src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> Góc Ẩm Thực</span>
                <h2 class="sec-title">Cẩm Nang Ẩm Thực <span class="font-style text-theme">ChiChiFood</span></h2>
                <p class="sec-text ms-auto me-auto">Hãy cùng ChiChiFood cập nhật thêm nhiều kiến thức ẩm thực qua các
                    <br>bài viết bên dưới nhé!
                </p>
            </div>
            <div class="row slider-shadow as-carousel" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <div class="blog-img"><img src="/templates/guest/assets/img/blog/blog_1_1.jpg"
                                alt="blog image"></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="javascript:;"><i class="fal fa-user"></i>Admin</a>
                                <a href="javascript:;"><i class="fal fa-calendar-alt"></i>12-12-2022</a> <a
                                    href="javascript:;"><i class="fal fa-tag"></i>Món Lẩu</a>
                            </div>
                            <h3 class="blog-title"><a href="javascript:;">Mách Bạn 3 Cách Chế Biến Món Sủi Cảo Siêu
                                    Ngon
                                    Tại Nhà</a></h3>
                            <div class="blog-bottom"><a href="javascript:;" class="line-btn">xem thêm</a> <a
                                    href="javascript:;" class="comment"><i class="fal fa-comments"></i>3
                                    Bình Luận</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <div class="blog-img"><img src="/templates/guest/assets/img/blog/blog_1_2.jpg"
                                alt="blog image"></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="javascript:;"><i class="fal fa-user"></i>Admin</a>
                                <a href="javascript:;"><i class="fal fa-calendar-alt"></i>12-12-2022</a> <a
                                    href="javascript:;"><i class="fal fa-tag"></i>Món Lẩu</a>
                            </div>
                            <h3 class="blog-title"><a href="javascript:;">Sự Thật Dinh Dưỡng Từ Món Há Cảo Mà Bạn
                                    Chưa
                                    Biết</a></h3>
                            <div class="blog-bottom"><a href="javascript:;" class="line-btn">xem thêm</a> <a
                                    href="javascript:;" class="comment"><i class="fal fa-comments"></i>3
                                    Bình Luận</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <div class="blog-img"><img src="/templates/guest/assets/img/blog/blog_1_3.jpg"
                                alt="blog image"></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="javascript:;"><i class="fal fa-user"></i>Admin</a>
                                <a href="javascript:;"><i class="fal fa-calendar-alt"></i>12-12-2022</a> <a
                                    href="javascript:;"><i class="fal fa-tag"></i>Món Chiên</a>
                            </div>
                            <h3 class="blog-title"><a href="javascript:;">Bí Quyết Làm Dồi Sụn Thơm Ngon Ăn Hoài Vẫn
                                    Mê</a></h3>
                            <div class="blog-bottom"><a href="javascript:;" class="line-btn">xem thêm</a> <a
                                    href="javascript:;" class="comment"><i class="fal fa-comments"></i>3
                                    Bình Luận</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <div class="blog-img"><img src="/templates/guest/assets/img/blog/blog_1_4.jpg"
                                alt="blog image"></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="javascript:;"><i class="fal fa-user"></i>Admin</a>
                                <a href="javascript:;"><i class="fal fa-calendar-alt"></i>12-12-2022</a> <a
                                    href="javascript:;"><i class="fal fa-tag"></i>Món Rán</a>
                            </div>
                            <h3 class="blog-title"><a href="javascript:;">Nem Chua Rán - Món Ăn Gây Nghiện Và Cách
                                    Làm
                                    Chuẩn Vị Không Phải Ai Cũng Biết</a></h3>
                            <div class="blog-bottom"><a href="javascript:;" class="line-btn">xem thêm</a> <a
                                    href="javascript:;" class="comment"><i class="fal fa-comments"></i>3
                                    Bình Luận</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup leaf jump-reverse" data-bottom="7%" data-left="0"><img
                src="/templates/guest/assets/img/shape/leaf_1.png" alt="shape"></div>
        <div class="shape-mockup leaf jump" data-bottom="20%" data-right="0"><img
                src="/templates/guest/assets/img/shape/chicken_1.png" alt="shape"></div>
    </section>

    @include('guest.layout.footer')

</body>

</html>
