<?php
/**
 * Font handler class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

/**
 * Class Font_Manager
 *
 * @package Raft
 */
class Font_Manager {

	/**
	 * Font_Manager constructor.
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this, 'add_webfonts' ] );
		add_action( 'enqueue_block_editor_assets', [ $this, 'add_webfonts' ] );
	}

	/**
	 * Add webfonts.
	 *
	 * @return void
	 */
	public function add_webfonts() {
		wp_add_inline_style(
			current_action() === 'wp_enqueue_scripts' ? Constants::ASSETS_SLUGS['frontend-css'] : Constants::ASSETS_SLUGS['editor-css'],
			$this->get_css()
		);
	}

	/**
	 * Get CSS.
	 *
	 * @return string
	 */
	private function get_css(): string {
		return join( ' ', [
			$this->get_webfonts_inline_style(),
			$this->get_root_css_vars(),
		] );
	}

	/**
	 * Webfonts inline CSS.
	 *
	 * @return string
	 */
	private function get_webfonts_inline_style(): string {
		$vendor_file = RAFT_DIR . 'vendor/wptt/webfont-loader/wptt-webfont-loader.php';

		if ( ! is_readable( $vendor_file ) ) {
			return '';
		}

		require_once $vendor_file;

		$families = array_values( array_unique( $this->get_font_values() ) );

		$families = array_map( function ( $font ) {
			return $font . ':ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600';
		}, $families );

		$fonts_url = add_query_arg(
			[
				'family'  => implode( '&family=', $families ),
				'display' => 'swap',
			],
			'https://fonts.googleapis.com/css2'
		);

		$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ), 'woff' );

		return "@import url({$contents});";
	}

	/**
	 * Get root CSS vars.
	 *
	 * @return string
	 */
	private function get_root_css_vars(): string {
		$fonts = $this->get_font_values();

		$variables = [
			Constants::CSS_VAR_BODY_FF     => $fonts[ Constants::FONT_SLUG_BODY ],
			Constants::CSS_VAR_HEADINGS_FF => $fonts[ Constants::FONT_SLUG_HEADINGS ],
		];

		$css = ':root {';

		foreach ( $variables as $variable => $font_family ) {
			$css .= sprintf( '%s: "%s"; ', $variable, $font_family );
		}

		$css .= '}';

		return $css;
	}

	/**
	 * Get font values.
	 *
	 * @return string[]
	 */
	private function get_font_values() {
		return [
			Constants::FONT_SLUG_BODY     => 'Readex Pro',
			Constants::FONT_SLUG_HEADINGS => 'Readex Pro',
		];
	}
}