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
                            embarrassing It???s a long established fact that a reader will be looking at its layout.</p>
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
            </div><button title="Close (Esc)" type="button" class="mfp-close">??</button>
        </div>
    </div>


    <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="B???n ??ang t??m g???"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div>
    <div class="as-menu-wrapper">
        <div class="as-menu-area text-center"><button class="as-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="javascript:;"><img src="/templates/guest/assets/img/logochichi.svg"
                        alt="chichifood"></a>
            </div>
            <div class="as-mobile-menu">
                <ul>
                    <li><a href="javascript:;">Trang ch???</a>
                    </li>
                    <li><a href="javascript:;">Gi???i thi???u</a></li>
                    <li class="menu-item-has-children"><a href="javascript:;">S???n ph???m</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">S???i c???o</a></li>
                            <li><a href="javascript:;">D???i s???n</a></li>
                            <li><a href="javascript:;">Nem chua r??n</a></li>
                            <li><a href="javascript:;">Kh??c</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Tin t???c</a>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:;">G??c ???m th???c</a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">C??ng th???c l??m b??nh</a></li>
                            <li><a href="javascript:;">M??n ngon d??? l??m</a></li>
                            <li><a href="javascript:;">?????c s???n th??? gi???i</a></li>
                        </ul>
                    </li>
                    @if (!Session::get('check'))
                        <li><a href="javascript:;">Li??n h???</a></li>
                    @else
                        <li><a href="javascript:;">Li??n h???</a></li>
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

                        <li><a href="{{ route('guest.logout') }}">????ng xu???t</a></li>
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
                        <p class="header-info"><i class="fas fa-map-marker-alt"></i> Tri???u Kh??c - Thanh Xu??n - H?? N???i
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
                                            <a class="dropdown-item" href="#">????n mua</a>
                                            <a type="" data-toggle="modal" data-target="#changePasswordModal"
                                                href="javascript:;" class="dropdown-item link-changepassword"
                                                href="#">?????i m???t kh???u</a>
                                            <a class="dropdown-item" href="{{ route('guest.logout') }}">????ng xu???t</a>
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
                                        <li><a href="javascript:;">Trang ch???</a></li>
                                        <li><a href="javascript:;">Gi???i thi???u</a></li>
                                        <li class="menu-item-has-children"><a href="javascript:;">S???n ph???m</a>
                                            <ul class="sub-menu">
                                                <li><a href="javascript:;">S???i c???o</a></li>
                                                <li><a href="javascript:;">D???i s???n</a></li>
                                                <li><a href="javascript:;">Nem chua r??n</a></li>
                                                <li><a href="javascript:;">Kh??c</a></li>
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
                                        <li><a href="javascript:;">Tin t???c</a></li>
                                        <li class="menu-item-has-children"><a href="javascript:;">G??c ???m th???c</a>
                                            <ul class="sub-menu">
                                                <li><a href="javascript:;">C??ng th???c l??m b??nh</a></li>
                                                <li><a href="javascript:;">M??n ngon d??? l??m</a></li>
                                                <li><a href="javascript:;">?????c s???n th??? gi???i</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;">Li??n h???</a></li>
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
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                    S???i C???o</h1>
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
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                    D???i S???n</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:110px; top:574px; left:72px; font-size:100px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood 2</h1><a style="" class="ls-l ls-hide-desktop ls-hide-phone"
                    href="reservation.html" target="_self"
                    data-ls="offsetxin:500; easingin:easeOutBack; bgcolorin:transparent; colorin:transparent; offsetxout:-80; durationout:400; startatout:slidechangeonly + ; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:34px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:340px; left:72px; top:733px; text-transform:uppercase; line-height:34px; padding-top:32px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:30px;"
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                    D???i S???n</h1>
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
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                    S???i C???o</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:55px; top:367px; left:15px; font-size:44px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-text-layer"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood2</h1><a style="" class="ls-l" href="reservation.html" target="_self"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:20px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:198px; left:18px; top:465px; text-transform:uppercase; line-height:20px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:22px; padding-top:22px;"
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                    D???i S???n</h1>
                <h1 style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:normal; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:'Pattaya'; line-height:55px; top:367px; left:15px; font-size:44px; color:#eb0029; white-space:normal;"
                    class="ls-l hero-title ls-text-layer"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; position:fixed;">
                    ChiChiFood2</h1><a style="" class="ls-l" href="reservation.html" target="_self"
                    data-ls="offsetyin:-100lh; durationin:1500; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetyout:150; durationout:1500; easingout:easeInQuint; bgcolorout:transparent; colorout:transparent; hover:true; hoveropacity:1; hoverbgcolor:#010f1c; hovercolor:#ffffff; position:fixed;">
                    <ls-layer
                        style="font-size:20px; color:#fff; text-align:center; font-family:Nunito; cursor:pointer; width:198px; left:18px; top:465px; text-transform:uppercase; line-height:20px; font-weight:800; border-radius:999px 999px 999px 999px; background-color:#eb0029; padding-bottom:22px; padding-top:22px;"
                        class="ls-button-layer">?????t h??ng ngay</ls-layer>
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
                        </div><a href="shop.html" class="order-btn"><span class="font-style text-theme">?????t
                            </span>Ngay</a>
                    </div>
                </div>
                <div class="col-xl-5 space-top space-xl">
                    <div class="title-area mb-30"><span class="sub-title"><img class="icon"
                                src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> Gi???i
                            thi???u</span>
                        <h2 class="sec-title">Gi???i Thi???u S???n Ph???m <span
                                class="font-style text-theme">ChiChiFood</span>
                        </h2>
                    </div>
                    <p class="mt-n2 mb-20">L?? th????ng hi???u ch??? bi???n th???c ph???m s???ch h??ng ?????u. N??i ????y ch??ng t??i kh??ng
                        ch??? cung c???p nh???ng m??n ??n tuy???t v???i m?? c??n lu??n lu??n c??? g???ng mang ?????n h????ng v??? tr???n v???n nh???t
                        trong
                        c??c s???n ph???m n???i b???t c???a ChiChiFood nh??: S???i c???o nh??n th???t, s???i c???o nh??n h???i s???n, d???i s???n, nem
                        chua r??n.</p>
                    <p class="mb-4">T???t c??? ?????u ???????c g???i g???m trong c??c g??i s???n ph???m thi???t k??? ?????p m???t v?? ???n t?????ng.</p>
                    <div class="btn-wrap style1"><a href="about.html" class="as-btn">t??m hi???u th??m</a>
                        <div class="about-counter1">
                            <h3 class="counter-title"><span class="counter-number">20</span></h3>
                            <div class="media-body">
                                <p class="counter-info">N??M KINH NGHI???M</p>
                                <h5 class="counter-text">nghi??n c???u</h5>
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
                        src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> N???i B???t</span>
                <h2 class="sec-title">Gi?? Tr??? S???n Ph???m <span class="font-style text-theme">ChiChiFood</span></h2>
                <p class="sec-text ms-auto me-auto">C??c s???n ph???m c???a ChiChiFood ra ?????i nh?? l?? m???t s??? m???nh ch???u
                    tr??ch<br>
                    nhi???m mang ?????n l???i ??ch v??? th???i gian, s??? an to??n cho ng?????i ti??u d??ng.</p>
            </div>
            <div class="feature-grid-wrap">
                <div class="feature-grid">
                    <div class="feature-grid_img"><img src="/templates/guest/assets/img/icon/clock.png"
                            alt="Food"></div>
                    <div>
                        <h3 class="feature-grid_title box-title">Ti???t Ki???m Th???i Gian</h3>
                        <p class="feature-grid_text">V???i ??u ??i???m l?? c??c s???n ph???m ch??? bi???n s???n n??n th???i gian v??o b???p s???
                            ???????c r??t ng???n r???t nhi???u. Gi??p ng?????i n???i tr??? c?? th??? d??nh nhi???u th???i gian cho c??c ho???t ?????ng
                            kh??c</p>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature-grid_img"><img src="/templates/guest/assets/img/icon/heart.png"
                            alt="Food"></div>
                    <div>
                        <h3 class="feature-grid_title box-title">An To??n S???c Kh???e</h3>
                        <p class="feature-grid_text">V???i vi???c ?????t s???c kh???e c???ng ?????ng l??n h??ng ?????u, c??c s???n ph???m c???a
                            ChiChiFood lu??n ?????m b???o ch???t l?????ng cao v?? ??u ti??n an to??n cho ng?????i s??? d???ng l??n h??ng ?????u</p>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature-grid_img"><img src="/templates/guest/assets/img/icon/plate.png"
                            alt="Food"></div>
                    <div>
                        <h3 class="feature-grid_title box-title">?????y ????? Ch???t Dinh D?????ng</h3>
                        <p class="feature-grid_text">M???c d?? c??c s???n ph???m ?????u l?? ch??? bi???n s???n nh??ng v???i kinh nghi???m 20
                            n??m trong ng??nh th???c ph???m ng?????i t???o ra ???? nghi??n c???u l??m sao ????? t???o ra s???n ph???m c??n b???ng
                            dinh d?????ng</p>
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
                                    t???n</span></h2>
                            <p class="counter-card_text">S???n Ph???m B??n Ra</p>
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
                            <p class="counter-card_text">Nh?? Ph??n Ph???i</p>
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
                            <p class="counter-card_text">Kh??ch H??ng</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="/templates/guest/assets/img/icon/counter_1_4.svg"
                                alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number">TOP <span class="counter-number">1</h2>
                            <p class="counter-card_text">An To??n Th???c Ph???m</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img class="icon"
                        src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> S???n Ph???m</span>
                <h2 class="sec-title">S???n Ph???m B??n Ch???y C???a <span class="font-style text-theme">ChiChiFood</span></h2>
                <p class="sec-text ms-auto me-auto">C??c s???n ph???m t???i ChiChiFood lu??n ???????c m???i ng?????i ????n nh???n v?? y??u<br>
                    th??ch v?? s??? an to??n ch???t l?????ng c???a s???n ph???m</p>
                <div class="tab-menu1 filter-menu-active"><button data-filter="*" class="active" type="button">t???t
                        c???</button> <button data-filter=".cat1" type="button">s???i c???o</button> <button
                        data-filter=".cat2" type="button">d???i s???n</button> <button data-filter=".cat3"
                        type="button">nem
                        chua r??n</button> <button data-filter=".cat4" type="button">kh??c</button>
                </div>
            </div>
            <div class="row gy-40 filter-active">
                <div class="col-xl-3 col-lg-4 col-sm-6 filter-item cat1">
                    <div class="as-product product_style1">
                        <div class="product-img"><img src="/templates/guest/assets/img/menu/menu_1_1.png"
                                alt="Product Image"></div>
                        <div class="product-content"><a href="shop.html" class="category">S???i c???o</a>
                            <div class="product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                        style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                            <h3 class="product-title"><a href="shop-details.html">S???i C???o ChiChi Nh??n Th???t 1000G</a>
                            </h3><span class="price">75.000??<del>100.000??</del></span>
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
                        <div class="product-content"><a href="shop.html" class="category">S???i c???o</a>
                            <div class="product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                        style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                            <h3 class="product-title"><a href="shop-details.html">S???i C???o ChiChi Nh??n Th???t 500G</a>
                            </h3>
                            <span class="price">39.000??</span>
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
                        <div class="product-content"><a href="shop.html" class="category">D???i s???n</a>
                            <div class="product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5"><span
                                        style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.00)
                            </div>
                            <h3 class="product-title"><a href="shop-details.html">D???i S???n ChiChi 500G</a>
                            </h3><span class="price">45.000??</span>
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
                            <h3 class="product-title"><a href="shop-details.html">Nem Chua R??n ChiChi</a></h3><span
                                class="price">40.000??</span>
                            <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i
                                        class="fal fa-eye"></i></a> <a href="cart.html" class="icon-btn"><i
                                        class="fal fa-cart-plus"></i></a> <a href="wishlist.html"
                                    class="icon-btn"><i class="fal fa-heart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5"><a href="shop.html" class="as-btn">xem th??m</a></div>
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
                                src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> Ph???n
                            H???i</span>
                        <h2 class="sec-title">Kh??ch H??ng C???a <span class="font-style text-theme">ChiChiFood</span>
                        </h2>
                        <p class="sec-text ms-auto me-auto ms-xl-0">ChiChiFood lu??n nh???n ???????c r???t nhi???u ph???n h???i c???a
                            kh??ch h??ng<br>v??? ch???t l?????ng s???n ph???m</p>
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
                                    <p class="testi-box_text">???M??nh r???t th??ch c??c s???n ph???m c???a ChiChiFood, ????? ??n ch???
                                        bi???n s???n ????ng
                                        g??i c???n th???n, d??ng r???t ti???n v?? an t??m. Ngon v?? ?????m b???o s???c kh???e???</p>
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
                                            <h3 class="testi-box_name">Anh Hi???u</h3><span class="testi-box_desig">????
                                                N???NG</span>
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
                                    <p class="testi-box_text">???S???n ph???m ch???t l?????ng t???t, gi?? c??? h???p l??, ??a d???ng m??n ??n,
                                        ?????m b???o an to??n th???c ph???m. T?? v???n nhi???t t??nh???</p>
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
                                            <h3 class="testi-box_name">Anh B???o</h3><span class="testi-box_desig">H??
                                                N???I</span>
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
                                    <p class="testi-box_text">???M???t ng??y th??m d???i s???n v?? nem chua r??n m?? l?????i ra c???a
                                        h??ng
                                        mua. M??nh
                                        l??n m???ng ?????t ????? v??? ch??? bi???n n??n bi???t ?????n ChiChiFood. Shop giao h??ng r???t nhanh,
                                        ????ng g??i c???n th???n, n??i chung l?? ??ng.???</p>
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
                                            <h3 class="testi-box_name">Ch??? Ng???c</h3><span class="testi-box_desig">TP
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
                        src="/templates/guest/assets/img/icon/title_icon.svg" alt="icon"> G??c ???m Th???c</span>
                <h2 class="sec-title">C???m Nang ???m Th???c <span class="font-style text-theme">ChiChiFood</span></h2>
                <p class="sec-text ms-auto me-auto">H??y c??ng ChiChiFood c???p nh???t th??m nhi???u ki???n th???c ???m th???c qua c??c
                    <br>b??i vi???t b??n d?????i nh??!
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
                                    href="javascript:;"><i class="fal fa-tag"></i>M??n L???u</a>
                            </div>
                            <h3 class="blog-title"><a href="javascript:;">M??ch B???n 3 C??ch Ch??? Bi???n M??n S???i C???o Si??u
                                    Ngon
                                    T???i Nh??</a></h3>
                            <div class="blog-bottom"><a href="javascript:;" class="line-btn">xem th??m</a> <a
                                    href="javascript:;" class="comment"><i class="fal fa-comments"></i>3
                                    B??nh Lu???n</a></div>
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
                                    href="javascript:;"><i class="fal fa-tag"></i>M??n L???u</a>
                            </div>
                            <h3 class="blog-title"><a href="javascript:;">S??? Th???t Dinh D?????ng T??? M??n H?? C???o M?? B???n
                                    Ch??a
                                    Bi???t</a></h3>
                            <div class="blog-bottom"><a href="javascript:;" class="line-btn">xem th??m</a> <a
                                    href="javascript:;" class="comment"><i class="fal fa-comments"></i>3
                                    B??nh Lu???n</a></div>
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
                                    href="javascript:;"><i class="fal fa-tag"></i>M??n Chi??n</a>
                            </div>
                            <h3 class="blog-title"><a href="javascript:;">B?? Quy???t L??m D???i S???n Th??m Ngon ??n Ho??i V???n
                                    M??</a></h3>
                            <div class="blog-bottom"><a href="javascript:;" class="line-btn">xem th??m</a> <a
                                    href="javascript:;" class="comment"><i class="fal fa-comments"></i>3
                                    B??nh Lu???n</a></div>
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
                                    href="javascript:;"><i class="fal fa-tag"></i>M??n R??n</a>
                            </div>
                            <h3 class="blog-title"><a href="javascript:;">Nem Chua R??n - M??n ??n G??y Nghi???n V?? C??ch
                                    L??m
                                    Chu???n V??? Kh??ng Ph???i Ai C??ng Bi???t</a></h3>
                            <div class="blog-bottom"><a href="javascript:;" class="line-btn">xem th??m</a> <a
                                    href="javascript:;" class="comment"><i class="fal fa-comments"></i>3
                                    B??nh Lu???n</a></div>
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
