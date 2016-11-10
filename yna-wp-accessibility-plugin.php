<?php

/**
 * Plugin name: YNA WP Accessibility Plugin
 * Description: YNA WP Accessibility Plugin
 * Version: 1.0
 * Author: Y&A
 * Author URI: http:www.yna.co.il
 * Plugin Site: http://www.yna.co.il/נגישות-אתרי-אינטרנט/
 * 
 **/

//Exit if accessed directly
if (!defined('ABSPATH')){
    exit;
}

//Global options var

$yna_accessibility = get_option('yna_accessibility_options');

//Load scripts
require_once (plugin_dir_path(__FILE__) . 'inc/yna-wp-accessibility-scripts.php');

//Load Content
require_once (plugin_dir_path(__FILE__) . 'inc/yna-wp-accessibility-control.php');

//Load Settings only if on the admin side
if (is_admin()){
    require_once (plugin_dir_path(__FILE__) . 'inc/yna-wp-accessibility-settings.php');
}