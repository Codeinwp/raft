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

		new Admin();
		new Block_Patterns();
		new Block_Styles();
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

		$starter_content = new Starter_Content();

		add_theme_support( 'starter-content', $starter_content->get() );
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
	
		add_theme_support(
			'otter-onboarding',
			array(
				'templates' => array(
					'archive'    => array(
						'archive-boxed' => array(
							'file'  => RAFT_DIR . 'library/archive/archive-boxed.html',
							'title' => 'Archive Boxed',
						),
						'archive-cards' => array(
							'file'  => RAFT_DIR . 'library/archive/archive-cards.html',
							'title' => 'Archive Cards',
						),
						'archive-row'   => array(
							'file'  => RAFT_DIR . 'library/archive/archive-row.html',
							'title' => 'Archive Row',
						),
					),
					'single'     => array(
						'single-post-centered' => array(
							'file'  => RAFT_DIR . 'library/single/single-post-centered.html',
							'title' => 'Single Post Centered',
						),
						'single-post-columns'  => array(
							'file'  => RAFT_DIR . 'library/single/single-post-columns.html',
							'title' => 'Single Post Columns',
						),
						'single-post-cover'    => array(
							'file'  => RAFT_DIR . 'library/single/single-post-cover.html',
							'title' => 'Single Post Cover',
						),
					),
					'front-page' => array(
						'front-page-alt'   => array(
							'file'  => RAFT_DIR . 'library/front-end/front-page-alt.html',
							'title' => 'Landing Page',
						),
						'front-page-alt-2' => array(
							'file'  => RAFT_DIR . 'library/front-end/front-page-alt-2.html',
							'title' => 'Landing Page',
						),
					),
				),
			)
		);

		remove_theme_support( 'core-block-patterns' );

		register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'raft' ) ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 */
	public function enqueue() {
		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['frontend-css'], 'style' );
	}

	/**
	 * Add editor styles.
	 *
	 * @return void
	 */
	public function add_editor_styles() {
		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['editor-css'], 'editor' );
	}
}
