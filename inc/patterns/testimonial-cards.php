<?php
/**
 * Testimonial Cards Pattern
 * 
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: testimonial-cards
 * title: Testimonial Cards
 * categories: raft/testimonials
 * keywords: testimonial, cards, feedback
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Testimonial Cards', 'raft' ),
	'categories' => array( 'raft/testimonials' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"raft-bg","layout":{"type":"constrained"},"metadata":{}} -->
		<div class="wp-block-group alignfull has-raft-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"backgroundColor":"raft-bg-alt"} -->
				<div class="wp-block-column has-raft-bg-alt-background-color has-background">
					<!-- wp:paragraph {"align":"center","textColor":"raft-accent","fontSize":"normal"} -->
					<p class="has-text-align-center has-raft-accent-color has-text-color has-link-color has-normal-font-size">★ ★ ★ ★ ★</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size">' . esc_html( $raft_strings['testimonial'] ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['testimonial_name'] ) . '</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"backgroundColor":"raft-bg-alt"} -->
				<div class="wp-block-column has-raft-bg-alt-background-color has-background">
					<!-- wp:paragraph {"align":"center","textColor":"raft-accent","fontSize":"normal"} -->
					<p class="has-text-align-center has-raft-accent-color has-text-color has-link-color has-normal-font-size">★ ★ ★ ★ ★</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size">' . esc_html( $raft_strings['testimonial'] ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['testimonial_name'] ) . '</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"backgroundColor":"raft-bg-alt"} -->
				<div class="wp-block-column has-raft-bg-alt-background-color has-background">
					<!-- wp:paragraph {"align":"center","textColor":"raft-accent","fontSize":"normal"} -->
					<p class="has-text-align-center has-raft-accent-color has-text-color has-link-color has-normal-font-size">★ ★ ★ ★ ★</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size">' . esc_html( $raft_strings['testimonial'] ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['testimonial_name'] ) . '</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	',
);