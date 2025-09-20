<?php /* header.php (rút gọn, chuẩn Adidas) */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="ad-header">
  <!-- top bar -->
  <div class="ad-topbar">
    <div class="ad-container">
      GIAO HÀNG MIỄN PHÍ CHO THÀNH VIÊN CỦA ADICLUB <span class="caret">▾</span>
    </div>
  </div>

  <!-- main header -->
  <div class="ad-container">
    <div class="ad-main"><!-- !!! TẤT CẢ PHẢI NẰM TRONG ad-main !!! -->

      <!-- 1) LOGO TRÁI -->
      <div class="ad-logo">
        <?php
          if ( function_exists('the_custom_logo') && has_custom_logo() ) {
            the_custom_logo(); // WordPress tự sinh <a><img/></a>
          } else {
            echo '<svg width="48" height="32" viewBox="0 0 48 32" aria-label="logo">
                    <polygon points="0,26 8,22 14,32 2,32" fill="#000"/>
                    <polygon points="11,21 19,17 27,32 15,32" fill="#000"/>
                    <polygon points="23,16 31,12 44,32 31,32" fill="#000"/>
                  </svg>';
          }
        ?>
      </div>

      <!-- 2) MENU GIỮA -->
      <nav class="ad-nav" aria-label="Primary">
        <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class'     => 'ad-menu',
            'container'      => false,
            'fallback_cb'    => '__return_empty_string',
          ]);
        ?>
      </nav>

      <!-- 3) CỘT PHẢI -->
      <div class="ad-right">
        <ul class="ad-utility">
          <li><a href="#">trợ giúp</a></li>
          <li><a href="#">trình theo dõi đơn hàng</a></li>
          <li><a href="#">đăng ký hội viên</a></li>
          <li class="flag"><img src="https://flagcdn.com/w20/vn.png" alt="VN"></li>
        </ul>

        <div class="ad-tools">
          <form class="ad-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input class="ad-search-input" type="search" name="s" placeholder="tìm kiếm" value="<?php echo get_search_query(); ?>">
            <button class="ad-search-btn" type="submit" aria-label="Search">🔍</button>
          </form>
          <a class="ad-icon" href="#" aria-label="Tài khoản"><span class="ad-badge">1</span>👤</a>
          <a class="ad-icon" href="#" aria-label="Yêu thích">♡</a>
          <a class="ad-icon" href="#" aria-label="Giỏ hàng">🛒</a>
        </div>
      </div>

    </div><!-- /ad-main -->
  </div>
</header>




  


<nav class="mobile-drawer" aria-label="Mobile">
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'menu_class'     => 'mobile-menu',
    'container'      => false,
    'fallback_cb'    => '__return_empty_string',
  ]);
  ?>
</nav>


<script>
  // Shrink on scroll
  document.addEventListener('scroll', function () {
    var h = document.querySelector('.main-header');
    if (!h) return;
    if (window.scrollY > 10) h.classList.add('shrink');
    else h.classList.remove('shrink');
  });

  // Mobile drawer
  (function () {
    const btn = document.querySelector('.hamburger');
    const drawer = document.querySelector('.mobile-drawer');
    if (!btn || !drawer) return;
    btn.addEventListener('click', () => drawer.classList.toggle('open'));
  })();
  

</script>
 
<?php if ( is_single() ) : ?>
  <script type="application/ld+json">…</script>
<?php endif; ?>
