<?php get_header(); ?>

<main class="single container">

  <article <?php post_class('post'); ?>>
    <header class="post-hero">
      <?php if (has_post_thumbnail()) : ?>
        <div class="hero-img">
          <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
        </div>
      <?php endif; ?>

      <h1 class="post-title"><?php the_title(); ?></h1>

      <div class="post-meta">
        <span class="author">bởi <?php the_author(); ?></span>
        <span class="dot">•</span>
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
        <?php if (has_category()) : ?>
          <span class="dot">•</span>
          <span class="cats"><?php the_category(', '); ?></span>
        <?php endif; ?>
      </div>
    </header>

    <div class="post-content">
      <?php the_content(); ?>

      <div class="cta-area">
        <a class="btn" href="/san-pham/">Xem sản phẩm liên quan</a>
        <a class="btn outline" href="/dang-ky-adiclub/">Đăng ký adiClub</a>
      </div>

      <?php the_tags('<div class="post-tags">Từ khóa: ', ', ', '</div>'); ?>
    </div>

    <footer class="post-footer">
      <nav class="post-nav">
        <div class="prev"><?php previous_post_link('%link','← %title'); ?></div>
        <div class="next"><?php next_post_link('%link','%title →'); ?></div>
      </nav>

      <?php
      // Bài liên quan theo Category
      $cats = wp_get_post_categories(get_the_ID());
      if ($cats) :
        $q = new WP_Query([
          'posts_per_page' => 3,
          'post__not_in'   => [get_the_ID()],
          'cat'            => $cats[0]
        ]);
        if ($q->have_posts()) : ?>
          <section class="related">
            <h3>Bài viết liên quan</h3>
            <div class="blog-grid">
              <?php while ($q->have_posts()) : $q->the_post(); ?>
                <article class="blog-card compact">
                  <a href="<?php the_permalink(); ?>" class="thumb"><?php the_post_thumbnail('large'); ?></a>
                  <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </article>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </section>
        <?php endif; endif; ?>
    </footer>
  </article>

  <?php comments_template(); ?>
</main>

<?php get_footer(); ?>
