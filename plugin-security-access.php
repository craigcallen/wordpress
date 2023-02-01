<?
$plugin_credentials = array(
    'ctabora' => array(
            'Custom Post Type Permalinks' => 1
    ),
    'jnicholas' => array(
            'Custom Post Type Permalinks' => 1,
            'Jetpack' => 1,
    ),
    'craig.allen@cpower.com' => "**ALL**"
);

function plugin_permissions($plugins)
{
        global $current_user, $plugin_credentials;

        $username = $current_user->user_login;

        if ($plugin_credentials[$username] == "**ALL**")
                return $plugins;

        $viewable_plugins = array();

        foreach ($plugins as $plugin) {
                if (isset($plugin_credentials[$username]) &&
                        isset($plugin_credentials[$username][$plugin['Name']]) &&
                        $plugin_credentials[$username][$plugin['Name']] == 1) {

                        array_push($viewable_plugins, $plugin);
                }
        }
        return $viewable_plugins;
}

add_filter('all_plugins', 'plugin_permissions');