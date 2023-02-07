@include('guest.layout.header')
    <div class="breadcumb-wrapper background-image"
        style="background-image: url(&quot;assets/img/breadcumb/breadcumb-bg.jpg&quot;);">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">GIỎ<span class="font-style text-theme2" style="text-transform: none; font-weight: normal;"> Hàng</span></h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Trang Chủ</a></li>
                    <li>Giỏ Hàng</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="as-cart-wrapper space-top space-extra-bottom">
        <div class="container">
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Ảnh</th>
                            <th class="cart-col-productname">Tên Sản Phẩm</th>
                            <th class="cart-col-price">Giá</th>
                            <th class="cart-col-quantity">Số Lượng</th>
                            <th class="cart-col-total">Thành Tiền</th>
                            <th class="cart-col-remove">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Ảnh"><a class="cart-productimage" href="shop-detailis.html"><img
                                        width="91" height="91" src="assets/img/menu/menu_thumb_1_1.png" alt="Image"></a>
                            </td>
                            <td data-title="Tên"><a class="cart-productname" href="shop-detailis.html">Sủi Cảo ChiChi
                                    Nhân Thịt 1000G</a></td>
                            <td data-title="Giá"><span class="amount"><bdi>75.000<span>đ</span></bdi></span></td>
                            <td data-title="Số lượng">
                                <div class="quantity"><button class="quantity-minus qty-btn"><i
                                            class="far fa-minus"></i></button> <input type="number" class="qty-input"
                                        value="1" min="1" max="99"> <button class="quantity-plus qty-btn"><i
                                            class="far fa-plus"></i></button></div>
                            </td>
                            <td data-title="Tổng"><span class="amount"><bdi>75.000<span>đ</span></bdi></span></td>
                            <td data-title="Xóa"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <tr class="cart_item">
                            <td data-title="Ảnh"><a class="cart-productimage" href="shop-detailis.html"><img
                                        width="91" height="91" src="assets/img/menu/menu_thumb_1_2.png" alt="Image"></a>
                            </td>
                            <td data-title="Tên"><a class="cart-productname" href="shop-detailis.html">Dồi Sụn ChiChi
                                    500G</a></td>
                            <td data-title="Giá"><span class="amount"><bdi>45.000<span>đ</span></bdi></span></td>
                            <td data-title="Số lượng">
                                <div class="quantity"><button class="quantity-minus qty-btn"><i
                                            class="far fa-minus"></i></button> <input type="number" class="qty-input"
                                        value="1" min="1" max="99"> <button class="quantity-plus qty-btn"><i
                                            class="far fa-plus"></i></button></div>
                            </td>
                            <td data-title="Tổng"><span class="amount"><bdi>90.000<span>đ</span></bdi></span></td>
                            <td data-title="Xóa"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <tr class="cart_item">
                            <td data-title="Ảnh"><a class="cart-productimage" href="shop-detailis.html"><img
                                        width="91" height="91" src="assets/img/menu/menu_thumb_1_3.png" alt="Image"></a>
                            </td>
                            <td data-title="Tên"><a class="cart-productname" href="shop-detailis.html">Nem Chua Rán
                                    ChiChi</a></td>
                            <td data-title="Giá"><span class="amount"><bdi>40.000<span>đ</span></bdi></span></td>
                            <td data-title="Số lượng">
                                <div class="quantity"><button class="quantity-minus qty-btn"><i
                                            class="far fa-minus"></i></button> <input type="number" class="qty-input"
                                        value="1" min="1" max="99"> <button class="quantity-plus qty-btn"><i
                                            class="far fa-plus"></i></button></div>
                            </td>
                            <td data-title="Tổng"><span class="amount"><bdi>40.000<span>đ</span></bdi></span></td>
                            <td data-title="Xóa"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="as-cart-coupon"><input type="text" class="form-control"
                                        placeholder="Mã Giảm Giá..."> <button type="submit" class="as-btn">Áp
                                        dụng</button></div><button type="submit" class="as-btn">Cập nhật</button> <a
                                    href="shop.html" class="as-btn">Tiếp tục mua sắm</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Tổng Giá Trị</h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Giá trị</td>
                                <td data-title="Cart Subtotal"><span
                                        class="amount"><bdi>205.000<span>đ</span></bdi></span></td>
                            </tr>
                            <tr class="shipping">
                                <th>Phí vận chuyển</th>
                                <td data-title="Shipping and Handling"><span
                                        class="amount"><bdi>20.000<span>đ</span></bdi></span>
                                    <p class="woocommerce-shipping-destination"></p>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <td>Tổng thanh toán</td>
                                <td data-title="Total"><strong><span
                                            class="amount"><bdi>225.000<span>đ</span></bdi></span></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout mb-30"><a href="checkout.html" class="as-btn">Tiếp tục thanh
                            toán</a></div>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>
