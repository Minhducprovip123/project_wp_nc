<?php
/**
 * Template for displaying the footer
 * 
 * @package YourTheme
 */

?>

    </main><!-- Kết thúc site-main -->

    <footer class="site-footer">
        <!-- CTA -->
        <div class="footer-cta">
            <h2>TRỞ THÀNH HỘI VIÊN & HƯỞNG ƯU ĐÃI 10%</h2>
            <a href="#" class="btn-register">ĐĂNG KÝ MIỄN PHÍ →</a>
        </div>

        <!-- Footer Links -->
        <div class="footer-links">
            <div class="footer-column">
                <h3>SẢN PHẨM</h3>
                <ul>
                    <li><a href="#">Giày</a></li>
                    <li><a href="#">Quần áo</a></li>
                    <li><a href="#">Phụ kiện</a></li>
                    <li><a href="#">Hàng Mới Về</a></li>
                    <li><a href="#">Release Dates</a></li>
                    <li><a href="#">Top Sellers</a></li>
                    <li><a href="#">Member exclusives</a></li>
                    <li><a href="#">Outlet</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>THỂ THAO</h3>
                <ul>
                    <li><a href="#">Chạy</a></li>
                    <li><a href="#">Đánh gôn</a></li>
                    <li><a href="#">Gym & Training</a></li>
                    <li><a href="#">Bóng đá</a></li>
                    <li><a href="#">Bóng Rổ</a></li>
                    <li><a href="#">Quần vợt</a></li>
                    <li><a href="#">Ngoài trời</a></li>
                    <li><a href="#">Bơi lội</a></li>
                    <li><a href="#">Motorsport</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>BỘ SƯU TẬP</h3>
                <ul>
                    <li><a href="#">Pharrell Williams</a></li>
                    <li><a href="#">Ultra Boost</a></li>
                    <li><a href="#">Pureboost</a></li>
                    <li><a href="#">Predator</a></li>
                    <li><a href="#">Superstar</a></li>
                    <li><a href="#">Stan Smith</a></li>
                    <li><a href="#">NMD</a></li>
                    <li><a href="#">Adicolor</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>THÔNG TIN VỀ CÔNG TY</h3>
                <ul>
                    <li><a href="#">Giới thiệu về chúng tôi</a></li>
                    <li><a href="#">Cơ hội nghề nghiệp</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">adidas stories</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>HỖ TRỢ</h3>
                <ul>
                    <li><a href="#">Trợ Giúp</a></li>
                    <li><a href="#">Công cụ tìm kiếm cửa hàng</a></li>
                    <li><a href="#">Biểu đồ kích cỡ</a></li>
                    <li><a href="#">Thanh toán</a></li>
                    <li><a href="#">Giao hàng</a></li>
                    <li><a href="#">Trả hàng & Hoàn tiền</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                    <li><a href="#">Trợ Giúp Dịch Vụ Khách Hàng</a></li>
                </ul>
            </div>

            <div class="footer-column social">
                <h3>THEO DÕI CHÚNG TÔI</h3>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="footer-bottom">
            <div class="footer-bottom-links">
                <a href="#">Cài Đặt Cookie</a>
                <a href="#">Chính sách Bảo mật</a>
                <a href="#">Điều Khoản và Điều Kiện</a>
                <a href="#">XUẤT BẢN BỞI</a>
            </div>
            <div class="footer-bottom-info">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bocongthuong.png" alt="Bộ Công Thương">
                <p>© 2025 Công ty TNHH adidas Việt Nam</p>
            </div>
        </div>
    </footer>
    <div style="background:red;color:white;padding:20px;text-align:center;">
    FOOTER TEST - Nếu thấy dòng này tức là footer.php chạy thành công.
</div>


    <?php wp_footer(); ?>

</body>
</html>
