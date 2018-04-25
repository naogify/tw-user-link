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
/*	$pattern     = array( '/(<a.*?>(.*?)<\/a>)/' );*/
//	$replacement = array( '$0' );
//	$content = preg_replace( $pattern, $replacement, $content );
//	var_dump( $content );
	/*	$pattern     = array( '/(?!(<a.*?>(.*?)<\/a>))(?=(@[0-9a-z_]{1,15}))/i' );*/
//	$replacement = array( '<a href="https://twitter.com/' . '$0' . '">' . '$0' . '</a>' );


//	$content = '<p id="'.'/@wordpress'.'">@wordpress<\/p>@NaokiUs';
	$pattern     = array( '/^(?!.*(<a.*?>))(?=.*(@[0-9a-z_]{1,15}))/i' );
	$content = preg_replace_callback(
		$pattern,
		function ($matches) {
			var_dump( $matches );
			return $matches;
		},
		$content
	);

	var_dump( $content );

	return $content;
}
