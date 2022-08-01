<?php
/**
 * Assets manager class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

/**
 * Class Assets_Manager
 *
 * @package raft
 */
class Assets_Manager {
	const ASSETS_SLUGS = array(
		'frontend-css'   => 'raft-style',
		'editor-css'     => 'raft-editor',
		'welcome-notice' => 'raft-welcome-notice',
	);

	/**
	 * Enqueue style.
	 *
	 * @param string   $handle Name of the style.
	 * @param string   $file Path to the style file.
	 * @param string[] $dependencies Array of style handles this style depends on.
	 *
	 * @return void
	 */
	public static function enqueue_style( string $handle, string $file, array $dependencies = array() ) {
		$uri = RAFT_URL . 'assets/css/build/' . $file . '.css';

		wp_register_style( $handle, esc_url( $uri ), $dependencies, RAFT_VERSION );
		wp_style_add_data( $handle, 'rtl', 'replace' );
		wp_enqueue_style( $handle );
	}

	/**
	 * Enqueue script.
	 *
	 * @param string   $handle Name of the style.
	 * @param string   $file Path to the style file.
	 * @param bool     $in_footer Whether to enqueue the script in the footer.
	 * @param string[] $dependencies Array of other script handles this script depends on.
	 * @param array    $localization Array of data to pass to the script.
	 * @param string   $localization_object_name Name of the object to create in the global scope.
	 *
	 * @return void
	 */
	public static function enqueue_script( string $handle, string $file, bool $in_footer = true, array $dependencies = array(), array $localization = array(), $localization_object_name = 'raftData' ) {
		$uri = RAFT_URL . 'assets/js/build/' . $file . '.js';
		$php = RAFT_DIR . 'assets/js/build/' . $file . '.asset.php';

		$deps = is_file( $php ) ? include $php : array(
			'dependencies' => array(),
			'version'      => RAFT_VERSION,
		);


		if ( ! empty( $dependencies ) ) {
			$deps['dependencies'] = array_merge( $deps['dependencies'], $dependencies );
		}

		wp_register_script( $handle, esc_url( $uri ), $deps['dependencies'], $deps['version'], $in_footer );

		if ( ! empty( $localization ) ) {
			wp_localize_script( $handle, $localization_object_name, $localization );
		}

		wp_enqueue_script( $handle );
		wp_set_script_translations( $handle, 'raft' );
	}

	/**
	 * Get image URL from assets folder.
	 *
	 * @param string $file Filename with extension.
	 *
	 * @return string
	 */
	public static function get_image_url( string $file ): string {
		return RAFT_URL . 'assets/img/' . $file;
	}
}
