<?php

function myshop_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'mytheme' ),
  ));
}
add_action('after_setup_theme', 'myshop_theme_setup');

function myshop_enqueue_scripts() {
  // CSS gốc của theme
    wp_enqueue_style('myshop-style', get_stylesheet_uri());

    // Custom CSS
    wp_enqueue_style('myshop-custom', get_template_directory_uri() . '/custom.css', array(), '1.0.0');

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );
    // Slick CSS
    wp_enqueue_style(
        'slick',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        '1.8.1'
    );
     // jQuery (WordPress có sẵn, gọi ra thôi)
    wp_enqueue_script('jquery');

    // Slick JS
    wp_enqueue_script(
        'slick-js',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery'),
        '1.8.1',
        true
    );
     // Custom JS (để init slider)
    wp_enqueue_script(
        'myshop-custom',
        get_template_directory_uri() . '/assets/js/custom.js',
        array('jquery', 'slick-js'),
        '1.0',
        true
    );


}
function vineye_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'
    );

    // Theme style.css
    wp_enqueue_style('vineye-style', get_stylesheet_uri());

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        null,
        true
    );
     // (tuỳ chọn) JS đổi icon toggler
      wp_enqueue_script(
        'nav-toggle-icons',
        get_stylesheet_directory_uri() . '/js/nav-toggle-icons.js',
        ['bootstrap-bundle'], '1.0', true
      );

    // Custom script
    wp_enqueue_script(
        'vineye-custom',
        get_template_directory_uri() . '/js/custom.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'vineye_enqueue_scripts');

// ===== Theme setup =====
function vineye_theme_setup() {
    // Hỗ trợ <title>
    add_theme_support('title-tag');

    // Hỗ trợ logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Hỗ trợ menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'vineye'),
    ));
}
add_action('after_setup_theme', 'vineye_theme_setup');




// 2) Nạp Bootstrap CDN và custom.css
add_action('wp_enqueue_scripts', function () {
    $theme_version = wp_get_theme()->get('Version');

    // Nạp Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        '5.3.3',
        'all'
    );

    // Nạp Font Awesome
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        [],
        '7.0.1',
        'all'
    );

    // Nạp CSS tùy chỉnh (custom.css nằm ngoài cùng thư mục theme)
    wp_enqueue_style(
        'wonderland-custom',
        get_template_directory_uri() . '/custom.css',
        ['bootstrap'],
        $theme_version,
        'all'
    );

    // Nạp Bootstrap JS
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        ['jquery'],
        '5.3.3',
        true
    );
    // Đảm bảo jQuery được nạp (nếu cần)
    wp_enqueue_script('jquery');
});
add_action('wp_enqueue_scripts', 'myshop_enqueue_scripts');
function my_enqueue_slick_slider() {
    // CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');

    // JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_slick_slider');
function my_custom_product_tabs_scripts() {
    // Load Slick
    wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');

    // Load file JS custom
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_product_tabs_scripts');
function myshop_enqueue_assets() {
    // Slick CSS & JS từ CDN
    wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_style( 'slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' );

    wp_enqueue_script( 'slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true );

    // File JS của bạn
    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery','slick-js'), null, true );

    // File CSS custom
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'myshop_enqueue_assets' );

function mytheme_setup() {
    // Hỗ trợ logo tùy chỉnh
    add_theme_support( 'custom-logo' );

    // Hỗ trợ title-tag
    add_theme_support( 'title-tag' );

    // Đăng ký menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mytheme' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
 
function mytheme_enqueue_scripts() {
    // Slick CSS
    wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_style( 'slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' );

    // jQuery (WP đã có sẵn, không cần import thủ công)
    wp_enqueue_script( 'jquery' );

    // Slick JS
    wp_enqueue_script( 'slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true );

    // File custom.js để khởi tạo slider
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery','slick-js'), null, true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );


