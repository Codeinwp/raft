<?php
/**
 * Admin class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

/**
 * Admin class.
 */
class Admin {

	const OTTER_REF = 'otter_reference_key';

	/**
	 * Admin constructor.
	 */
	public function __construct() {
		$this->setup_admin_hooks();
	}

	/**
	 * Setup admin hooks.
	 *
	 * @return void
	 */
	public function setup_admin_hooks() {
		add_action( 'admin_notices', array( $this, 'render_welcome_notice' ), 0 );
		add_action( 'wp_ajax_raft_dismiss_welcome_notice', array( $this, 'remove_welcome_notice' ) );
		add_action( 'wp_ajax_raft_set_otter_ref', array( $this, 'set_otter_ref' ) );
		add_action( 'activated_plugin', array( $this, 'after_otter_activation' ) );
		add_action( 'admin_print_scripts', array( $this, 'add_nps_form' ) );
	}

	/**
	 * Render the welcome notice.
	 *
	 * @return void
	 */
	public function render_welcome_notice() {
		if ( ! $this->should_show_welcome_notice() ) {
			return;
		}

		$otter_status = $this->get_otter_status();

		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['welcome-notice'], 'welcome-notice' );
		Assets_Manager::enqueue_script(
			Assets_Manager::ASSETS_SLUGS['welcome-notice'],
			'welcome-notice',
			true,
			array(),
			array(
				'nonce'         => wp_create_nonce( 'raft-dismiss-welcome-notice' ),
				'otterRefNonce' => wp_create_nonce( 'raft-set-otter-ref' ),
				'ajaxUrl'       => esc_url( admin_url( 'admin-ajax.php' ) ),
				'otterStatus'   => $otter_status,
				'activationUrl' => esc_url(
					add_query_arg(
						array(
							'plugin_status' => 'all',
							'paged'         => '1',
							'action'        => 'activate',
							'plugin'        => rawurlencode( 'otter-blocks/otter-blocks.php' ),
							'_wpnonce'      => wp_create_nonce( 'activate-plugin_otter-blocks/otter-blocks.php' ),
						),
						admin_url( 'plugins.php' ) 
					) 
				),
				'onboardingUrl' => esc_url(
					add_query_arg(
						array(
							'onboarding' => 'true',
						),
						admin_url( 'site-editor.php' )
					) 
				),
				'activating'    => __( 'Activating', 'raft' ) . '&hellip;',
				'installing'    => __( 'Installing', 'raft' ) . '&hellip;',
				'done'          => __( 'Done', 'raft' ),
			) 
		);

		$notice_html  = '<div class="notice notice-info raft-welcome-notice">';
		$notice_html .= '<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>';
		$notice_html .= '<div class="notice-content">';

		$notice_html .= '<img class="otter-preview" src="' . esc_url( Assets_Manager::get_image_url( 'welcome-notice.png?1' ) ) . '" alt="' . __( 'Otter Blocks preview', 'raft' ) . '"/>';

		$notice_html .= '<div class="notice-copy">';

		$notice_html .= '<h1 class="notice-subtitle">';
		/* translators: %s: Otter Blocks */
		$notice_html .= __( 'Thanks for downloading Raft Theme 🎉', 'raft' );

		$notice_html .= '</h1>';

		$notice_html .= '<h1 class="notice-title">';
		/* translators: %s: Otter Blocks */
		$notice_html .= sprintf( __( 'Extend Raft with our Free Builder', 'raft' ), '<strong>Otter Blocks</strong>' );

		$notice_html .= '</h1>';

		$learn_more = '<a href="https://docs.themeisle.com/article/1975-fse-onboarding" target="_blank">' . __( 'Learn More', 'raft' ) . '</a>';

		$notice_html .= '<p class="description">' . __( 'Install our free builder plugin for more blocks, enhanced functionality, and seamless theme setup.', 'raft' ) . ' ' . $learn_more . '</p>';

		$notice_html .= '<div class="actions">';

		/* translators: %s: Otter Blocks */
		$notice_html .= '<button id="raft-install-otter" class="button button-primary button-hero">';
		$notice_html .= '<span class="dashicons dashicons-update hidden"></span>';
		$notice_html .= '<span class="text">';

		if ( 'active' === $otter_status ) {
			/* translators: %s: Otter Blocks */
			$notice_html .= __( 'Try it out!', 'raft' );
		} elseif ( 'installed' === $otter_status ) {
			/* translators: %s: Otter Blocks */
			$notice_html .= sprintf( __( 'Activate %s', 'raft' ), 'Otter Builder' );
		} else {
			/* translators: %s: Otter Blocks */
			$notice_html .= sprintf( __( 'Install %s', 'raft' ), 'Otter Builder' );
		}

		$notice_html .= '</span>';
		$notice_html .= '</button>';

		$notice_html .= '</div>';

		$notice_html .= '</div>';
		$notice_html .= '</div>';
		$notice_html .= '</div>';

		echo wp_kses_post( $notice_html );

	}

	/**
	 * Dismiss the welcome notice.
	 *
	 * @return void
	 */
	public function remove_welcome_notice() {
		if ( ! isset( $_POST['nonce'] ) ) {
			return;
		}
		if ( ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'raft-dismiss-welcome-notice' ) ) {
			return;
		}
		update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );
		wp_die();
	}

	/**
	 * Update Otter reference key.
	 *
	 * @return void
	 */
	public function set_otter_ref() {
		if ( empty( $_POST['nonce'] ) ) {
			return;
		}

		if ( ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'raft-set-otter-ref' ) ) {
			return;
		}

		update_option( self::OTTER_REF, 'raft' );

		wp_send_json_success();
	}

	/**
	 * Should we show the welcome notice?
	 *
	 * @return bool
	 */
	private function should_show_welcome_notice(): bool {
		// Already using Otter & has finished onboarding.
		if ( is_plugin_active( 'otter-blocks/otter-blocks.php' ) ) {
			if ( class_exists( '\ThemeIsle\GutenbergBlocks\Plugins\FSE_Onboarding' ) ) {
				$status = get_option( \ThemeIsle\GutenbergBlocks\Plugins\FSE_Onboarding::OPTION_KEY, array() );
				$slug   = get_stylesheet();

				if ( ! empty( $status[ $slug ] ) ) {
					return false;
				}
			} else {
				return false;
			}
		}

		// Notice was dismissed.
		if ( get_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'no' ) === 'yes' ) {
			return false;
		}

		$screen = get_current_screen();

		// Only show in dashboard/themes.
		if ( ! in_array( $screen->id, array( 'dashboard', 'themes' ) ) ) {
			return false;
		}

		// AJAX actions.
		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			return false;
		}

		// Don't show in network admin.
		if ( is_network_admin() ) {
			return false;
		}

		// User can't dismiss. We don't show it.
		if ( ! current_user_can( 'manage_options' ) ) {
			return false;
		}

		// User can't install plugins. We don't show it.
		if ( ! current_user_can( 'install_plugins' ) ) {
			return false;
		}

		// Block editor context.
		if ( $screen->is_block_editor() ) {
			return false;
		}

		// Dismiss after one week from activation.
		$activated_time = get_option( 'raft_install' );

		if ( ! empty( $activated_time ) && time() - intval( $activated_time ) > WEEK_IN_SECONDS ) {
			update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );

			return false;
		}

		return true;
	}

	/**
	 * Get the Otter Blocks plugin status.
	 *
	 * @return string
	 */
	private function get_otter_status(): string {
		$status = 'not-installed';

		if ( is_plugin_active( 'otter-blocks/otter-blocks.php' ) ) {
			return 'active';
		}

		if ( file_exists( ABSPATH . 'wp-content/plugins/otter-blocks/otter-blocks.php' ) ) {
			return 'installed';
		}

		return $status;
	}

	/**
	 * Run after Otter Blocks activation.
	 *
	 * @param string $plugin Plugin name.
	 *
	 * @return void
	 */
	public function after_otter_activation( $plugin ) {
		if ( 'otter-blocks/otter-blocks.php' !== $plugin ) {
			return;
		}

		if ( ! class_exists( '\ThemeIsle\GutenbergBlocks\Plugins\FSE_Onboarding' ) ) {
			return;
		}

		$status = get_option( \ThemeIsle\GutenbergBlocks\Plugins\FSE_Onboarding::OPTION_KEY, array() );
		$slug   = get_stylesheet();

		if ( ! empty( $status[ $slug ] ) ) {
			return;
		}

		// Dismiss after two days from activation.
		$activated_time = get_option( 'raft_install' );

		if ( ! empty( $activated_time ) && time() - intval( $activated_time ) > ( 2 * DAY_IN_SECONDS ) ) {
			update_option( Constants::CACHE_KEYS['dismissed-welcome-notice'], 'yes' );
			return;
		}

		$onboarding = add_query_arg(
			array(
				'onboarding' => 'true',
			),
			admin_url( 'site-editor.php' )
		);

		wp_safe_redirect( $onboarding );
		exit;
	}

	/**
	 * Add NPS form.
	 *
	 * @return void
	 */
	public function add_nps_form() {
		$screen = get_current_screen();

		if ( current_user_can( 'manage_options' ) && ( 'dashboard' === $screen->id || 'themes' === $screen->id ) ) {
			$website_url = preg_replace( '/[^a-zA-Z0-9]+/', '', get_site_url() );

			$config = array(
				'environmentId' => 'clp9hp3j71oqndl2ietgq8nej',
				'apiHost'       => 'https://app.formbricks.com',
				'userId'        => 'raft_' . $website_url,
				'attributes'    => array(
					'days_since_install' => self::convert_to_category( round( ( time() - get_option( 'raft_install', time() ) ) / DAY_IN_SECONDS ) ),
				),
			);

			echo '<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://unpkg.com/@formbricks/js@^1.6.5/dist/index.umd.js";var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e),setTimeout(function(){window.formbricks.init(' . wp_json_encode( $config ) . ')},500)}();</script>';
		}
	}

	/**
	 * Convert a number to a category.
	 *
	 * @param int $number Number to convert.
	 * @param int $scale  Scale.
	 *
	 * @return int
	 */
	public static function convert_to_category( $number, $scale = 1 ) {
		$normalized_number = intval( round( $number / $scale ) );

		if ( 0 === $normalized_number || 1 === $normalized_number ) {
			return 0;
		} elseif ( $normalized_number > 1 && $normalized_number < 8 ) {
			return 7;
		} elseif ( $normalized_number >= 8 && $normalized_number < 31 ) {
			return 30;
		} elseif ( $normalized_number > 30 && $normalized_number < 90 ) {
			return 90;
		} elseif ( $normalized_number > 90 ) {
			return 91;
		}
	}
}
