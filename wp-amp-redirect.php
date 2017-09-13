<?php
/*
  Plugin Name: AMP Redirect
  Plugin URI:
  Description: Provides redirect to amp theme
  Author: Nikita Murzin
  Author URI: murzin@bluefountainmedia.com
  Version: 1.0
  License: GPL2
 */

// If this file is accessed directory, then abort.
if (!defined('WPINC')) {
    die;
}

define('AMP_REDIRECT_SETTINGS_GROUP', 'wp_amp_redirect_settings_group');
define('AMP_REDIRECT_OPTION', 'wp_amp_redirect_template');

include_once 'class-amp-redirect-options.php';
include_once 'class-amp-redirect-options-helper.php';

add_action('plugins_loaded', 'wp_amp_redirect_init');

function wp_amp_redirect_init()
{
    $options_page = new AMP_Redirect_Options(AMP_Redirect_Options_Helper::get_existing_themes());
    $options_page->init();
}

//add_action('plugins_loaded', 'amp_redirect_init', 1);
//
//function amp_redirect_init()
//{
//    add_filter('stylesheet', 'check_correct_theme');
//    add_filter('template', 'check_correct_theme');
//}
//
//
//function check_correct_theme()
//{
//    return (!empty($_GET['amp'])) ? 'theme_name1' : 'theme_name2';
//}