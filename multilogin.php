<?php
/**
 * Plugin Name: QuickSocials
 * Plugin URI: https://www.multilogin.nl
 * Description: Test WP Plugin.
 * Version: 0.01
 * Author: Jeroen Huiskes
 * Author URI: https://www.rac-software.nl
 **/

add_action('admin_menu', 'multilogin_plugin_setup_menu');

function quicksocials_plugin_setup_menu()
{
    add_menu_page('Multi Login Page', 'Multi-Login', 'manage_options', 'multilogin-plugin', 'multilogin_init');
}

function multilogin_init()
{
    echo 'Multi Login a RAC-Software company';
}





