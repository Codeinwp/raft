<?php
/**
 * Contact Details Pattern
 * 
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: contact-details
 * title: Contact Details
 * categories: raft/content
 * keywords: contact, details, information
 */

$raft_strings = apply_filters( 'raft_strings', array() );

// Define image URLs.
$images = array(
	RAFT_URL . 'assets/img/raft-cover-bg.svg',
);

return array(
	'title'      => __( 'Contact Details', 'raft' ),
	'categories' => array( 'raft/content' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|70"}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"inherit":false}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"align":"wide","id":281} -->
					<figure class="wp-block-image alignwide">
						<img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-281"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|70"}},"layout":{"inherit":true,"type":"constrained"}} -->
				<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
					<div class="wp-block-group alignwide">
						<!-- wp:columns -->
						<div class="wp-block-columns">
							<!-- wp:column {"verticalAlignment":"center"} -->
							<div class="wp-block-column is-vertically-aligned-center">
								<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
								<div class="wp-block-group" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
									<!-- wp:heading {"textAlign":"left"} -->
									<h2 class="wp-block-heading has-text-align-left">' . esc_html( $raft_strings['contact_section_title'] ) . '</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>' . esc_html( $raft_strings['section_description'] ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:separator {"backgroundColor":"raft-accent"} -->
									<hr class="wp-block-separator has-text-color has-raft-accent-color has-alpha-channel-opacity has-raft-accent-background-color has-background"/>
									<!-- /wp:separator -->

									<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
									<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['follow'] ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:social-links {"size":"has-large-icon-size"} -->
									<ul class="wp-block-social-links has-large-icon-size">
										<!-- wp:social-link {"url":"#","service":"wordpress"} /-->
										<!-- wp:social-link {"url":"#","service":"instagram"} /-->
										<!-- wp:social-link {"url":"#","service":"x"} /-->
										<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
									</ul>
									<!-- /wp:social-links -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"raft-bg-alt"} -->
							<div class="wp-block-column is-vertically-aligned-top has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
								<div class="wp-block-group">
									<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
									<div class="wp-block-group">
										<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
										<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
										<!-- /wp:paragraph -->

										<!-- wp:paragraph -->
										<p>' . esc_html( $raft_strings['contact_details'] ) . '</p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->

									<!-- wp:separator {"backgroundColor":"raft-accent"} -->
									<hr class="wp-block-separator has-text-color has-raft-accent-color has-alpha-channel-opacity has-raft-accent-background-color has-background"/>
									<!-- /wp:separator -->

									<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
									<div class="wp-block-group">
										<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
										<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
										<!-- /wp:paragraph -->

										<!-- wp:paragraph -->
										<p>' . esc_html( $raft_strings['contact_details'] ) . '</p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->

									<!-- wp:separator {"backgroundColor":"raft-accent"} -->
									<hr class="wp-block-separator has-text-color has-raft-accent-color has-alpha-channel-opacity has-raft-accent-background-color has-background"/>
									<!-- /wp:separator -->

									<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
									<div class="wp-block-group">
										<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
										<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
										<!-- /wp:paragraph -->

										<!-- wp:paragraph -->
										<p>' . esc_html( $raft_strings['contact_details'] ) . '</p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
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
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	',
);
