<?php
/**
 * Testimonial Columns with Rating
 * 
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: testimonial-columns
 * title: Testimonial Columns with Rating
 * categories: raft/testimonials
 * keywords: testimonial, columns, rating
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-05.svg',
);

return array(
	'title'      => __( 'Testimonial Columns with Rating', 'raft' ),
	'categories' => array( 'raft/testimonials' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"raft-bg","layout":{"type":"constrained"},"metadata":{}} -->
		<div class="wp-block-group alignfull has-raft-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":287,"width":"88px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded"} -->
		<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-287" style="aspect-ratio:1;object-fit:cover;width:88px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
		<p class="has-text-align-left has-normal-font-size">' . esc_html( $raft_strings['testimonial'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|raft-accent"}}}},"textColor":"raft-accent","fontSize":"normal"} -->
		<p class="has-text-align-left has-raft-accent-color has-text-color has-link-color has-normal-font-size">★ ★ ★ ★ ★</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
		<p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['testimonial_name'] ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":287,"width":"88px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded"} -->
		<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-287" style="aspect-ratio:1;object-fit:cover;width:88px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
		<p class="has-text-align-left has-normal-font-size">' . esc_html( $raft_strings['testimonial'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|raft-accent"}}}},"textColor":"raft-accent","fontSize":"normal"} -->
		<p class="has-text-align-left has-raft-accent-color has-text-color has-link-color has-normal-font-size">★ ★ ★ ★ ★</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
		<p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['testimonial_name'] ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->
	',
);
