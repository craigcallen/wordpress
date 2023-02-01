<?php
function amdd_pre_get_posts( $query ) {
	// do not modify queries in the admin
	if( is_admin() ) {

		return $query;

	}
	// only modify queries for 'event' post type
	if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'event' ) {

		$query->set('orderby', 'event_start_date');
		$query->set('meta_key', 'event_start_date');
		$query->set('order', 'ASC');
	}
	// return
	return $query;
}
add_action('pre_get_posts', 'amdd_pre_get_posts');
