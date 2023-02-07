<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ChiChiFood - Chi tiết sản phẩm</title>
    <meta name="author" content="Ezisolutions">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,500;0,600;0,700;0,800;0,900;0,1000;1,500;1,600;1,700;1,800;1,900;1,1000&family=Pattaya&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- <div class="preloader"><button class="as-btn style3 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div> -->

    <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="Bạn đang tìm gì?"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div>
    <div class="as-menu-wrapper">
        <div class="as-menu-area text-center"><button class="as-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="home.html"><img src="assets/img/logochichi.svg" alt="ChiChiFood"></a>
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
                            <div class="header-links">
                                <ul>
                                    <li>
                                        <div class="header-social">
                                            <a href="https://www.facebook.com/amthucchichifood"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="javascript:;">
                                                <svg width="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30"
                                                    fill="white">
                                                    <path
                                                        d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="javascript:;"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
                            <div class="logo-style1"><a href="home.html"><img width="130px"
                                        src="assets/img/logochichi.svg" alt="ChiChiFood"></a></div>
                            <nav class="main-menu d-none d-lg-inline-block">
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
    <div class="bccb">
        <ul id="bc-wbg" class="breadcumb-menu">
            <li><a href="index.html">Trang Chủ</a></li>
            <li><a href="index.html">Sản Phẩm</a></li>
            <li>Sủi Cảo ChiChi Nhân Thịt 1000G</li>
        </ul>
    </div>
    <section id="product-dt" class="as-product-wrapper product-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="product-thumb-area">
                        <div class="product-thumb-tab" data-asnavfor=".product-big-img">
                            <div class="tab-btn active"><img src="assets/img/menu/menu_thumb_1_1.png"
                                    alt="Product Thumb"></div>
                            <div class="tab-btn"><img src="assets/img/menu/menu_thumb_1_2.png" alt="Product Thumb">
                            </div>
                            <div class="tab-btn"><img src="assets/img/menu/menu_thumb_1_3.png" alt="Product Thumb">
                            </div>
                            <div class="tab-btn"><img src="assets/img/menu/menu_thumb_1_4.png" alt="Product Thumb">
                            </div>
                            <div class="tab-btn"><img src="assets/img/menu/menu_thumb_1_5.png" alt="Product Thumb">
                            </div>
                        </div>
                        <div class="product-big-img as-carousel" data-slide-show="1" data-md-slide-show="1"
                            data-fade="true">
                            <div class="col-auto">
                                <div class="img"><img src="assets/img/menu/product_details_1_1.png" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="img"><img src="assets/img/menu/product_details_1_2.png" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="img"><img src="assets/img/menu/product_details_1_3.png" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="img"><img src="assets/img/menu/product_details_1_4.png" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="img"><img src="assets/img/menu/product_details_1_5.png" alt="Product Image">
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
                                href="shop-details.html" class="woocommerce-review-link">(<span class="count">300</span>
                                đánh giá)</a>
                        </div>
                        <h2 class="product-title" style="font-weight: 800;">Sủi Cảo ChiChi Nhân Thịt 1000G</h2>
                        <p class="price">75.000đ<del>100.000đ</del></p>
                        <p class="text">
                            - Thành phần: Bột mỳ, thịt lợn, miến, mộc nhĩ, cà rốt, rau củ quả <br>
                            - Sử dụng: Hấp, chiên, ăn lẩu <br>
                            - Mục đích: có thể sử dụng bữa ăn chính, ăn kèm, ăn vặt <br>
                            - Tiện ích: thời gian chế biến khoảng 10 phút
                        </p>
                        <div class="actions">
                            <div class="quantity"><input type="number" class="qty-input" step="1" min="1" max="100"
                                    name="quantity" value="1" title="Qty"> <button class="quantity-plus qty-btn"><i
                                        class="far fa-chevron-up"></i></button> <button
                                    class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button></div>
                            <button class="as-btn">Thêm giỏ hàng</button> <a class="icon-btn" href="wishlist.html"><i
                                    class="fal fa-heart"></i></a>
                        </div>
                        <div class="product_meta"> <span class="posted_in">Phân loại: <a href="shop.html" rel="tag">Sủi
                                    cảo</a></span> </div>
                    </div>
                </div>
            </div>
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link as-btn active" id="description-tab"
                        data-bs-toggle="tab" href="#description" role="tab" aria-controls="description"
                        aria-selected="true">Thông tin sản phẩm</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link as-btn" id="reviews-tab"
                        data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                        aria-selected="false">Đánh giá khách hàng</a></li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade active show" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    <p>Sủi cảo là món ăn truyền thống nổi tiếng tại Trung Quốc. Tuy nhiên ở Việt Nam khi nhắc đến sủi
                        cảo mọi người thường nghĩ ngay đến sủi cảo CHICHI của ChiChiFood.</p>
                    <p>Trong đó, sủi cảo CHICHI nhân thịt là sản phẩm thương hiệu nổi bật của ChiChiFood được giới
                        sành ăn, người tiêu dùng và các chuyên gia trong giới ẩm thực đánh giá cao. Điều làm nên ấn
                        tượng của sản phẩm là ở khâu tuyển chọn nguyên liệu, công thức chế biến độc quyền và quy trình
                        sản xuất đạt chuẩn an toàn thực phẩm của bộ y tế.</p>
                    <p>Các gói sản phẩm CHICHI nhân thịt 1000g được thiết kế bao bì đẹp mắt, đóng gói sẵn tiện lợi cho
                        người tiêu dùng. Mặc dù được chế biến sẵn tuy nhiên món sủi cảo vẫn giữ được hương vị tuyệt vời
                        nhất.</p>
                    <p>Trong xu hướng hiện đại, mọi người bận rộn hơn với công việc, không có nhiều thời gian chuẩn bị
                        bữa
                        cơm của gia đình. Nhưng chỉ với một vài gói sủi cảo CHICHI nhân thịt đã giúp bữa cơm của bạn
                        tươm tất
                        và đầy đủ dinh dưỡng hơn. Chỉ mất 10 phút để chế biến món sủi cảo nhân thịt thơm ngon, nóng hổi
                        tại
                        nhà với ChiChiFood.</p>
                    <p>Thông tin chi tiết:<br>
                        Tên sản phẩm: Sủi cảo CHICHI nhân thịt 1000g<br>
                        Thành phần chính: Bột mì, thịt lợn, miến, mộc nhĩ, cà rốt, rau củ quả<br>
                        Sử dụng: Hấp, chiên, ăn lẩu<br>
                        Mục đích: Có thể sử dụng bữa ăn chính, ăn vặt, ăn kèm<br>
                        Tiện ích: Thời gian chế biến khoảng 10 phút</p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="woocommerce-Reviews">
                        <div class="as-comments-wrap">
                            <ul class="comment-list">
                                <li class="review as-comment-item">
                                    <div class="as-post-comment">
                                        <div class="comment-avater"><img src="assets/img/testimonial/testi_1_3.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content">
                                            <h4 class="name">Chị Trần Thanh Tâm</h4><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>22/03/2020</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                    5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">“Thay vì mất cả tiếng làm sủi cảo không được như trước đây.
                                                Mua đồ của ChiChiFood 10 phút là chế biến xong”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="review as-comment-item">
                                    <div class="as-post-comment">
                                        <div class="comment-avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content">
                                            <h4 class="name">Anh Lương Văn Toàn</h4><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>22/03/2020</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                    5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">“Shop giao hàng nhanh, đóng gói cẩn thận. Sủi cảo rất ngon
                                                và chất lượng. Mọi người nên mua nhé.”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="review as-comment-item">
                                    <div class="as-post-comment">
                                        <div class="comment-avater"><img src="assets/img/testimonial/testi_1_3.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content">
                                            <h4 class="name">Chị Ngô Thủy</h4><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>22/03/2020</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                    5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">“Mình là tín đồ của sủi cảo nhân thịt nên rất thích
                                                ChiChiFood. Đồ ngon, dễ chế biến, cả nhà nên thử nhé”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="review as-comment-item">
                                    <div class="as-post-comment">
                                        <div class="comment-avater"><img src="assets/img/testimonial/testi_1_3.jpg"
                                                alt="Comment Author"></div>
                                        <div class="comment-content">
                                            <h4 class="name">Cô Lương Thu Trang</h4><span class="commented-on"><i
                                                    class="fal fa-calendar-alt"></i>22/03/2020</span>
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                    5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <p class="text">“Gia đình cô mọi người rất thích ăn sủi cảo, thế là cô thành
                                                khách ruột của ChiChiFood”.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="as-comment-form">
                            <div class="form-title">
                                <h3 class="blog-inner-title">Ý kiến của bạn</h3>
                            </div>
                            <div class="row">
                                <div class="form-group rating-select d-flex align-items-center"><label>Chất
                                        lượng</label>
                                    <p class="stars"><span><a class="star-1" href="#">1</a> <a class="star-2"
                                                href="#">2</a> <a class="star-3" href="#">3</a> <a class="star-4"
                                                href="#">4</a> <a class="star-5" href="#">5</a></span></p>
                                </div>
                                <div class="col-12 form-group"><textarea placeholder="Viết đánh giá"
                                        class="form-control"></textarea> <i class="text-title far fa-pencil-alt"></i>
                                </div>
                                <div class="col-md-6 form-group"><input type="text" placeholder="Tên của bạn"
                                        class="form-control"> <i class="text-title far fa-user"></i></div>
                                <div class="col-md-6 form-group"><input type="text" placeholder="Email của bạn"
                                        class="form-control"> <i class="text-title far fa-envelope"></i></div>
                                <div class="col-12 form-group mb-0"><button class="as-btn">Thêm đánh giá</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container">
            <div class="newsletter-wrap space" data-bg-src="assets/img/bg/subscribe_bg_1.jpg">
                <h2 class="sec-title mb-10 fw-semibold">Đăng Ký Nhận Thông Tin</h2>
                <p class="mb-20">Theo dõi ChiChiFood để được cập nhật tin tức</p>
                <form class="newsletter-form"><input class="form-control" type="email"
                        placeholder="Số điện thoại của bạn" required=""> <button type="submit" class="as-btn">đăng ký<i
                            class="fas fa-arrow-right ms-2"></i></button></form>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper footer-layout2" data-bg-src="assets/img/bg/footer_bg_2.png">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Về ChiChiFood</h3>
                            <div class="as-widget-about">
                                <p class="about-text">Sở hữu nhà máy sản xuất và chế biến thực phẩm sạch đạt chuẩn GMP
                                    theo
                                    quy định quốc tế. Chúng tôi chú trọng bảo vệ sức khỏe của người tiêu dùng
                                </p>
                                <div class="as-social">
                                    <a href="https://www.facebook.com/amthucchichifood">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="javascript:;">
                                        <svg width="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 32">
                                            <path
                                                d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="javascript:;">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Liên Kết</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="javascript:;">Giới Thiệu</a></li>
                                    <li><a href="javascript:;">Sản Phẩm</a></li>
                                    <li><a href="javascript:;">Tin Tức</a></li>
                                    <li><a href="javascript:;">Góc Ẩm Thực</a></li>
                                    <li><a href="javascript:;">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Gợi Ý</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="menu-fast.html">Sủi Cảo</a></li>
                                    <li><a href="menu-fast.html">Dồi Sụn</a></li>
                                    <li><a href="menu-fast.html">Nem Chua</a></li>
                                    <img src="assets/img/hero/dathongbaobct.png">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Thông Tin</h3>
                            <div class="as-widget-contact">
                                <div class="info-box">
                                    <div class="info-box_icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <p class="info-box_text">Số 18, Ngõ 61/50 Bằng Liệt - Hoàng Mai - Hà Nội
                                    </p>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"><i class="fal fa-mobile"></i></div>
                                    <p class="info-box_text"><a href="tel:0961659091"
                                            class="info-box_link">+8496-165-9091</a></p>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"><i class="fal fa-envelope"></i></div>
                                    <p class="info-box_text"><a href="mailto:chichifood.jsc@gmail.com"
                                            class="info-box_link">chichifood.jsc@gmail.com</a> <a
                                            href="mailto:dangquoctuanpro@gmail.com"
                                            class="info-box_link">dangquoctuanpro@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2022 <a
                                href="javascript:;">ChiChiFood</a>. Design By <a href="javascript:;">Ezisolutions</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-end d-none d-lg-block">
                        <div class="footer-links">
                            <ul>
                                <li><a href="javascript:;">Chính Sách Bảo Mật</a></li>
                                <li><a href="javascript:;">Chính Sách Mua Hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><a href="#" class="scrollToTop scroll-btn"><i class="far fa-long-arrow-up"></i></a>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Thông báo thêm vào giỏ hàng thành công -->
    <div class="the-alert">
        <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Chúc mừng!</strong> Thêm vào giỏ hàng thành công.
    </div>
</body>

</html>