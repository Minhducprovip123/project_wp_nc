<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adidas Store</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <?php get_header(); ?>

<!-- Banner -->
<section class="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="Adidas Banner">
    <div class="hero-text">
        <h1>Khám phá bộ sưu tập mới nhất</h1>
        <a href="#" class="btn">Mua ngay</a>
    </div>
</section>



<!-- Categories -->
<section class="categories">
    <h2>Danh mục sản phẩm</h2>
    <div class="grid">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shoes.jpg" alt="Giày">
            <h3>Giày</h3>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/clother.jpg" alt="Quần áo">
            <h3>Quần áo</h3>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/accessories.jpg" alt="Phụ kiện">
            <h3>Phụ kiện</h3>
        </div>
    </div>
</section>

<!-- Featured Product -->
<section class="featured">
    <h2>Sản phẩm nổi bật</h2>
    <div class="product-card">
        <img src="<?php echo get_template_directory_uri(); ?>/asets/images/das ultra.jpg" alt="Adidas Ultraboost">
        <h3>Adidas Ultraboost</h3>
        <p>3,200,000đ</p>
        <button>Thêm vào giỏ</button>
    </div>
    
</section>


<?php get_footer(); ?>


