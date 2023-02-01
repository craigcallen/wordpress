<?
add_filter( 'sg_security_2fa_roles', 'add_user_roles_to_2fa' );
function add_user_roles_to_2fa( $roles ) {
    $roles[] = 'marketing';
    $roles[] = 'editor';
    $roles[] = 'operations';
    $roles[] = 'human_resources';
    return $roles;
}
