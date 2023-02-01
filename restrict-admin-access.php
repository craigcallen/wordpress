<?
//Redirect Users from Dashboard Access
add_action( 'init', 'blockusers_init' ); function blockusers_init() {
  if ( is_admin() && ! current_user_can( 'administrator' , 'editor' , 'marketing' )
  && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
    wp_redirect( home_url() ); exit; }
  }
