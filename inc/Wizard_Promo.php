<?php
/**
 * Onboarding wizard upsells.
 *
 * Otter's onboarding wizard ships as a black box — Raft doesn't fork it.
 * Instead, when the wizard URL is loaded (`site-editor.php?onboarding=true`)
 * AND Raft Pro isn't active, we enqueue a small vanilla-JS script that
 * subscribes to Otter's data store and injects two upsell surfaces into the
 * rendered React tree:
 *
 *   1. A persistent "Try Pro" nudge inside the sidebar (every step).
 *   2. A larger Pro promo card on the Finish step, above the actions.
 *
 * Both are skipped entirely when Pro is active — no risk of double-promoting
 * to existing Pro users. All strings + the upgrade URL are localized so we
 * never hardcode anything in JS that translators can't reach.
 *
 * @package raft
 */

namespace Raft;

/**
 * Class Wizard_Promo
 *
 * @package raft
 */
class Wizard_Promo {

	const SCRIPT_HANDLE = 'raft-wizard-promo';
	const UPGRADE_URL   = 'https://themeisle.com/themes/raft/';

	/**
	 * Wizard_Promo constructor.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'maybe_enqueue' ), 20 );
	}

	/**
	 * Enqueue the promo script only when the wizard is actually being rendered.
	 *
	 * @param string $hook Current admin screen hook.
	 *
	 * @return void
	 */
	public function maybe_enqueue( $hook ) {
		if ( 'site-editor.php' !== $hook ) {
			return;
		}

		// Wizard is invoked via `?onboarding=true`. Otter's own enqueue uses
		// the same gate, so we mirror that check rather than running on the
		// regular site-editor screen.
		if ( ! isset( $_GET['onboarding'] ) || 'true' !== $_GET['onboarding'] ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			return;
		}

		if ( $this->is_pro_active() ) {
			return;
		}

		wp_enqueue_script(
			self::SCRIPT_HANDLE,
			RAFT_URL . 'assets/js/wizard-promo.js',
			array( 'wp-data', 'wp-element', 'wp-dom-ready' ),
			RAFT_VERSION,
			true
		);

		wp_localize_script(
			self::SCRIPT_HANDLE,
			'raftWizardPromo',
			array(
				'upgradeUrl' => self::UPGRADE_URL,
				'strings'    => array(
					'sidebarEyebrow' => __( 'Want more?', 'raft' ),
					'sidebarTitle'   => __( 'Try Raft Pro', 'raft' ),
					'sidebarLink'    => __( 'See what\'s included', 'raft' ),
					'finishEyebrow'  => __( 'Get even more', 'raft' ),
					'finishTitle'    => __( 'Take it further with Raft Pro', 'raft' ),
					'finishBody'     => __( 'Unlock 17 extra patterns, 8 style variations, 7 ready-made page templates, and a fully designed WooCommerce storefront.', 'raft' ),
					'finishCta'      => __( 'Upgrade to Pro', 'raft' ),
				),
			)
		);
	}

	/**
	 * Whether Raft Pro is active. Standard plugin-active check, with the
	 * plugin.php include guard for early hooks.
	 *
	 * @return bool
	 */
	private function is_pro_active(): bool {
		if ( ! function_exists( 'is_plugin_active' ) ) {
			include_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		return is_plugin_active( 'raft-pro/raft-pro.php' );
	}
}
