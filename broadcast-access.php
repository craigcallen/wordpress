<?
function my_threewp_broadcast_get_user_writable_blogs( $action )
{
    $users_and_blogs = [
        // User ID  	// Blog IDs
        2		=>		[ 2, 3 ],
        11		=>		[ 2, 3 ],
    ];
    if ( ! isset( $users_and_blogs[ $action->user_id ] ) )
        return;
    
    foreach( $users_and_blogs[ $action->user_id ] as $blog_id )
        $action->add_access( $blog_id );
}
// Broadcast fills the blog list at prio 100, so use a higher number.
add_action( 'threewp_broadcast_get_user_writable_blogs', 'my_threewp_broadcast_get_user_writable_blogs', 200 );