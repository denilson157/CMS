<?php
/*
Plugin Name: My First Plugin
Plugin URI: https://sp.senac.br
Description: This is a plugin developed by me
Version: 0.0.1
Author: Denílson Pereira
Author URI: https://sp.senac.br
License: CC By
*/

add_filter('login_errors', 'change_login_message');

function change_login_message()
{
    return "Invalid Credentials";
}
