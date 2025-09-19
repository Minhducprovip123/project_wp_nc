<?php
/**
 * Search form template
 *
 * @package projectwpp
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php _e( 'Search for:', 'projectwpp' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search …', 'projectwpp' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'projectwpp' ); ?></button>
    </form>


