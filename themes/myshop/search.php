<?php
/**
 * The template for displaying search results pages
 *
 * @package projectwpp
 */

get_header();
?>

<main id="primary" class="site-main container">
    <header class="page-header">
        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'projectwpp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header>

    <?php if ( have_posts() ) : ?>
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

        <?php the_posts_navigation(); ?>

    <?php else : ?>
        <p><?php _e( 'Sorry, but nothing matched your search terms.', 'projectwpp' ); ?></p>
        <?php get_search_form(); ?>
    <?php endif; ?>
</main>

<?php get_footer();


