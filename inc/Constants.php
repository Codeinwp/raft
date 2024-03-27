<?php
/**
 * Constants class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

/**
 * Class Constants
 *
 * @package raft
 */
class Constants {
	/**
	 * Cache keys.
	 */
	const CACHE_KEYS = array(
		'dismissed-welcome-notice' => 'raft-welcome-notice-dismissed',
	);

	/**
	 * WooCommerce templates
	 */
	const WOO_TEMPLATES = array(
		array(
			'slug'        => 'product-search-results',
			'title'       => 'title',
			'description' => 'description',
		),
		array(
			'slug'        => 'taxonomy-product_cat',
			'title'       => 'title',
			'description' => 'description',
		),
		array(
			'slug'        => 'archive-product',
			'title'       => 'title',
			'description' => 'description',
		),
		array(
			'slug'        => 'taxonomy-product_tag',
			'title'       => 'title',
			'description' => 'description',
		),
		array(
			'slug'        => 'single-product',
			'title'       => 'title',
			'description' => 'description',
		),
		array(
			'slug'        => 'page-cart',
			'title'       => 'title',
			'description' => 'description',
		),
		array(
			'slug'        => 'page-checkout',
			'title'       => 'title',
			'description' => 'description',
		),
	);

	/**
	 * Templates extension.
	 */
	const TEMPLATE_EXTENSION = '.html';
}
