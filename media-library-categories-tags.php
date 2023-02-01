<?php
// Apply Category Taxonomy to Media Library 
function wptp_add_categories_to_attachments() {
	register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );

// Apply Tag Taxonomy to Media Library 
function wptp_add_tags_to_attachments() {
	register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
add_action( 'init' , 'wptp_add_tags_to_attachments' );