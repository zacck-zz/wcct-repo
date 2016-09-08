<?php
/**
 * @package Hello_Zacck
 * @version 0.1.1
 */
/*
Plugin Name: Zacck's Settings Plugin
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Zacck Osiemo
Version: 1.6
Author URI: http://github.com/zacck
*/

/*hooks & filters

add_action('admin_init', 'myfunction');

function myfunction() {
  echo 1+1;
  die();
}
*/

/*add options page*/
function zacck_plugin_settings() {
  add_options_page(
    'Zacck',
    'zacck',
    'manage_options',
    'zacck_plugin',
    'zacck_render_settings_page' //callback for page function
  );
}
//Register options page to the menu
add_filter('admin_menu', 'zacck_plugin_settings');

function zacck_render_settings_page() {
  ?>
  <div class="wrap">
    <h1><php _e('Zacck\'s Settings Page', 'plugin-textdomain')?></h1>
    <?php settings_error();?>
    <form method="post" actions="options.php">

    </form>
  </div>
  <?php
}
