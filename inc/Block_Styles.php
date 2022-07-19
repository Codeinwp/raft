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
			'core/heading' => [
				[
					'name'  => 'raft-line-after',
					'label' => esc_html__( 'Line After', 'raft' ),
				],
				[
					'name'  => 'raft-line-before',
					'label' => esc_html__( 'Line Before', 'raft' ),
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