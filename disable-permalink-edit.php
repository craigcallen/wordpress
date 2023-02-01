<?php
function remove_quick_edit( $actions ) {
    unset($actions['inline hide-if-no-js']);
    return $actions;
}
if ( ! current_user_can('manage_options') ) {
    add_filter('post_row_actions','remove_quick_edit',10,1);
}