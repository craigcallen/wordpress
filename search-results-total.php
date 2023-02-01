<?
// Alter search posts per page
function amdd_search_posts_per_page( $query) {
    if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_filter( 'pre_get_posts', 'amdd_search_posts_per_page' );
