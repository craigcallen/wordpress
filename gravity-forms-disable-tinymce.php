<?php
add_action( 'admin_init', 'disable_tinymce_for_notifications');
function disable_tinymce_for_notifications() {
    if ( ( RGForms::is_gravity_page() && rgget( 'page' ) === 'gf_edit_forms' && rgget( 'view' ) === 'settings' ) && rgget( 'subview' ) === 'notification' ) {
        add_filter( 'user_can_richedit', '__return_false' );
    }
}
