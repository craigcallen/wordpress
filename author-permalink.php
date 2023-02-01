<?
//Change Author Permalink to TEQRZ
add_action('init','change_author_permalinks');

function change_author_permalinks()
{
    global $wp_rewrite;
   //Change 'member' to be the base URL you wish to use
    $wp_rewrite->author_base = 'user';
    $wp_rewrite->author_structure = '/' . $wp_rewrite->author_base. '/%author%';
}
