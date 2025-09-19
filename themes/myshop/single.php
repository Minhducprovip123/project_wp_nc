<?php
/**
 * The template for displaying single posts
 *
 * @package projectwpp
 */

get_header();
?>

<main id="primary" class="site-main container">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    <?php echo get_the_date(); ?>
                    <?php _e(' by ', 'projectwpp'); ?>
                    <?php the_author_posts_link(); ?>
                </div>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <footer class="entry-footer">
                <?php the_tags('<span class="tags">', ', ', '</span>'); ?>
            </footer>
        </article>

        <?php comments_template(); ?>
    <?php endwhile; ?>
</main>

<?php get_footer();


