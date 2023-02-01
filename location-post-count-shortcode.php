<?
// Get Post Count for Central Power Locations
add_shortcode('location_count', 'post_count');
function post_count() {
    $count_posts = wp_count_posts('location');
    return $published_posts = $count_posts->publish;
    echo $published_posts . ' ';
}
