<?php
//This will prepend your WordPress RSS feed content with the featured image
add_filter('the_content', 'smartwp_featured_image_in_rss_feed');
function smartwp_featured_image_in_rss_feed( $content ) {
global $post;
if( is_feed() ) {
if ( has_post_thumbnail( $post->ID ) ){
$prepend = '<span>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 10px;' ) ) . '</span>';
$content = $prepend . $content;
 }
 }
return $content;
}
