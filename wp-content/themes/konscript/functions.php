<?php
/**
 * Functions (functions.php)
 * Will reach and require the necessary functions and libraries. It's here because WP expects it as default for custom functions.
 */

// Load Hybrid core theme framework.
require_once( trailingslashit( TEMPLATEPATH ) . 'hybrid-core/hybrid.php' );
$theme = new Hybrid();

// Load the core/main function
require_once( trailingslashit( TEMPLATEPATH ) . 'functions/main.php' );

// Load the admin-only function
if (is_admin()) {
	require_once( trailingslashit( TEMPLATEPATH ) . 'functions/admin.php' );
}
?>