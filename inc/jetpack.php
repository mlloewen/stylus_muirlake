<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package stylus_muirlake
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function stylus_muirlake_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'stylus_muirlake_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function stylus_muirlake_jetpack_setup
add_action( 'after_setup_theme', 'stylus_muirlake_jetpack_setup' );

function stylus_muirlake_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function stylus_muirlake_infinite_scroll_render
