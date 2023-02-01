<?
//Expire Promotions on Website
if ($expireTransient = get_transient($post->ID) === false) {
	set_transient($post->ID, 'set for 1 minutes', 1 * MINUTE_IN_SECONDS );
	$today = date('Y-m-d H:i:s', current_time('timestamp', 0));
	$args = array(
		'post_type' => 'promotion',
		'posts_per_page' => 200,
		'post_status' => 'publish',
		'meta_query' => array(
			array(
				'key' => 'promotion_expiration_date',
				'value' => $today,
				'compare' => '<='
			)
		)
	);
	$posts = get_posts($args);
	foreach( $posts as $post ) {
		if(get_field('promotion_expiration_date', $post->ID)) {
			$postdata = array(
				'ID' => $post->ID,
				'post_status' => 'draft'
			);
			wp_update_post($postdata);
		}
	}
}
