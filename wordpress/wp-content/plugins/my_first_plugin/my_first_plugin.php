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

add_action('wp_head', 'put_og_tags');

function put_og_tags()
{
    if (is_single()) {

        $post_data = get_post(get_the_ID());

        $abstract = $post_data->post_excerpt;

        $post_title = $post_data->post_title;

        $site_name = get_bloginfo();

        echo "\n\n\n
        <meta property='og:title' content='$post_title'> </meta>
        <meta property='og:site_name' content='" . $site_name . "'> </meta>
        <meta property='og:url' content='" . get_permalink() . "'> </meta>
        <meta property='og:description' content='$abstract'> </meta>
        \n\n\n";
    }
}
