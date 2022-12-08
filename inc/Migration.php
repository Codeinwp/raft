<?php
/**
 * Migrations handler class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.6
 */

namespace Raft;

/**
 * Class Migration
 *
 * @package raft
 */
class Migration {
	/**
	 * Global styles post id.
	 *
	 * @var int
	 */
	private $global_styles_post_id = 0;

	/**
	 * Global styles data.
	 *
	 * @var string
	 */
	private $global_styles_data;

	const MIGRATION_FLAGS = array(
		'colors' => 'raft_colors_migration',
	);

	/**
	 * Migration Constructor
	 */
	public function __construct() {
		if ( $this->was_migrated( 'colors' ) ) {
			return;
		}

		$this->setup_properties();

		add_action( 'init', array( $this, 'migrate_old_colors' ) );
	}


	/**
	 * Setup the properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$args = array(
			'posts_per_page'      => 1,
			'orderby'             => 'date',
			'order'               => 'desc',
			'post_type'           => 'wp_global_styles',
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true,
			'no_found_rows'       => true,
			'tax_query'           => array( // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query
				array(
					'taxonomy' => 'wp_theme',
					'field'    => 'name',
					'terms'    => 'raft',
				),
			),
		);

		$global_style_query = new \WP_Query();
		$recent_posts       = $global_style_query->query( $args );

		if ( empty( $recent_posts ) ) {
			return;
		}

		$this->global_styles_data    = json_decode( $recent_posts[0]->post_content, true );
		$this->global_styles_post_id = $recent_posts[0]->ID;
	}

	/**
	 * Migrate the old color slugs.
	 *
	 * @return void
	 */
	public function migrate_old_colors() {
		if ( $this->was_migrated( 'colors' ) ) {
			return;
		}

		if ( 0 === $this->global_styles_post_id || empty( $this->global_styles_data ) ) {
			return;
		}

		if (
			! isset( $this->global_styles_data['settings'] ) ||
			! isset( $this->global_styles_data['settings']['color'] ) ||
			! isset( $this->global_styles_data['settings']['color']['palette'] ) ||
			! isset( $this->global_styles_data['settings']['color']['palette']['theme'] )
		) {
			return;
		}

		$colors = $this->global_styles_data['settings']['color']['palette']['theme'];

		array_walk(
			$colors,
			function ( &$color ) {
				$color['slug'] = str_replace( 'raft-', 'ti-', $color['slug'] );

				return $color;
			} 
		);

		$this->global_styles_data['settings']['color']['palette']['theme'] = $colors;

		$update = wp_update_post(
			array(
				'ID'           => $this->global_styles_post_id,
				'post_content' => wp_json_encode( $this->global_styles_data ),
			) 
		);

		if ( is_wp_error( $update ) ) {
			return;
		}

		$this->set_migrated( 'colors' );
	}

	/**
	 * Check if a migration was already done.
	 *
	 * @param string $key The migration key.
	 *
	 * @return bool
	 */
	private function was_migrated( $key ) {
		return get_option( self::MIGRATION_FLAGS[ $key ], false ) === true;
	}

	/**
	 * Set a migration as done.
	 *
	 * @param string $key The migration key.
	 *
	 * @return void
	 */
	private function set_migrated( $key ) {
		update_option( self::MIGRATION_FLAGS[ $key ], true );
	}
}
