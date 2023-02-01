<?
function custom_admin_logo() {
   echo '
   <style type="text/css">
       #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
           background-image: url(' . get_bloginfo('stylesheet_directory') . 'https://craigcallen.com/wp-content/uploads/2022/09/allen-media-website-dashboard-menu-icon.svg) !important;
           background-position: 0 0;
           color:rgba(0, 0, 0, 0);
           background-size: cover;
       }
       #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
           background-position: 0 0;
       }
    </style>
    ';
}
add_action('wp_before_admin_bar_render', 'custom_admin_logo');