<?php
/**
 * Patterns Handler.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package raft
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$categories = array(
			'raft/featured'           => array( 'label' => __( 'Featured', 'raft' ) ),
			'raft/headers'            => array( 'label' => __( 'Headers', 'raft' ) ),
			'raft/footers'            => array( 'label' => __( 'Footers', 'raft' ) ),
			'raft/heroes_page_titles' => array( 'label' => __( 'Heroes / Page Titles', 'raft' ) ),
			'raft/features'           => array( 'label' => __( 'Features', 'raft' ) ),
			'raft/content'            => array( 'label' => __( 'Content', 'raft' ) ),
			'raft/testimonials'       => array( 'label' => __( 'Testimonials', 'raft' ) ),
			'raft/team'               => array( 'label' => __( 'Team', 'raft' ) ),
			'raft/pricing'            => array( 'label' => __( 'Pricing', 'raft' ) ),
			'raft/call_to_action'     => array( 'label' => __( 'Call to Action', 'raft' ) ),
			'raft/post_loops'         => array( 'label' => __( 'Post Loops', 'raft' ) ),
			'raft/pages'              => array( 'label' => __( 'Pages', 'raft' ) ),

			/* Visible only in Site Editor */
			
			'raft/singles'            => array( 'label' => __( 'Singles', 'raft' ) ),
			'raft/archives'           => array( 'label' => __( 'Archives', 'raft' ) ),
		);

		$patterns = array(
			'cover-background',
			'image-gallery',
			'posts-query-loop',
			'two-columns-features',
			'three-columns-features',
			'call-to-action',
			'frequently-asked-questions',
			'inverted-background',
			'hero',
			'alternating-feature-columns',
			'call-to-action-2',
			'content-columns-with-hero',
			'hero-with-columns',
			'horizontal-content-cards',
			'inverted-gallery-with-title',
			'posts-query-loop-2',
			'pricing-plans',
			'pricing-plans-inline-title',
			'team',
			'testimonial-columns',
			
			/* new patterns */
			
			'features-centered',
			'feature-cards',
			'features-background',
			'single-feature-button',
			'hero-columns',
			'hero-boxed',
			'title-button',
			'title-background',
			'testimonial-background',
			'testimonial-fullwidth',
			'testimonial-cards',
			'pricing-5',
			'pricing-4',
			'pricing-3',
			'loop-card-centered',
			'loop-cards',
			'loop-rows',
			'loop-3',
			'call-to-action-image',
			'call-to-action-3',
			'text-columns',
			'centered-text-background',
			'portfolio-columns',
			'team-columns',
			'team-rows',
			'homepage-2',
			'homepage-3',
			'about-page',
			'contact-page',
			'portfolio-page',
			'services-page',
			'centered-title',
			'contact-details',
		);

		$this->categories = apply_filters( 'raft_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'raft_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	private function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}
	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */
	private function register_patterns() {
		foreach ( $this->patterns as $pattern ) {
			$file = RAFT_DIR . 'inc/patterns/' . $pattern . '.php';

			if ( ! is_file( $file ) ) {
				continue;
			}

			register_block_pattern( 'raft/' . $pattern, require $file );
		}
	}
}
