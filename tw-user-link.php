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
	if ( preg_match_all( '/@[0-9a-z_]{1,15}/i', $content, $search ) ) {
		$user      = $search[0];
		$protocols = array( 'http', 'https' );
		foreach ( $user as $value ) {
			$content = str_replace( "$value", '<a href="' . esc_url( 'https://twitter.com/' . $value, $protocols ) . '">' . esc_html( $value ) . '</a>', $content );
		}
	}

	return $content;
}
