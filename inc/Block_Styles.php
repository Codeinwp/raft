<?php
/**
 * Block Styles Handler.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

/**
 * Class Block_Styles
 *
 * @package raft
 */
class Block_Styles {
	/**
	 * Block styles.
	 *
	 * @var \array[][] | void
	 */
	private $styles;

	/**
	 * Block Styles constructor.
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->setup_properties();
		$this->add_block_styles();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$this->styles = array(
			'core/categories' => array(
				array(
					'name'  => 'raft-pills',
					'label' => esc_html__( 'Pills', 'raft' ),
				),
			),
		);
	}

	/**
	 * Add the block styles.
	 *
	 * @return void
	 */
	public function add_block_styles() {
		foreach ( $this->styles as $block => $styles ) {
			foreach ( $styles as $block_style ) {
				register_block_style( $block, $block_style );
			}
		}
	}
}
