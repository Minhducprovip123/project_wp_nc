<?php
/**
 * Template for Product Category archives
 */
get_header();
?>
<main class="site-main container">
    <div class="category-header">
        <h1><?php single_term_title(); ?></h1>
        <p class="category-count"><?php echo $wp_query->found_posts; ?> sản phẩm</p>
    </div>
    
    <div class="category-layout">
        <aside class="filters-sidebar">
            <h3>Lọc sản phẩm</h3>
            
            <div class="filter-group">
                <h4>Giá</h4>
                <div class="price-range">
                    <input type="range" min="0" max="10000000" value="5000000" class="price-slider">
                    <div class="price-display">
                        <span class="min-price">0₫</span> - <span class="max-price">5.000.000₫</span>
                    </div>
                </div>
            </div>
            
            <div class="filter-group">
                <h4>Kích thước</h4>
                <div class="size-filters">
                    <label><input type="checkbox" value="S"> S</label>
                    <label><input type="checkbox" value="M"> M</label>
                    <label><input type="checkbox" value="L"> L</label>
                    <label><input type="checkbox" value="XL"> XL</label>
                </div>
            </div>
            
            <div class="filter-group">
                <h4>Màu sắc</h4>
                <div class="color-filters">
                    <label><input type="checkbox" value="black"> <span class="color-swatch black"></span> Đen</label>
                    <label><input type="checkbox" value="white"> <span class="color-swatch white"></span> Trắng</label>
                    <label><input type="checkbox" value="red"> <span class="color-swatch red"></span> Đỏ</label>
                    <label><input type="checkbox" value="blue"> <span class="color-swatch blue"></span> Xanh</label>
                </div>
            </div>
            
            <div class="filter-group">
                <h4>Sắp xếp</h4>
                <select class="sort-select">
                    <option value="newest">Mới nhất</option>
                    <option value="price-low">Giá thấp đến cao</option>
                    <option value="price-high">Giá cao đến thấp</option>
                    <option value="name">Tên A-Z</option>
                </select>
            </div>
            
            <button class="clear-filters">Xóa bộ lọc</button>
        </aside>
        
        <div class="products-area">
            <div class="products-header">
                <div class="view-toggle">
                    <button class="grid-view active" data-view="grid">⊞</button>
                    <button class="list-view" data-view="list">☰</button>
                </div>
            </div>
            
            <div class="product-grid">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="product-card">
                        <a href="<?php the_permalink(); ?>" class="thumb">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?>
                            <?php 
                            $post_date = get_the_date('Y-m-d');
                            $days_old = (strtotime('now') - strtotime($post_date)) / (60 * 60 * 24);
                            if ( $days_old <= 30 ) : ?>
                                <span class="product-badge new">Mới</span>
                            <?php endif; ?>
                            <?php 
                            $sale = get_post_meta( get_the_ID(), '_sale_price', true );
                            if ( $sale ) : ?>
                                <span class="product-badge sale">Giảm giá</span>
                            <?php endif; ?>
                        </a>
                        <h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php
                        $price = get_post_meta( get_the_ID(), '_price', true );
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
                        <button class="quick-add-btn" data-product-id="<?php the_ID(); ?>">Thêm nhanh</button>
                    </article>
                <?php endwhile; else: ?>
                    <p>Không tìm thấy sản phẩm nào trong danh mục này.</p>
                <?php endif; ?>
            </div>
            
            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
