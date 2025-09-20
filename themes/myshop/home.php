<?php
/**
 * The template for displaying the blog posts index (home)
 *
 * @package projectwpp
 */

get_header();
?>

<main id="primary" class="site-main container">
    <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <h1 class="page-title"><?php _e('Blog', 'projectwpp'); ?></h1>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">
                        <?php echo get_the_date(); ?>
                        <?php _e(' by ', 'projectwpp'); ?>
                        <?php the_author_posts_link(); ?>
                    </div>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        
    <?php else : ?>
        <p><?php _e('No posts found.', 'projectwpp'); ?></p>
    <?php endif; ?>
</main>




<?php get_header(); ?>

<main class="blog-archive container">
  <header class="blog-hero">
    <h1>BLOG</h1>
    <p class="sub">Tin tức, câu chuyện và cảm hứng từ adidas.</p>
  </header>

  <?php if (have_posts()) : ?>
    <section class="blog-grid">
      <?php while (have_posts()) : the_post(); ?>
        <article class="blog-card">
          <a href="<?php the_permalink(); ?>" class="thumb">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('large', ['loading' => 'lazy', 'alt' => get_the_title()]);
            } else { ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-1600x900.webp" alt="<?php the_title_attribute(); ?>">
            <?php } ?>
          </a>

          <div class="card-body">
            <div class="meta">
              <span class="cat"><?php echo get_the_category() ? esc_html(get_the_category()[0]->name) : 'Blog'; ?></span>
              <span class="dot">•</span>
              <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
            </div>

            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <p class="excerpt"><?php echo wp_trim_words( get_the_excerpt(), 22, '…' ); ?></p>

            <a class="readmore" href="<?php the_permalink(); ?>">Đọc tiếp →</a>
          </div>
        </article>
      <?php endwhile; ?>
    </section>

    <nav class="pagination">
      <?php echo paginate_links([
        'prev_text' => '← Trước',
        'next_text' => 'Sau →'
      ]); ?>
    </nav>

  <?php else : ?>
    <p>Chưa có bài viết.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>

