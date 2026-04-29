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
	new IDOCS\Block_Functions(),
);

foreach ( $idocs_modules as $idocs_module ) {
	$idocs_module->init();
}
