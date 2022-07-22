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
 * @package Raft
 */
class Block_Styles {
	/**
	 * @var \array[][] | void
	 */
	private $styles;

	/**
	 * Block Styles constructor.
	 */
	public function __construct() {
		$this->styles = [
			'core/categories' => [
				[
					'name'  => 'raft-pills',
					'label' => esc_html__( 'Pills', 'raft' ),
				]
			]
		];

		add_action( 'init', [ $this, 'add_block_styles' ] );

	}

	public function add_block_styles() {
		foreach ( $this->styles as $block => $styles ) {
			foreach ( $styles as $block_style ) {
				register_block_style( $block, $block_style );
			}
		}
	}
}