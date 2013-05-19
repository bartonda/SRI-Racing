<?php
/**
 * WordPress.com-specific functions and definitions
 *
 * @package Superhero
 * @since Superhero 1.0
 */

global $themecolors;

/**
 * Set a default theme color array for WP.com.
 *
 * @global array $themecolors
 * @since Superhero 1.0
 */
$themecolors = array(
	'bg' => 'f2f2f2',
	'border' => 'ededed',
	'text' => '262626',
	'link' => 'ea5449',
	'url' => 'ea5449',
);

/**
 * Add support for the Featured Content Plugin
 *
 * @since Superhero 1.0
 */
add_theme_support( 'featured-content', array(
	'featured_content_filter' => 'superhero_get_featured_posts',
	'description'             => __( 'The featured content section displays on the front page above the first post in the content area.', 'superhero' ),
	'max_posts'               => 10,
) );

/**
 * Featured Posts
 *
 * @since Superhero 1.0
 */
function superhero_has_multiple_featured_posts() {
	$featured_posts = apply_filters( 'superhero_get_featured_posts', array() );
	if ( is_array( $featured_posts ) && 1 < count( $featured_posts ) )
		return true;

	return false;
}

function superhero_get_featured_posts() {
	return apply_filters( 'superhero_get_featured_posts', false );
}