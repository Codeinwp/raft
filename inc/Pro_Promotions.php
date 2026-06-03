<?php
/**
 * Pro pattern upsells in the block inserter.
 *
 * Registers a `raft/pro` pattern category and a handful of placeholder
 * patterns named after Raft Pro's signature patterns. When inserted, each
 * drops a clearly-labelled "locked" upgrade card — never deceptive about
 * being a placeholder. Pattern discovery, not bait-and-switch.
 *
 * Skipped entirely when Raft Pro is active so paying users don't see the
 * upsells alongside the real patterns.
 *
 * @package raft
 */

namespace Raft;

/**
 * Class Pro_Promotions
 *
 * @package raft
 */
class Pro_Promotions {

	const CATEGORY_SLUG = 'raft/pro';
	const UPGRADE_URL   = 'https://themeisle.com/themes/raft/';

	/**
	 * Pro_Promotions constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register' ), 11 );
	}

	/**
	 * Register the Pro category + placeholder patterns.
	 *
	 * Hooked at priority 11 so it runs after Block_Patterns (priority 10)
	 * has registered the free categories — keeps the category list tidy.
	 *
	 * @return void
	 */
	public function register() {
		if ( $this->is_pro_active() ) {
			return;
		}

		register_block_pattern_category(
			self::CATEGORY_SLUG,
			array( 'label' => __( 'Raft Pro', 'raft' ) )
		);

		foreach ( $this->get_pro_patterns() as $slug => $config ) {
			register_block_pattern(
				'raft/pro-' . $slug,
				array(
					'title'       => $config['title'],
					'description' => $config['description'],
					'categories'  => array( self::CATEGORY_SLUG ),
					'content'     => $this->build_upgrade_card( $config['title'], $config['description'] ),
				)
			);
		}
	}

	/**
	 * Whether Raft Pro is active.
	 *
	 * Hides upsells from users who've already upgraded — they don't want
	 * placeholder cards cluttering their inserter next to the real ones.
	 *
	 * @return bool
	 */
	private function is_pro_active(): bool {
		if ( ! function_exists( 'is_plugin_active' ) ) {
			include_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		return is_plugin_active( 'raft-pro/raft-pro.php' );
	}

	/**
	 * The Pro patterns advertised in the inserter.
	 *
	 * Curated subset of Raft Pro's catalogue — the most visually-distinctive
	 * ones, picked for discovery impact. Full Pro list lives in
	 * `raft-pro/inc/Block_Patterns.php`.
	 *
	 * @return array<string, array{title: string, description: string}>
	 */
	private function get_pro_patterns(): array {
		return apply_filters(
			'raft_pro_promoted_patterns',
			array(
				'bento-features'     => array(
					'title'       => __( 'Bento Features (Pro)', 'raft' ),
					'description' => __( 'Grid-style feature showcase with mixed tile sizes — Bento layout.', 'raft' ),
				),
				'marquee-hero'       => array(
					'title'       => __( 'Marquee Hero (Pro)', 'raft' ),
					'description' => __( 'Full-bleed hero with animated marquee text and bold typography.', 'raft' ),
				),
				'stats-counter'      => array(
					'title'       => __( 'Stats Counter (Pro)', 'raft' ),
					'description' => __( 'Three-column metric callouts with large numbers and short labels.', 'raft' ),
				),
				'pricing-comparison' => array(
					'title'       => __( 'Pricing Comparison (Pro)', 'raft' ),
					'description' => __( 'Side-by-side pricing tiers with featured plan highlight.', 'raft' ),
				),
				'team-spotlight'     => array(
					'title'       => __( 'Team Spotlight (Pro)', 'raft' ),
					'description' => __( 'Team grid with circular avatars and bio cards.', 'raft' ),
				),
				'gradient-cta'       => array(
					'title'       => __( 'Gradient CTA (Pro)', 'raft' ),
					'description' => __( 'Full-width call-to-action with gradient background and centered copy.', 'raft' ),
				),
			)
		);
	}

	/**
	 * The "locked" upgrade card block markup inserted in place of the real
	 * pattern. Reuses Raft's color/spacing presets so it sits naturally on
	 * any style variation. The user can delete it the moment they realize
	 * it's a placeholder — that's the point.
	 *
	 * @param string $pattern_title Pattern title shown in the card heading.
	 * @param string $description   Short description shown in the card body.
	 *
	 * @return string
	 */
	private function build_upgrade_card( string $pattern_title, string $description ): string {
		$eyebrow     = esc_html__( 'Locked — Pro pattern', 'raft' );
		$heading     = esc_html( $pattern_title );
		$body        = esc_html( $description );
		$cta         = esc_html__( 'Upgrade to Raft Pro', 'raft' );
		$upgrade_url = esc_url( self::UPGRADE_URL );

		return <<<HTML
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"16px","width":"2px","style":"dashed","color":"var:preset|color|raft-accent"}},"backgroundColor":"raft-bg-alt","layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignwide has-border-color has-raft-bg-alt-background-color has-background" style="border-style:dashed;border-width:2px;border-color:var(--wp--preset--color--raft-accent);border-radius:16px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontWeight":"600","letterSpacing":"2px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"raft-accent","fontSize":"small"} -->
	<p class="has-text-align-center has-raft-accent-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:600;letter-spacing:2px;text-transform:uppercase">{$eyebrow}</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<h3 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:0">{$heading}</h3>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<p class="has-text-align-center" style="margin-top:0;margin-bottom:0">{$body}</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"border":{"radius":"999px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="{$upgrade_url}" style="border-radius:999px" target="_blank" rel="noopener noreferrer">{$cta}</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
HTML;
	}
}
