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


<?php get_footer();


