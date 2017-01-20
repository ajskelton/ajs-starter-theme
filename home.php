<?php
/**
 * Posts Page Template
 *
 * @package AjsStarterTheme
 * @since 1.0.0
 * @author Anthony Skelotn
 */
namespace AjsStarterTheme;

//* Add home page body class to the head
//add_filter( 'body_class', 'genesis_sample_add_body_class' );
function genesis_sample_add_body_class( $classes ) {

	$classes[] = 'home';

	return $classes;

}

//* Force full width content layout
//add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

add_filter( 'genesis_attr_content', __NAMESPACE__ . '\add_grid_classes_to_entry' );
/**
 * Add the grid styling classes to the entry context.
 *
 * @since 1.0.0
 *
 * @param array $attributes
 *
 * @return mixed
 */
function add_grid_classes_to_entry( array $attributes ) {
	$attributes['class'] .= ' one-half';

	return $attributes;
}

genesis();