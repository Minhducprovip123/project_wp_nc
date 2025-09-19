<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   


  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="custom.css">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  
   <!-- Thêm Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

<!-- jQuery (nếu chưa có) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- Slick CSS + JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body <?php body_class(); ?>>

<!-- header.php -->
<header class="site-header">
  <!-- Thanh khuyến mãi -->
  <div class="top-bar">
    <p>GIAO HÀNG MIỄN PHÍ CHO THÀNH VIÊN CỦA ADICLUB</p>
  </div>

  <!-- Thanh menu chính -->
  <!-- Logo -->
    <div class="logo">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Adidas-Logo.png" 
               alt="<?php bloginfo('name'); ?>" width="120">
        </a>
      <?php endif; ?>
    </div>


    <!-- Menu -->
    <nav class="main-nav">
      <ul>
        <li><a href="#">GIÀY</a></li>
        <li><a href="#">NAM</a></li>
        <li><a href="#">NỮ</a></li>
        <li><a href="#">TRẺ EM</a></li>
        <li><a href="#">THỂ THAO</a></li>
        <li><a href="#">CÁC NHÃN HIỆU</a></li>
        <li><a href="#">OUTLET</a></li>
      </ul>
    </nav>

    <!-- Tìm kiếm + Icon -->
    <div class="header-right">
      <div class="search-box">
        <input type="text" placeholder="tìm kiếm">
        <button><i class="fa fa-search"></i></button>
      </div>
      <a href="#" class="icon"><i class="fa fa-user"></i></a>
      <a href="#" class="icon"><i class="fa fa-heart"></i></a>
      <a href="#" class="icon"><i class="fa fa-shopping-bag"></i></a>
    </div>
  </div>
  
</header>
