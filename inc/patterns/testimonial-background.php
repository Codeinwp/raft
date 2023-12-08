<?php
/**
 * Testimonial on Background
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: testimonial-background
 * title: Testimonial on Background
 * categories: raft/testimonials
 * keywords: testimonial, feedback
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-05.svg',
);

return array(
	'title'      => __( 'Testimonial on Background', 'raft' ),
	'categories' => array( 'raft/testimonials' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg-alt"}}}},"backgroundColor":"raft-accent","textColor":"raft-fg-alt","layout":{"type":"constrained"},"metadata":{}} -->
		<div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:image {"align":"left","id":287,"width":"200px","aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"is-resized is-style-rounded"} -->
				<figure class="wp-block-image alignleft size-medium is-resized is-style-rounded">
					<img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-287" style="aspect-ratio:1;object-fit:cover;width:200px"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
					<p class="has-text-align-left has-medium-font-size">★ ★ ★ ★ ★</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
					<p class="has-text-align-left has-medium-font-size">' . esc_html( $raft_strings['testimonial'] ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
					<p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['testimonial_name'] ) . '</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	',
);
