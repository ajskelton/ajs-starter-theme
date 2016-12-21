<?php
/**
 * Customizer handler.
 *
 * @package   AjsStarterTheme
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */
namespace AjsStarterTheme;

use WP_Customize_Color_Control;

add_action( 'customize_register', __NAMESPACE__ . '\register_with_customizer' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function register_with_customizer( $wp_customize ) {

	$prefix = get_settings_prefix();

//	global $wp_customize;

	$wp_customize->add_section(
		$prefix . '_colors',
		array(
			'title'    => __( 'Theme Colors', CHILD_TEXT_DOMAIN ),
			'priority' => 12,
		)
	);

	$wp_customize->add_setting(
		$prefix . '_link_color',
		array(
			'default'           => get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$prefix . '_link_color',
			array(
				'description' => __( 'Change the default color for linked titles, menu links, post info links and more.', 'genesis-sample' ),
				'label'       => __( 'Link Color', CHILD_TEXT_DOMAIN ),
				'section'     => $prefix . '_colors',
				'settings'    => 'link_color',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix . '_accent_color',
		array(
			'default'           => get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$prefix . '_accent_color',
			array(
				'description' => __( 'Change the default color for button hovers.', CHILD_TEXT_DOMAIN ),
				'label'       => __( 'Accent Color', CHILD_TEXT_DOMAIN ),
				'section'     => $prefix . '_colors',
				'settings'    => 'accent_color',
			)
		)
	);

}

//add_action( 'customize_register', __NAMESPACE__ . '\test_customizer' );
//function test_customizer( $wp_customize ) {
//	$wp_customize->add_section(
//		'ajs_test_section',
//		array(
//			'title' => 'Custom Section',
//		)
//	);
//
//	$wp_customize->add_setting(
//		'ajs_custom_text',
//		array(
//			'default' => 'Lorem Ipsum',
//			'sanitize_callback' => 'sanitize_text_field',
//		)
//	);
//
//	$wp_customize->add_control(
//		'ajs_custom_text',
//		array(
//			'type' => 'text',
//			'section' => 'ajs_test_section',
//			'label' => __( 'Custom Text' ),
//			'description' => __( 'This is a custom text box' ),
//		)
//	);
//}