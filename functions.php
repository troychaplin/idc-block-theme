<?php
/**
 * iDocs Block Theme Functions
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include our bundled autoload if not loaded globally.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// Instantiate our modules.
$idocs_modules = array(
	new IDOCS\Enqueues(),
);

foreach ( $idocs_modules as $idocs_module ) {
	$idocs_module->init();
}

/**
 * Enqueue custom styles
 */
// function idocs_enqueue_styles() {
// 	wp_enqueue_style(
// 		'idocs-styles',
// 		get_template_directory_uri() . '/assets/css/styles.css',
// 		array(),
// 		wp_get_theme()->get( 'Version' )
// 	);
// }
// add_action( 'wp_enqueue_scripts', 'idocs_enqueue_styles' );
