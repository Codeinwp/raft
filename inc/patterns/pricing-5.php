<?php
/**
 * Pricing Plans 5
 * 
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: pricing-5
 * title: Pricing Plans 5
 * categories: raft/pricing
 * keywords: pricing, plans, premium
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Pricing Plans 5', 'raft' ),
	'categories' => array( 'raft/pricing' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70"}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
							<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
							<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
							<!-- /wp:paragraph -->

							<!-- wp:heading {"textAlign":"left"} -->
							<h2 class="wp-block-heading has-text-align-left">' . esc_html( $raft_strings['pricing_section_title'] ) . '</h2>
							<!-- /wp:heading -->

							<!-- wp:paragraph {"align":"left"} -->
							<p class="has-text-align-left">' . esc_html( $raft_strings['paragraph_text'] ) . '</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"backgroundColor":"raft-bg-alt"} -->
					<div class="wp-block-column has-raft-bg-alt-background-color has-background">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
							<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group">
								<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"3rem"}}} -->
								<p class="has-text-align-left" style="font-size:3rem">' . esc_html( $raft_strings['price'] ) . '</p>
								<!-- /wp:paragraph -->

								<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
								<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:spacer {"height":"16px"} -->
							<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->

							<!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
							<p class="has-text-align-left has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
							<!-- /wp:paragraph -->

							<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-wide"} -->
							<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
							<!-- /wp:separator -->

							<!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
							<p class="has-text-align-left has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
							<!-- /wp:paragraph -->

							<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-wide"} -->
							<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
							<!-- /wp:separator -->

							<!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
							<p class="has-text-align-left has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
							<!-- /wp:paragraph -->

							<!-- wp:spacer {"height":"16px"} -->
							<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
							<!-- /wp:spacer -->

							<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
							<div class="wp-block-buttons">
								<!-- wp:button {"textColor":"raft-fg-alt","width":100,"className":"is-style-fill"} -->
								<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill">
									<a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
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
