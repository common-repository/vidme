<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.1
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Vidme shortcode
 * Register Shortcode.
 *
 * @since 1.1
 */
function vidme_shortcode( $atts ) {

	// Set default values
	$atts = shortcode_atts(
		array(
			'id'       => '',
			'width'    => '640',
			'height'   => '360',
			'autoplay' => '0',
			'repeat'   => '0',
			'mute'     => '0'
		), $atts );

	// Embed code
	$embed_code = '<iframe src="https://vid.me/e/' . esc_attr( $atts['id'] ) . '?autoplay=' . esc_attr( $atts['autoplay'] ) . '&amp;loop=' . esc_attr( $atts['repeat'] ) . '&amp;muted=' . esc_attr( $atts['mute'] ) . '" width="' . esc_attr( $atts['width'] ) . '" height="' . esc_attr( $atts['height'] ) . '" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>';

	// Return embed code
	return $embed_code;

}
add_shortcode( 'vidme', 'vidme_shortcode' );
