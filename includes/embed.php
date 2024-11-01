<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Vidme embed
 * Register embed handler.
 *
 * @since 1.0
 */
function vidme_embed_handler( $matches, $attr, $url, $rawattr ) {

	// Generate embed code
	$embed = sprintf(
		'<iframe src="https://vid.me/e/%1$s" width="480" height="360" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>',
		esc_attr( $matches[1] )
	);

	// Return embed code
	return apply_filters( 'embed_vidme', $embed, $matches, $attr, $url, $rawattr );

}
function vidme_embed() {

	// Register embed handler
	wp_embed_register_handler(
		'vidme',
		'#https?://vid.me/(.*)#i',
		'vidme_embed_handler'
	);

}
add_action( 'init', 'vidme_embed' );
