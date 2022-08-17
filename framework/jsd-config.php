<?php

/**
 * 
 * Config file for JSDIZAJNER Themes
 * Version: 1.0.0
 * Date created: 9/11/2020
 * All rights reserved (c) 2021 Július Sipos
 * 
 */

$theme = wp_get_theme();

if ( ! empty( $theme['Template'] ) ) {
	$theme = wp_get_theme( $theme['Template'] );
}

if ( ! defined( 'DS' ) ) {
	define( 'DS', DIRECTORY_SEPARATOR );
}

/*
* Defined Constant
*/

define( 'JSD_THEME_NAME', $theme['Name'] );
define( 'JSD_THEME_VERSION', $theme['Version'] );
define( 'JSD_THEME_DIR', get_template_directory() ); /* Usage: JSD_FRAMEWORK_DIR . '/xx/xx.php'; */
define( 'JSD_THEME_URI', get_template_directory_uri() ); /* Usage: <?php echo JSD_THEME_URI ?> */
define( 'JSD_THEME_ASSETS_URI', get_template_directory_uri() . '/assets' );
define( 'JSD_THEME_IMAGE_URI', JSD_THEME_ASSETS_URI . '/images' );
define( 'JSD_FRAMEWORK_DIR', get_template_directory() . "/framework" );
define( 'JSD_FRAMEWORK_LOCALIZE', get_template_directory() . "/languages" );
define( 'JSD_WIDGETS_DIR', get_template_directory() . DS . 'widgets' );
define( 'JSD_CUSTOMIZER_DIR', JSD_THEME_DIR . DS . 'customizer' );
define( 'JSD_PROTOCOL', is_ssl() ? 'https' : 'http' );
define( 'JSD_IS_RTL', is_rtl() ? true : false );


/*
* Load Framework.
*/
require_once JSD_FRAMEWORK_DIR . '/jsd-remove-admin-menu.php';
require_once JSD_FRAMEWORK_DIR . '/jsd-nav-walker.php';
require_once JSD_FRAMEWORK_DIR . '/jsd-theme-support.php';

/**
* Navigation Nav Walker and Functions
*/

register_nav_menus([
	'primary' => esc_html__('Main Navigation', 'sequenex'),
	'footer_site' => esc_html__('Footer Menu 1', 'sequenex'),
	'footer_services' => esc_html__('Footer Menu 2', 'sequenex')
]);