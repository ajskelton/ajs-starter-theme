<?php
/**
 * Content HTML markup structure
 *
 * @package   AjsStarterTheme\Structure
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */
namespace AjsStarterTheme\Structure;

add_action( 'genesis_before_loop', __NAMESPACE__ . '\content_markup_open', 5 );
/**
 * Echo the opening structural markup for the header.
 *
 * @since 1.2.0
 */
function content_markup_open() {

	genesis_structural_wrap( 'content' );

}

add_action( 'genesis_after_loop', __NAMESPACE__ . '\content_markup_close', 15 );
function content_markup_close() {

	genesis_structural_wrap( 'content', 'close' );

}