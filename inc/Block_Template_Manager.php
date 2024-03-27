<?php
/**
 * Block_Template_Manager class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 */

namespace Raft;

/**
 * Class Constants
 *
 * @package raft
 */
class Block_Template_Manager {

	/**
	 * Block template manager constructor.
	 */
	public function __construct() {
		add_filter( 'get_block_templates', array( $this, 'offload_unused_templates' ), 100, 3 );
	}

	/**
	 * Remove unused templates.
	 *
	 * @param \WP_Block_Template[] $query_result Block templates array.
	 * @param array                $query Query args.
	 * @param string               $template_type `wp_template` or `wp_template_part`.
	 */
	public function offload_unused_templates( array $query_result, array $query, string $template_type ): array {
		if ( 'wp_template' !== $template_type ) {
			return $query_result;
		}

		return $this->maybe_offload_woocommerce_templates( $query_result );
	}

	/**
	 * Offload WooCommerce templates.
	 *
	 * @param array $query_result the query result passed from other function.
	 *
	 * @return array
	 */
	private function maybe_offload_woocommerce_templates( array $query_result ): array {
		if ( class_exists( 'WooCommerce' ) ) {
			return $query_result;
		}

		$removables = array(
			'single-product',
			'page-cart',
			'page-checkout',
		);


		foreach ( $query_result as $key => $template ) {
			if ( ! isset( $template->slug ) ) {
				continue;
			}

			if ( in_array( $template->slug, $removables, true ) ) {
				unset( $query_result[ $key ] );
			}
		}

		return $query_result;
	}
}
