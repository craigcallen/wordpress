<?
add_filter( 'avatar_defaults', 'new_gravatar' );
function new_gravatar ($avatar_defaults) {
$myavatar = 'https://cpower.com/wp-content/uploads/2022/12/default-user.png';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}
