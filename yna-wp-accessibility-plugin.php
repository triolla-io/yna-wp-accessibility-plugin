<?php

/**
 * Plugin name: YNA WP Accessibility Plugin
 * Description: YNA WP Accessibility Plugin
 * Version: 1.0
 * Author: Y&A
 * Author URI: http:www.yna.co.il
 * Plugin Site: http://www.yna.co.il/%D7%A0%D7%92%D7%99%D7%A9%D7%95%D7%AA-%D7%90%D7%AA%D7%A8%D7%99-%D7%90%D7%99%D7%A0%D7%98%D7%A8%D7%A0%D7%98/
 * Textdomain: ynaap_domain
 **/

//Exit if accessed directly
if (!defined('ABSPATH')){
    exit;
}

//Global options var

$yna_accessibility_options = get_option('yna_accessibility_settings');

//Load scripts
require_once (plugin_dir_path(__FILE__) . 'inc/yna-wp-accessibility-scripts.php');

//Load Content
require_once (plugin_dir_path(__FILE__) . 'inc/yna-wp-accessibility-control.php');

//Load Settings only if on the admin side
if (is_admin()){
    require_once (plugin_dir_path(__FILE__) . 'inc/yna-wp-accessibility-settings.php');
}

//Load translation
function ynaap_load_textdomain() {
    load_plugin_textdomain( 'yna-wp-accessibility', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
}
add_action('plugins_loaded', 'ynaap_load_textdomain');
