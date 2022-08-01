<?php
/**
 * Raft functions file
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

/**
 * Bootstrap the theme.
 *
 * @return void
 */
function bootstrap() {
	define_constants();
	load_dependencies();
	run();
}

/**
 * Define theme constants.
 *
 * @return void
 */
function define_constants() {
	define( 'RAFT_VERSION', '0.0.1' );
	define( 'RAFT_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
	define( 'RAFT_DIR', trailingslashit( get_template_directory() ) );
	define( 'RAFT_URL', trailingslashit( get_template_directory_uri() ) );
}

/**
 * Load composer dependencies.
 *
 * @return void
 */
function load_dependencies() {
	require_once RAFT_DIR . '/vendor/autoload.php';
}

/**
 * Run theme core.
 *
 * @return void
 */
function run() {
	Core::get_instance();
}

bootstrap();
