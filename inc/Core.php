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
 * @package raft
 */
class Core {
	/**
	 * Core instance.
	 *
	 * @var Core
	 */
	public static $instance = null;

	/**
	 * Get the static instance of the class.
	 *
	 * @return Core
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Core constructor.
	 */
	public function __construct() {
		$this->run_hooks();

		new Block_Patterns();
		new Block_Styles();
		new Font_Manager();
	}

	/**
	 * Initialize hooks.
	 *
	 * @return void
	 */
	private function run_hooks() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'add_editor_styles' ) );
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


		register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'raft' ) ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 */
	public function enqueue() {
		$handle = Constants::ASSETS_SLUGS['frontend-css'];

		wp_register_style( $handle, RAFT_URL . 'assets/css/build/style.css', array(), RAFT_VERSION );
		wp_style_add_data( $handle, 'rtl', 'replace' );
		wp_enqueue_style( $handle );
	}

	/**
	 * Add editor styles.
	 *
	 * @return void
	 */
	public function add_editor_styles() {
		$handle = Constants::ASSETS_SLUGS['editor-css'];
		wp_register_style( $handle, RAFT_URL . 'assets/css/build/editor.css', array(), RAFT_VERSION );
		wp_style_add_data( $handle, 'rtl', 'replace' );
		wp_enqueue_style( $handle );
	}
}
