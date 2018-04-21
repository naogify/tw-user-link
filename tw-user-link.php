<?php
/**
 * Plugin Name:     Tw User Link
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     tw-user-link
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Tw_User_Link
 */
add_filter('the_content', 'replace_tw_user_name_to_link');

function replace_tw_user_name_to_link($content){

    if(preg_match("/@[0-9a-z_]{1,15}/i",$content, $search)){

         $user = $search[0];
         $content = str_replace("$user", '<a href="https://twitter.com/'.esc_attr($user).'">'.esc_attr($user).'</a>', $content);
    }
    return $content;

}