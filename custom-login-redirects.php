<?
//Login Redirects
function custom_login_redirect( $redirect_to, $request, $user ) {
if ( isset( $user->roles ) && is_array( $user->roles ) ) {
if ( in_array( 'administrator', $user->roles ) || in_array( 'editor', $user->roles ) ) {
$redirect_to = admin_url();
} else if ( in_array( 'operations', $user->roles ) || in_array( '', $user->roles ) ) {
$redirect_to = site_url( '/locations');
}
else if ( in_array( 'race_team', $user->roles ) || in_array( '', $user->roles ) ) {
$redirect_to = site_url( '/racing');
}
 else {
$redirect_to = home_url();
}
}
return $redirect_to;
}
add_filter( 'login_redirect', 'custom_login_redirect', 10, 3 );
