<?php
/**
 * Template Name: Blog (Stories)
 */
get_header();

/* Cấu hình category tabs: tên hiển thị => slug */
$story_cats = [
  'All Stories'    => '',
  'Running'        => 'running',
  'Training'       => 'training',
  'Sustainability' => 'sustainability',
];

/* Tab đang chọn (theo param ?cat=slug) */
$current_slug = isset($_GET['cat']) ? sanitize_key($_GET['cat']) : '';

/* Truy vấn HERO: bài mới nhất trong tab (hoặc tất cả) */
$hero_args = [
  'post_type'           => 'post',
  'posts_per_page'      => 1,
  'ignore_sticky_posts' => true,
];
if ( $current_slug ) {
  $hero_args['category_name'] = $current_slug;
}
$hero_q = new WP_Query($hero_args);

/* Chuẩn bị truy vấn GRID (bỏ trùng hero) */
$exclude_ids = $hero_q->have_posts() ? wp_list_pluck( $hero_q->posts, 'ID' ) : [];

$paged = max(1, get_query_var('paged') ?: get_query_var('page'));
$grid_args = [
  'post_type'           => 'post',
  'posts_per_page'      => 9,
  'paged'               => $paged,
  'post__not_in'        => $exclude_ids,
  'ignore_sticky_posts' => true,
];
if ( $current_slug ) {
  $grid_args['category_name'] = $current_slug;
}
$grid_q = new WP_Query($grid_args);
?>

<main class="stories-wrap container">

  <!-- Tabs -->
  <nav class="stories-tabs">
    <?php foreach ($story_cats as $label => $slug): 
      $url = $slug ? add_query_arg('cat', $slug, get_permalink()) : remove_query_arg('cat', get_permalink());
      $active = ($slug === $current_slug) ? 'is-active' : '';
    ?>
      <a class="stories-tab <?php echo esc_attr($active); ?>" href="<?php echo esc_url($url); ?>">
        <?php echo esc_html($label); ?>
      </a>
    <?php endforeach; ?>
  </nav>

  <!-- HERO -->
  <?php if ( $hero_q->have_posts() ): $hero_q->the_post(); ?>
    <article class="story-hero">
      <a class="hero-media" href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('story-hero');
        } else { ?>
          <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/placeholder-1600x900.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
        <?php } ?>
      </a>
      <div class="hero-meta">
        <div class="meta-top">
          <span class="meta-author"><?php the_author(); ?></span>
          <span class="meta-date"><?php echo get_the_date('F d, Y'); ?></span>
          <span class="meta-read"><?php echo esc_html( md_read_time() ); ?></span>
        </div>
        <h2 class="hero-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="hero-excerpt"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
      </div>
    </article>
  <?php endif; wp_reset_postdata(); ?>

  <!-- GRID -->
  <?php if ( $grid_q->have_posts() ): ?>
    <section class="stories-grid">
      <?php while( $grid_q->have_posts() ): $grid_q->the_post(); ?>
        <article class="story-card">
          <a class="card-media" href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail('story-card');
            } else { ?>
              <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/placeholder-1200x800.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
            <?php } ?>
          </a>
          <div class="card-body">
            <div class="card-top">
              <?php
                $cats = get_the_category();
                if ( $cats ) {
                  echo '<span class="card-cat">'.esc_html( $cats[0]->name ).'</span>';
                }
              ?>
              <span class="card-read"><?php echo esc_html( md_read_time() ); ?></span>
            </div>
            <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="card-excerpt"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
          </div>
        </article>
      <?php endwhile; ?>
    </section>

    <!-- Pagination -->
    <nav class="stories-pagination">
      <?php
        echo paginate_links([
          'total'   => $grid_q->max_num_pages,
          'current' => $paged,
          'mid_size'=> 2
        ]);
      ?>
    </nav>
  <?php else: ?>
    <p>Chưa có bài viết trong mục này.</p>
  <?php endif; wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
