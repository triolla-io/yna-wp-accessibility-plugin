<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('ABSPATH')){
    exit;
}
//Add Plugin's Scripts
function yna_accessibility_add_scripts(){
    //Enqueue Styles
    wp_enqueue_style('ynaap-font-awesome', plugins_url() . '/yna-wp-accessibility-plugin/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('ynaap-main-style', plugins_url() . '/yna-wp-accessibility-plugin/css/yna-wp-accessibility-styles.css');

    //Enqueue Scripts
    wp_enqueue_script('ynaap-main-scripts', plugins_url() . '/yna-wp-accessibility-plugin/js/yna-wp-accessibility-scripts.js');
}
add_action('wp_enqueue_scripts','yna_accessibility_add_scripts' );