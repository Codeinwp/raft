<?php
/**
 * Hero Columns
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: hero-columns
 * title: Hero Columns
 * categories: raft/heroes_page_titles
 * keywords: hero, columns, design
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-011.svg',
);

return array(
	'title'      => __( 'Hero Columns', 'raft' ),
	'categories' => array( 'raft/heroes_page_titles' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-group alignwide"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"left","level":1} -->
		<h1 class="wp-block-heading has-text-align-left">' . esc_html( $raft_strings['hero_title'] ) . '</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"left"} -->
		<p class="has-text-align-left">' . esc_html( $raft_strings['feature_description'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"id":293,"aspectRatio":"1","scale":"contain","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-293" style="aspect-ratio:1;object-fit:contain"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
	',
);
