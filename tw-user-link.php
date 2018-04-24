<?php
/**
 * Plugin Name:     Tw User Link
 * Plugin URI:      https://github.com/naogify/tw-user-link
 * Description:     Search twitter user name and replace it to it's link from article.
 * Author:          Naoki Ohashi
 * Author URI:      https://naoki-is.me/
 * Text Domain:     tw-user-link
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Tw_User_Link
 */

add_filter( 'the_content', 'replace_tw_user_name_to_link' );
/**
 * Function search twitter username and make link for it.
 *
 * @param string $content Content of post.
 *
 * @return string
 */
function replace_tw_user_name_to_link( $content ) {
	$content = preg_replace( '/@[0-9a-z_]{1,15}/i', '<a href="https://twitter.com/' . '$0' . '">' . '$0' . '</a>', $content );

	return $content;
}
