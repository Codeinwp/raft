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
        add_filter( 'raft_strings', array( $this, 'strings' ) ); // Added line
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
     */
    public function strings( $strings = [] ) {
        $strings = array(
			
            // Generic patterns
            'hero_title' => __( 'Block Based Themes Made simple', 'raft' ),
            'page_title' => __( 'This is a page title', 'raft' ),
            'section_title' => __( 'This is section title', 'raft' ),
            'subtitle' => __( 'Subtitle', 'raft' ),
            'section_description' => __( 'A short section description', 'raft' ),
            'paragraph_text' => __( 'This is placeholder text, feel free to replace it with your unique content as it\'s included here just to provide you with a better understanding of how your text will fit in the layout. Explore the various patterns and templates as you create your personalized web experience.', 'raft' ),
            'short_text' => __( 'Just some placeholder text', 'raft' ),
			
            // Feature patterns
            'feature_section_title' => __( 'Showcase your Features and Services', 'raft' ),
            'feature_title' => __( 'This is feature title', 'raft' ),
            'feature_description' => __( 'A placeholder description that you can replace with your own content.', 'raft' ),
            'button_text' => __( 'Button Text', 'raft' ),
			
            // Team patterns
            'team_section_title' => __( 'Our Team', 'raft' ),
            'team_member' => __( 'Team member name', 'raft' ),
            'member_role' => __( 'Company role', 'raft' ),
			
            // Pricing patterns
            'pricing_section_title' => __( 'A pricing section. Join premium!', 'raft' ),
            'plan_title' => __( 'Plan title', 'raft' ),
            'price' => __( '$19.99', 'raft' ),
            'price_feature' => __( 'A pricing feature', 'raft' ),
			
            // FAQ patterns
            'faq_section_title' => __( 'Frequently Asked Questions', 'raft' ),
            'faq_title' => __( 'Just a frequent question', 'raft' ),
			
            // Content Patterns
            'content_title' => __( 'A generic content title', 'raft' ),
            'content_subtitle' => __( 'A content subtitle', 'raft' ),
			
            // Testimonial patterns
            'testimonial' => __( '"...Absolutely one of the best services out there, very professional and easy-going experience, highly recommended..."', 'raft' ),
            'testimonial_name' => __( 'Jason Doe', 'raft' ),
			
            // CTA patterns
            'cta_title' => __( 'Get started today, get in touch!', 'raft' ),
        );

        return $strings;
    }
}
