<?
//Add Favicon to Backend and Login Page
function add_site_favicon() {
    echo '<link rel="shortcut icon"
href="https://cpower.com/wp-content/uploads/2022/10/cpower-favicon.svg" />';
}

add_action('login_head', 'add_site_favicon');
add_action('admin_head', 'add_site_favicon');
add_action('customize_head', 'add_site_favicon');
