<?php
/*
Plugin Name: Plugin with menu
Plugin URI: https://sp.senac.br
Description: This is a beautiful plugin developed by me, he show how work with menu item on admin navbar of wp 
Version: 0.0.1
Author: Denílson Pereira
Author URI: https://sp.senac.br
License: CC By
*/

add_action('admin_init', 'set_configs');

function set_configs(){
    register_setting('configs-exemplo','api-token');
    register_setting('configs-exemplo','api-url');
}

add_action('admin_menu', 'my_menu_plugin');


function my_menu_plugin()
{
    add_menu_page(
        'My plugin configuration',
        'My plugin',
        'administrator',
        'my-plugin-config',
        'open_configurations',
        'dashicons-admin-generic'
    );

    add_submenu_page(
        'options-general.php',
        'Configurations of my plugin',
        'My plugin',
        'administrator',
        'my-plugin-config',
        'open__sub_configurations'
    );
}

function open__sub_configurations()
{
    require 'plugin_with_menu_tpl.php';
}

function open_configurations()
{
}
