<?php
/**
 * Featured Block Pattern
 * 
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: features-centered
 * title: Centered Features
 * categories: array( 'features' )
 * keywords: feature, service, content
 */

$strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-07.svg', // Assuming 'shape-07.svg' is the file name.
);

return array(
	'title'      => __( 'Feature Block', 'raft' ),
	'categories' => array( 'raft/features' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0px"}},"backgroundColor":"raft-bg-alt","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
						<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
							<!-- wp:image {"align":"center","id":289,"width":"128px","height":"128px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
							<figure class="wp-block-image aligncenter size-large is-resized has-custom-border">
								<img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-289" style="border-radius:999px;object-fit:cover;width:128px;height:128px"/>
							</figure>
							<!-- /wp:image -->

							<!-- wp:heading {"textAlign":"center","level":3} -->
							<h3 class="wp-block-heading has-text-align-center">' . esc_html( $strings['feature_title'] ) . '</h3>
							<!-- /wp:heading -->

							<!-- wp:paragraph {"align":"center"} -->
							<p class="has-text-align-center">' . esc_html( $strings['feature_description'] ) . '</p>
							<!-- /wp:paragraph -->

							<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
							<div class="wp-block-buttons">
								<!-- wp:button -->
								<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html( $strings['button_text'] ) . '</a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-column">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
						<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
							<!-- wp:image {"align":"center","id":289,"width":"128px","height":"128px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
							<figure class="wp-block-image aligncenter size-large is-resized has-custom-border">
								<img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-289" style="border-radius:999px;object-fit:cover;width:128px;height:128px"/>
							</figure>
							<!-- /wp:image -->

							<!-- wp:heading {"textAlign":"center","level":3} -->
							<h3 class="wp-block-heading has-text-align-center">' . esc_html( $strings['feature_title'] ) . '</h3>
							<!-- /wp:heading -->

							<!-- wp:paragraph {"align":"center"} -->
							<p class="has-text-align-center">' . esc_html( $strings['feature_description'] ) . '</p>
							<!-- /wp:paragraph -->

							<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
							<div class="wp-block-buttons">
								<!-- wp:button -->
								<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html( $strings['button_text'] ) . '</a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
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
	',
);
