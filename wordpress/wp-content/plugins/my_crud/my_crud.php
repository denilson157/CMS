<?php
/*
* Plugin Name: Crud example in configuration screen
* Plugin URI: https://sp.senac.br
* Description: This is a beautiful plugin developed by me, he show how work with menu item on admin navbar of wp 
* Version: 0.0.1
* Author: Denílson Pereira
* Author URI: https://sp.senac.br
* License: CC By
*/

if(!defined('WPINC')) exit;

register_activation_hook(__FILE__, 'create_table');

function create_table(){

    global $wpdb;

$wpdb->query("CREATE TABLE {$wpdb->prefix}agenda
            (   id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(255) NOT NULL,
                whatsapp VARCHAR(255) NOT NULL,
            )
        ");

}

