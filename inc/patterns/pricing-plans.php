<?php
/**
 * Pricing Plans Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: pricing-plans
 * title: Pricing Plans
 * categories: raft/pricing
 * keywords: pricing, plans, subscription
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Pricing Plans', 'raft' ),
	'categories' => array( 'raft/pricing' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"textAlign":"center","className":"is-style-default"} -->
			<h2 class="wp-block-heading has-text-align-center is-style-default">' . esc_html( $raft_strings['pricing_section_title'] ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
			<p class="has-text-align-center has-normal-font-size">' . esc_html( $raft_strings['section_description'] ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"raft-bg-alt"} -->
					<div class="wp-block-column has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $raft_strings['plan_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"fontSize":"huge"} -->
						<p class="has-huge-font-size">' . esc_html( $raft_strings['price'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_1'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_2'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_3'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"textColor":"raft-fg-alt","width":100} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100">
								<a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"raft-bg-alt"} -->
					<div class="wp-block-column has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $raft_strings['plan_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"fontSize":"huge"} -->
						<p class="has-huge-font-size">' . esc_html( $raft_strings['price'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_1'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_2'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_3'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"textColor":"raft-fg-alt","width":100} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100">
								<a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"raft-bg-alt"} -->
					<div class="wp-block-column has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $raft_strings['plan_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"fontSize":"huge"} -->
						<p class="has-huge-font-size">' . esc_html( $raft_strings['price'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_1'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_2'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['raft_feature_3'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"textColor":"raft-fg-alt","width":100} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100">
								<a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
						<p class="has-text-align-center has-small-font-size">' . esc_html( $raft_strings['short_text'] ) . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	',
);
