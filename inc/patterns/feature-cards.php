<?php
/**
 * Feature Cards
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: feature-cards
 * title: Feature Cards
 * categories: raft/features
 * keywords: feature, card, services
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-06.svg',
	RAFT_URL . 'assets/img/shape-05.svg',
);

return array(
	'title'      => __( 'Feature Cards', 'raft' ),
	'categories' => array( 'raft/features' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"},"metadata":{"name":"section title"}} -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">' . esc_html( $raft_strings['feature_section_title'] ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . esc_html( $raft_strings['section_description'] ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":288,"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"size-full"} -->
		<figure class="wp-block-image size-large size-full"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-288" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"raft-bg-alt","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . esc_html( $raft_strings['feature_description'] ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":287,"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"size-full"} -->
		<figure class="wp-block-image size-large size-full"><img src="' . esc_url( $images[1] ) . '" alt="" class="wp-image-287" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"raft-bg-alt","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . esc_html( $raft_strings['feature_description'] ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->
	',
);
