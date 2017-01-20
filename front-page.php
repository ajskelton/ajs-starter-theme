<?php
/**
 * Front Page Template
 *
 * @package AjsStarterTheme
 * @since 1.0.0
 * @author Anthony Skelton
 */
namespace AjsStarterTheme;

add_filter( 'genesis_site_title_wrap', __NAMESPACE__ . '\filter_front_page_site_title_wrap');
function filter_front_page_site_title_wrap() {
	return 'h1';
}

genesis();