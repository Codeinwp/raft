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
 * @package Raft
 */
class Block_Patterns {

	/**
	 * @var array
	 */
	private $categories = [];
	/**
	 * @var array
	 */
	private $patterns = [];

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', [ $this, 'run' ] );
	}

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
		$categories = [
			'raft' => [ 'label' => __( 'Raft Patterns', 'raft' ) ],
		];

		$patterns = [
			'hero',
		];

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

			register_block_pattern( 'raft/' . $pattern, require $file );
		}
	}
}