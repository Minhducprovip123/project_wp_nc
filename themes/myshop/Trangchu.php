<?php
/**
 * Template Name: Trang Chu
 */
get_header();
?>

<main id="main" class="site-main">

  <?php
  // Hero / Smart Slider
  echo do_shortcode('[smartslider3 slider="2"]');
  ?>

  <?php
  // ====== SECTION: PICKLEBALL (ACF repeater/ group) ======
  $pickleball = get_field('pickleball');
  if ( $pickleball && is_array($pickleball) ) : ?>
    <section class="product-section">
      <div class="container">
        <!-- Filter bar -->
        <div class="filters-wrapper">
          <button class="filter active">Pickleball 🎾</button>
          <button class="filter" disabled>Padel 🎾</button>
          <button class="filter">Bán chạy nhất</button>
          <button class="filter">Hàng Mới Về</button>
        </div>

        <!-- Grid -->
        <div class="row my-4">
          <?php foreach ( $pickleball as $group ) :
            $image = !empty($group['image']) ? $group['image'] : '';
            $title = !empty($group['title']) ? $group['title'] : '';
            $price = !empty($group['price']) ? $group['price'] : '';
            if ( $image || $title || $price ) : ?>
              <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                  <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="card-img-top" alt="<?php echo esc_attr($title); ?>">
                  <?php endif; ?>
                  <div class="card-body text-center">
                    <?php if ( $title ) : ?>
                      <h5 class="card-title fw-bold"><?php echo esc_html($title); ?></h5>
                    <?php endif; ?>
                    <?php if ( $price ) : ?>
                      <p class="text-danger fw-semibold">
                        <?php
                        if ( is_numeric($price) ) {
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
            <?php endif;
          endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Promo banner -->
  <section class="promo-banner">
    <div class="overlay"></div>
    <div class="banner-content">
      <h2>HỘI VIÊN ADICLUB HÃY SẴN SÀNG!</h2>
      <p>Thêm sản phẩm. Thêm trải nghiệm. Thêm nhiều hơn đặc quyền dành riêng cho thành viên trong Tuần lễ Hội viên adiClub Days.</p>
      <a href="#" class="banner-btn">TÌM HIỂU THÊM →</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
