<?php
/**
 * Archive template for custom Product CPT
 */
get_header();
?>
<main class="site-main container">
    <h1><?php post_type_archive_title(); ?></h1>
    <div class="product-grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="product-card">
                <a href="<?php the_permalink(); ?>" class="thumb">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?>
                </a>
                <h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php
                $price = get_post_meta( get_the_ID(), '_price', true );
                $sale  = get_post_meta( get_the_ID(), '_sale_price', true );
                if ( $price ) : ?>
                    <div class="product-price">
                        <?php if ( $sale && $sale < $price ) : ?>
                            <span class="sale"><?php echo number_format_i18n( $sale ); ?>₫</span>
                            <span class="regular"><?php echo number_format_i18n( $price ); ?>₫</span>
                        <?php else : ?>
                            <span class="sale"><?php echo number_format_i18n( $price ); ?>₫</span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile; endif; ?>
    </div>
    <div class="pagination"><?php the_posts_pagination(); ?></div>
</main>
<?php get_footer(); ?>


