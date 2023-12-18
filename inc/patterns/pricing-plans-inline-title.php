<?php
/**
 * Pricing Plans 2 Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: pricing-plans-inline-title
 * title: Pricing Plans 2
 * categories: raft/pricing
 * keywords: pricing, plans, subscription
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Pricing Plans 2', 'raft' ),
	'categories' => array( 'raft/pricing' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:heading {"className":"is-style-default"} -->
						<h2 class="wp-block-heading is-style-default">' . esc_html( $raft_strings['pricing_section_title'] ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"fontSize":"normal"} -->
						<p class="has-normal-font-size">' . esc_html( $raft_strings['section_description'] ) . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"16px"}},"backgroundColor":"raft-bg-alt"} -->
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
							<!-- wp:button {"width":100,"className":"is-style-outline"} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline">
								<a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"16px"}},"backgroundColor":"raft-bg-alt"} -->
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
							<!-- wp:button {"width":100,"className":"is-style-outline"} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline">
								<a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
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
