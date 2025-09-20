<?php
/**
 * Theme setup: title, thumbnails, custom logo, primary menu
 */
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', [
    'height'      => 60,
    'width'       => 160,
    'flex-width'  => true,
    'flex-height' => true,
  ]);

  register_nav_menus([
    'primary' => __('Primary Menu', 'myshop'),
  ]);
});


/**
 * Enqueue styles & scripts (chỉ 1 nơi duy nhất)
 */
add_action('wp_enqueue_scripts', function () {
  // nạp style.css của theme (bắt buộc)
  wp_enqueue_style('theme-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));

  // (tuỳ) nạp custom.css nếu có
  if ( file_exists( get_template_directory() . '/custom.css' ) ) {
    wp_enqueue_style('theme-custom', get_template_directory_uri() . '/custom.css', ['theme-style'], wp_get_theme()->get('Version'));
  }

  // ví dụ: slick/bootstrp nếu cần (1 bản duy nhất)
  // wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], '1.8.1');
  // wp_enqueue_script('jquery');
});

  // Bootstrap (chỉ 1 bản)
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3');

  // Font Awesome (chỉ 1 bản)
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], '6.5.2');

  // Slick (chỉ 1 bản)
  wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], '1.8.1');
  wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', ['slick'], '1.8.1');

  // Custom CSS của bạn (nếu có)
  if ( file_exists( get_template_directory() . '/custom.css' ) ) {
    wp_enqueue_style('theme-custom', get_template_directory_uri() . '/custom.css', ['theme-style'], wp_get_theme()->get('Version'));
  }

  // jQuery (WP đã có sẵn)
  wp_enqueue_script('jquery');

  // Bootstrap bundle
  wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', ['jquery'], '5.3.3', true);

  // Slick
  wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '1.8.1', true);

  // JS khởi tạo của bạn (nếu có)
  if ( file_exists( get_template_directory() . '/assets/js/custom.js' ) ) {
    wp_enqueue_script('theme-custom-js', get_template_directory_uri() . '/assets/js/custom.js', ['jquery','slick'], wp_get_theme()->get('Version'), true);
  }


/**
 * CHẶN TRIỆT ĐỂ danh sách trang “màu xanh” trên TRANG CHỦ
 * - Tắt fallback của wp_nav_menu
 * - Chặn wp_list_pages / wp_page_menu
 * - Chặn block Page List / Navigation (Gutenberg)
 */
add_filter('wp_nav_menu_args', function($args){
  $args['fallback_cb'] = '__return_false';
  return $args;
});

add_filter('wp_list_pages', function($out){
  return is_front_page() ? '' : $out;
});

add_filter('wp_page_menu', function($menu){
  return is_front_page() ? '' : $menu;
}, 10, 1);

add_filter('render_block', function ($content, $block) {
  if ( is_front_page() && !empty($block['blockName']) ) {
    if ( in_array($block['blockName'], ['core/page-list','core/navigation'], true) ) {
      return '';
    }
  }
  return $content;
}, 10, 2);



// Thời gian đọc ~200wpm
function ad_reading_time($post_id = null){
  $content = get_post_field('post_content', $post_id ?: get_the_ID());
  $words = str_word_count( wp_strip_all_tags($content) );
  return max(1, ceil($words / 200));
}

// Breadcrumb rất gọn
function ad_breadcrumb(){
  if (is_front_page()) return;
  echo '<nav class="ad-bc"><a href="'.esc_url(home_url('/')).'">Trang chủ</a> › ';
  if (is_single()){
    $cat = get_the_category();
    if ($cat) echo '<a href="'.esc_url(get_category_link($cat[0]->term_id)).'">'.esc_html($cat[0]->name).'</a> › ';
    the_title();
  } elseif (is_category()){
    single_cat_title();
  } elseif (is_page()){
    the_title();
  }
  echo '</nav>';
}

/* === BLOG (Stories) helpers === */
add_theme_support('post-thumbnails');
add_image_size('story-hero', 1600, 900, true);
add_image_size('story-card', 1200, 800, true);

/* Thời lượng đọc ~200 wpm */
function md_read_time( $post_id = null ) {
    $post = get_post( $post_id ?: get_the_ID() );
    if ( ! $post ) return '';
    $words   = str_word_count( wp_strip_all_tags( $post->post_content ) );
    $minutes = max( 1, ceil( $words / 200 ) );
    return sprintf( _n('%s minute read', '%s minute read', $minutes, 'myshop'), $minutes );
}

/* Tối ưu excerpt cho lưới bài */
add_filter('excerpt_length', function($l){ return is_archive() ? 20 : $l; }, 999);
add_filter('excerpt_more', function(){ return '…'; });
