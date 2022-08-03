<?php
/**
 * WooCommerce class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft\Compatibility\WooCommerce;

use Raft\Constants;
use WP_Block_Template;

/**
 * Main class.
 */
class Main {
	/**
	 * @var string The template directory.
	 */
	private $templates_directory = RAFT_DIR . 'inc/compatibility/woocommerce/templates/';

	public static $done = false;

	/**
	 * Class constructor.
	 */
	public function __construct() {
		add_filter( 'get_block_templates', [ $this, 'add_templates' ], 0, 3 );
	}

	/**
	 * Add templates.
	 *
	 * @param WP_Block_Template[] $query_result Array of found block templates.
	 * @param array $query Arguments to retrieve templates.
	 * @param string $template_type wp_template or wp_template_part.
	 *
	 * @return WP_Block_Template[]
	 */
	public function add_templates( array $query_result, array $query, string $template_type ): array {
		if ( self::$done ) {
			return $query_result;
		}

		self::$done = true;

		$post_type      = $query['post_type'] ?? '';
		$slugs          = $query['slug__in'] ?? array();
		$template_files = $this->get_block_templates();
		$templates      = array();

		foreach ( $template_files as $index => $template_data ) {
			$templates[] = $this->add_template( $template_data, $template_data['slug'] );
		}

		foreach ( $templates as $item ) {
			$item->content = '';
		}

		return array_merge( $query_result, $templates );
	}

	private function get_block_templates(): array {
		$files = array_map( function ( $template ) {
			$template['path'] = $this->templates_directory . $template['slug'] . Constants::TEMPLATE_EXTENSION;

			return $template;
		}, Constants::WOO_TEMPLATES );

		return array_filter( $files, function ( $data ) {
			return is_file( $data['path'] );
		} );
	}

	private function add_template( $template_data, $slug ) {
		$template = new WP_Block_Template();

		$template->slug        = $slug;
		$template->type        = 'wp_template';
//		$template->path        = $template_data['path'];
		$template->title       = $template_data['title'];
		$template->description = $template_data['description'];
		$template->id          = 'raft//' . $template_data['slug'];
		$template->post_types  = [ 'page' ];
		$template->theme       = 'raft';

		return $template;
	}
}