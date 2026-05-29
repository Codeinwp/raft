<?php
/**
 * Raft dashboard page.
 *
 * Adds an "Raft" entry under Appearance with a welcome + Pro upsell layout.
 * Pure PHP/HTML; no React, no JS, no build step.
 *
 * @package raft
 */

namespace Raft;

/**
 * Class Dashboard
 *
 * @package raft
 */
class Dashboard {

	const MENU_SLUG   = 'raft-dashboard';
	const PARENT      = 'themes.php';
	const UPGRADE_URL = 'https://themeisle.com/themes/raft/upgrade/';

	/**
	 * Dashboard constructor.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
	}

	/**
	 * Adds the dashboard menu entry under Appearance.
	 *
	 * @return void
	 */
	public function register_menu() {
		add_theme_page(
			__( 'Raft', 'raft' ),
			__( 'Raft', 'raft' ),
			'manage_options',
			self::MENU_SLUG,
			array( $this, 'render' )
		);
	}

	/**
	 * Inline page styles. Scoped to the dashboard screen only so it never
	 * leaks into other admin pages.
	 *
	 * @param string $hook Current admin hook suffix.
	 *
	 * @return void
	 */
	public function enqueue_styles( $hook ) {
		if ( 'appearance_page_' . self::MENU_SLUG !== $hook ) {
			return;
		}

		wp_register_style( 'raft-dashboard', false, array(), RAFT_VERSION );
		wp_enqueue_style( 'raft-dashboard' );

		$css = '
			.raft-dashboard { max-width: 960px; margin: 24px auto; padding: 0 20px; }
			.raft-dashboard h1 { font-size: 32px; line-height: 1.2; margin: 0 0 8px; }
			.raft-dashboard p.lede { font-size: 16px; color: #50575e; margin: 0 0 32px; }
			.raft-dashboard__hero { background: #fff; border: 1px solid #dcdcde; border-radius: 8px; padding: 32px; display: flex; gap: 32px; align-items: center; margin-bottom: 24px; }
			.raft-dashboard__hero-content { flex: 1; }
			.raft-dashboard__hero-content h2 { margin-top: 0; }
			.raft-dashboard__cta { display: inline-block; background: #C26148; color: #fff; padding: 10px 20px; border-radius: 999px; text-decoration: none; font-weight: 600; }
			.raft-dashboard__cta:hover { background: #AC5039; color: #fff; }
			.raft-dashboard__grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-bottom: 32px; }
			.raft-dashboard__card { background: #fff; border: 1px solid #dcdcde; border-radius: 8px; padding: 24px; }
			.raft-dashboard__card .count { font-size: 28px; font-weight: 700; color: #C26148; display: block; line-height: 1; margin-bottom: 8px; }
			.raft-dashboard__card .label { font-size: 14px; color: #50575e; margin: 0 0 12px; }
			.raft-dashboard__card .desc { font-size: 13px; color: #646970; margin: 0; }
			.raft-dashboard__quick-links { background: #fff; border: 1px solid #dcdcde; border-radius: 8px; padding: 24px; }
			.raft-dashboard__quick-links h3 { margin-top: 0; }
			.raft-dashboard__quick-links ul { margin: 0; }
			.raft-dashboard__quick-links li { margin-bottom: 8px; }
		';

		wp_add_inline_style( 'raft-dashboard', $css );
	}

	/**
	 * Renders the dashboard page.
	 *
	 * @return void
	 */
	public function render() {
		$site_editor_url = admin_url( 'site-editor.php' );
		$onboarding_url  = add_query_arg( 'onboarding', 'true', $site_editor_url );
		$pro_active      = is_plugin_active( 'raft-pro/raft-pro.php' );

		?>
		<div class="raft-dashboard">
			<h1><?php esc_html_e( 'Welcome to Raft', 'raft' ); ?></h1>
			<p class="lede"><?php esc_html_e( 'A lightweight, full-site-editing theme. Configure once, edit visually, ship fast.', 'raft' ); ?></p>

			<?php if ( ! $pro_active ) : ?>
				<div class="raft-dashboard__hero">
					<div class="raft-dashboard__hero-content">
						<h2><?php esc_html_e( 'Get more with Raft Pro', 'raft' ); ?></h2>
						<p><?php esc_html_e( 'Unlock 8 additional style variations, 17 block patterns, 7 ready-to-import page templates, and a fully designed WooCommerce storefront. Upgrade your site without changing your workflow.', 'raft' ); ?></p>
						<a class="raft-dashboard__cta" href="<?php echo esc_url( self::UPGRADE_URL ); ?>" target="_blank" rel="noopener noreferrer">
							<?php esc_html_e( 'Upgrade to Pro', 'raft' ); ?>
						</a>
					</div>
				</div>

				<div class="raft-dashboard__grid">
					<div class="raft-dashboard__card">
						<span class="count">+8</span>
						<p class="label"><?php esc_html_e( 'Style variations', 'raft' ); ?></p>
						<p class="desc"><?php esc_html_e( 'Editorial Mono, Harbor, Clay, Plum Night, and more — each with its own typography and palette.', 'raft' ); ?></p>
					</div>
					<div class="raft-dashboard__card">
						<span class="count">+17</span>
						<p class="label"><?php esc_html_e( 'Block patterns', 'raft' ); ?></p>
						<p class="desc"><?php esc_html_e( 'Bento Features, Marquee Hero, Stats Counter, Pricing Comparison, and more.', 'raft' ); ?></p>
					</div>
					<div class="raft-dashboard__card">
						<span class="count">+7</span>
						<p class="label"><?php esc_html_e( 'Page templates', 'raft' ); ?></p>
						<p class="desc"><?php esc_html_e( 'About, Services, Contact, Pricing, Careers, Case Study, Manifesto.', 'raft' ); ?></p>
					</div>
					<div class="raft-dashboard__card">
						<span class="count">+8</span>
						<p class="label"><?php esc_html_e( 'WooCommerce templates', 'raft' ); ?></p>
						<p class="desc"><?php esc_html_e( 'Designed cart, checkout, shop, single product, archives, and a slide-out mini-cart that match Raft.', 'raft' ); ?></p>
					</div>
				</div>
			<?php else : ?>
				<div class="raft-dashboard__hero">
					<div class="raft-dashboard__hero-content">
						<h2><?php esc_html_e( 'Raft Pro is active', 'raft' ); ?></h2>
						<p><?php esc_html_e( 'All Pro patterns, styles, and templates are available in the Site Editor.', 'raft' ); ?></p>
					</div>
				</div>
			<?php endif; ?>

			<div class="raft-dashboard__quick-links">
				<h3><?php esc_html_e( 'Get started', 'raft' ); ?></h3>
				<ul>
					<li><a href="<?php echo esc_url( $onboarding_url ); ?>"><?php esc_html_e( 'Run the setup wizard', 'raft' ); ?></a> — <?php esc_html_e( 'Pick a homepage layout, archive style, and page templates.', 'raft' ); ?></li>
					<li><a href="<?php echo esc_url( $site_editor_url ); ?>"><?php esc_html_e( 'Open the Site Editor', 'raft' ); ?></a> — <?php esc_html_e( 'Customize templates, parts, and styles.', 'raft' ); ?></li>
					<li><a href="https://docs.themeisle.com/fse-themes/raft-fse-theme" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Read the documentation', 'raft' ); ?></a></li>
				</ul>
			</div>
		</div>
		<?php
	}
}
