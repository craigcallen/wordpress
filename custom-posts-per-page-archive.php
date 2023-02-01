<?php
function change_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'promotion' ) ) {
       $query->set( 'posts_per_page', 3 );
    }

    if ( is_post_type_archive( 'post' ) ) {
       $query->set( 'posts_per_page', 13 );
    }
}
add_filter( 'pre_get_posts', 'change_posts_per_page' );
