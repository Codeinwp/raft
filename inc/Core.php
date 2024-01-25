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
		add_filter( 'raft_strings', array( $this, 'strings' ) );
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
				'logo'           => RAFT_URL . 'assets/img/logo.svg',
				'templates'      => array(
					'archive'    => array(
						'archive-boxed' => array(
							'file'  => RAFT_DIR . 'library/archive/archive-boxed.php',
							'title' => __( 'Archive Boxed', 'raft' ),
						),
						'archive-cards' => array(
							'file'  => RAFT_DIR . 'library/archive/archive-cards.php',
							'title' => __( 'Archive Cards', 'raft' ),
						),
						'archive-row'   => array(
							'file'  => RAFT_DIR . 'library/archive/archive-row.php',
							'title' => __( 'Archive Row', 'raft' ),
						),
					),
					'single'     => array(
						'single-post-centered' => array(
							'file'  => RAFT_DIR . 'library/single/single-post-centered.php',
							'title' => __( 'Single Post Centered', 'raft' ),
						),
						'single-post-columns'  => array(
							'file'  => RAFT_DIR . 'library/single/single-post-columns.php',
							'title' => __( 'Single Post Columns', 'raft' ),
						),
						'single-post-cover'    => array(
							'file'  => RAFT_DIR . 'library/single/single-post-cover.php',
							'title' => __( 'Single Post Cover', 'raft' ),
						),
					),
					'front-page' => array(
						'front-page-alt'   => array(
							'file'  => RAFT_DIR . 'library/front-end/front-page-2.php',
							'title' => __( 'Homepage 2', 'raft' ),
						),
						'front-page-alt-2' => array(
							'file'  => RAFT_DIR . 'library/front-end/front-page-3.php',
							'title' => __( 'Homepage 3', 'raft' ),
						),
					),
				),
				'page_templates' => array(
					'about-page'     => array(
						'file'     => RAFT_DIR . 'library/templates/about-page.php',
						'title'    => __( 'About Page', 'raft' ),
						'template' => 'template-plain',
					),
					'contact-page'   => array(
						'file'     => RAFT_DIR . 'library/templates/contact-page.php',
						'title'    => __( 'Contact Page', 'raft' ),
						'template' => 'template-plain',
					),
					'portfolio-page' => array(
						'file'     => RAFT_DIR . 'library/templates/portfolio-page.php',
						'title'    => __( 'Portfolio Page', 'raft' ),
						'template' => 'template-plain',
					),
					'services-page'  => array(
						'file'     => RAFT_DIR . 'library/templates/services-page.php',
						'title'    => __( 'Services Page', 'raft' ),
						'template' => 'template-plain',
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

	/**
	 * Define theme strings.
	 * 
	 * @param array $strings Strings.
	 * @return array
	 */
	public function strings( $strings = array() ) {
		$strings = array(

			// Generic patterns.
			'hero_title'              => __( 'Block Based Themes Made simple', 'raft' ),
			'raft_feature_1'          => __( 'Style Variations', 'raft' ),
			'raft_feature_2'          => __( 'Built-in Patterns', 'raft' ),
			'raft_feature_3'          => __( 'Powered by Blocks', 'raft' ),
			'page_title'              => __( 'This is a page title', 'raft' ),
			'about_page_title'        => __( 'About our Team', 'raft' ),
			'about_me'                => __( 'About me', 'raft' ),
			'services_page_title'     => __( 'Explore our Services', 'raft' ),
			'section_title'           => __( 'This is section title', 'raft' ),
			'subtitle'                => __( 'Subtitle', 'raft' ),
			'section_description'     => __( 'A short section description', 'raft' ),
			'paragraph_text'          => __( 'This is placeholder text, feel free to replace it with your unique content as it\'s included here just to provide you with a better understanding of how your text will fit in the layout. Explore the various patterns and templates as you create your personalized web experience.', 'raft' ),
			'short_text'              => __( 'Just some placeholder text', 'raft' ),

			// Feature patterns.
			'feature_section_title'   => __( 'Showcase your Features and Services', 'raft' ),
			'feature_title'           => __( 'This is feature title', 'raft' ),
			'feature_description'     => __( 'A placeholder description that you can replace with your own content.', 'raft' ),
			'button_text'             => __( 'Button Text', 'raft' ),
			'button_text_2'           => __( 'Get Started', 'raft' ),

			// Team patterns.
			'team_section_title'      => __( 'Our Team', 'raft' ),
			'team_member'             => __( 'Team member name', 'raft' ),
			'member_role'             => __( 'Company role', 'raft' ),

			// Pricing patterns.
			'pricing_section_title'   => __( 'A pricing section. Join premium!', 'raft' ),
			'plan_title'              => __( 'Plan title', 'raft' ),
			'price'                   => __( '$19.99', 'raft' ),
			'price_feature'           => __( 'A pricing feature', 'raft' ),

			// Contact patterns.
			'contact_page_title'      => __( 'Get in touch', 'raft' ),
			'contact_section_title'   => __( 'Contact details', 'raft' ),
			'follow'                  => __( 'Follow us', 'raft' ),
			'contact_details'         => __( 'Contact detail example', 'raft' ),

			// FAQ patterns.
			'faq_section_title'       => __( 'Frequently Asked Questions', 'raft' ),
			'faq_title'               => __( 'Just a frequent question', 'raft' ),

			// Portfolio patterns.
			'portfolio_section_title' => __( 'Selected Portfolio', 'raft' ),
			'portfolio_title'         => __( 'A project title', 'raft' ),
			'portfolio_client'        => __( 'Client Name', 'raft' ),

			// Loops and templates.
			'read_more'               => __( 'Read more', 'raft' ),
			'continue_reading'        => __( 'Continue reading', 'raft' ),
			'no_posts_found'          => __( 'Unfortunately no posts were found', 'raft' ),
			'search_results'          => __( 'Search results', 'raft' ),
			'search_button'           => __( 'Search', 'raft' ),
			'search_placeholder'      => __( 'Search for a keyword...', 'raft' ),
			'404'                     => __( '404', 'raft' ),
			'page_not_found'          => __( 'Unfortunately the page was not found.', 'raft' ),
			'categories'              => __( 'Categories', 'raft' ),
			'read_also'               => __( 'Read also…', 'raft' ),

			// Content Patterns.
			'content_title'           => __( 'A generic content title', 'raft' ),
			'content_subtitle'        => __( 'A content subtitle', 'raft' ),
			'lorem_ipsum_subtitle'    => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'raft' ),

			// Testimonial patterns.
			'testimonial'             => __( '"...Absolutely one of the best services out there, very professional and easy-going experience, highly recommended..."', 'raft' ),
			'testimonial_name'        => __( 'Jason Doe', 'raft' ),

			// CTA patterns.
			'cta_title'               => __( 'Get started today, get in touch!', 'raft' ),
			'raft_cta_title'          => __( 'Create your new website today, with Raft!', 'raft' ),
		);

		return $strings;
	}
}
