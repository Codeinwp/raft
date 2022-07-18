<?php
/**
 * Main theme class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

/**
 * Class Core
 *
 * @package Raft
 */
class Core {
	/**
	 * Core instance.
	 *
	 * @var Core
	 */
	public static $_instance = null;

	/**
	 * Get the static instance of the class.
	 *
	 * @return Core
	 */
	public static function get_instance() {
		if ( null === self::$_instance ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Core constructor.
	 */
	public function __construct() {
		$this->run_hooks();

		new Block_Patterns();
		new Block_Styles();
	}

	/**
	 * Initialize hooks.
	 *
	 * @return void
	 */
	private function run_hooks() {
		add_action( 'after_setup_theme', [ $this, 'setup' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ] );
		add_action( 'enqueue_block_assets', [ $this, 'add_editor_styles' ] );
	}

	/**
	 * Setup theme.
	 *
	 * @return void
	 */
	public function setup() {
		load_theme_textdomain( 'raft', RAFT_DIR . '/languages' );

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);


		register_nav_menus( [ 'primary' => esc_html__( 'Primary Menu', 'raft' ) ] );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 */
	public function enqueue() {
		wp_register_style( 'raft-style', RAFT_URL . 'assets/css/build/style.css', [], RAFT_VERSION );
		wp_style_add_data( 'raft-style', 'rtl', 'replace' );
		wp_enqueue_style( 'raft-style' );

		wp_add_inline_style( 'raft-style', $this->get_webfonts_inline_style() );
	}

	/**
	 * Add editor styles.
	 *
	 * @return void
	 */
	public function add_editor_styles() {
		wp_register_style( 'raft-editor', RAFT_URL . 'assets/css/build/editor.css', [], RAFT_VERSION );
		wp_style_add_data( 'raft-editor', 'rtl', 'replace' );
		wp_enqueue_style( 'raft-editor' );

		wp_add_inline_style( 'raft-editor', $this->get_webfonts_inline_style() );
	}

	/**
	 * Webfonts inline CSS.
	 *
	 * @return string
	 */
	private function get_webfonts_inline_style(): string {
		$vendor_file = RAFT_DIR . 'vendor/wptt/webfont-loader/wptt-webfont-loader.php';

		if ( ! is_readable( $vendor_file ) ) {
			return '';
		}

		require_once $vendor_file;

		$families = [
			'Readex Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600',
		];

		$fonts_url = add_query_arg(
			[
				'family'  => implode( '&family=', $families ),
				'display' => 'swap',
			],
			'https://fonts.googleapis.com/css2'
		);

		$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ), 'woff' );

		return "@import url({$contents});";
	}
}