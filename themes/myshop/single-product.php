<?php
/**
 * Single template for custom Product CPT
 */
get_header();
?>
<main class="site-main container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="single-product">
            <div class="sp-gallery">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?>
            </div>
            <div class="sp-summary">
                <h1 class="sp-title"><?php the_title(); ?></h1>
                <?php
                $price = get_post_meta( get_the_ID(), '_price', true );
                $sale  = get_post_meta( get_the_ID(), '_sale_price', true );
                if ( $price ) : ?>
                    <div class="sp-price">
                        <?php if ( $sale && $sale < $price ) : ?>
                            <span class="sale"><?php echo number_format_i18n( $sale ); ?>₫</span>
                            <span class="regular"><?php echo number_format_i18n( $price ); ?>₫</span>
                        <?php else : ?>
                            <span class="sale"><?php echo number_format_i18n( $price ); ?>₫</span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="sp-content"><?php the_content(); ?></div>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>


