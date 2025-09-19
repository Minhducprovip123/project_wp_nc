<?php
/** 
 * Template Name: Trang Chu
 */
get_header();
?>

<?php

echo do_shortcode('[smartslider3 slider="2"]');
?>

<?php


$pickleball = get_field('pickleball');

if( $pickleball && is_array($pickleball) ):
?>
<div class="product-section">
    <!-- thanh filter -->
    <div class="filters-wrapper">
        <button class="filter active">Pickleball 🎾</button>
        <button class="filter">Padel 🎾</button>
        <button class="filter">Bán chạy nhất</button>
        <button class="filter">Hàng Mới Về</button>
    </div>

    
</div>

<div class="container my-4">
    <div class="row">
        <?php foreach( $pickleball as $group ): 
            // mỗi $group chính là san_pham_1, san_pham_2...
            $image = !empty($group['image']) ? $group['image'] : '';
            $title = !empty($group['title']) ? $group['title'] : '';
            $price = !empty($group['price']) ? $group['price'] : '';
            
            if( $image || $title || $price ):
        ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <?php if( $image ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" class="card-img-top" alt="<?php echo esc_attr($title); ?>">
                    <?php endif; ?>
                    <div class="card-body text-center">
                        <?php if( $title ): ?>
                            <h5 class="card-title fw-bold"><?php echo esc_html($title); ?></h5>
                        <?php endif; ?>
                        
                        <?php if( $price ): ?>
                            <p class="text-danger fw-semibold">
                                <?php 
                                if (is_numeric($price)) {
                                    echo number_format((float)$price, 0, ',', '.'); ?>₫
                                <?php } else {
                                    echo esc_html($price);
                                } ?>
                            </p>
                        <?php endif; ?>

                        <p class="text-muted small">Performance</p>
                    </div>
                </div>
            </div>
        <?php 
            endif;
        endforeach; ?>
    </div>
</div>
<!-- Banner -->
<div class="promo-banner">
    <div class="overlay"></div>
    <div class="banner-content">
        <h2>HỘI VIÊN ADICLUB HÃY SẴN SÀNG!</h2>
        <p>
            Thêm sản phẩm. Thêm trải nghiệm. Thêm nhiều hơn đặc quyền dành riêng cho thành viên trong Tuần lễ Hội viên adiClub Days.
        </p>
        <a href="#" class="banner-btn">TÌM HIỂU THÊM →</a>
    </div>
</div>


<?php endif; ?>






<!-- Slick Slider Script -->
<script>
jQuery(document).ready(function($){
  $('.slider').slick({
    autoplay: true,          // tự động chạy
    autoplaySpeed: 4000,     // 4s đổi slide
    dots: true,              // chấm tròn điều khiển
    arrows: true,            // mũi tên điều hướng
    infinite: true,          // chạy vòng lặp
    speed: 800,
    fade: true,              // hiệu ứng fade
    cssEase: 'linear'
  });
});
</script>


</section>





<!-- Banner Carousel -->
<section class="hero">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        
    </div>
    <!-- Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  
  <div>
    <section class="banner-carousel">
  <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt=" "></div>
  <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg" alt=""></div>
  <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg" alt=""></div>
  <!-- Thêm bao nhiêu banner tùy thích -->
</section>
  </div>
  

</section>
<!-- Slick Slider JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



<?php get_footer(); ?>



