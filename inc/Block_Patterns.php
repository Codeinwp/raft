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
			'raft' => array( 'label' => __( 'Raft Patterns', 'raft' ) ),
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
