<?
//Add Google Maps API to Advanced Custom Fields
function my_acf_google_map_api( $api ){
    $api['key'] = '';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
