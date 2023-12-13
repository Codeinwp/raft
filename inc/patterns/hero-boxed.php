<?php
/**
 * Hero Cover with Boxed Title
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: hero-boxed
 * title: Hero Cover with boxed title
 * categories: raft/heroes_page_titles
 * keywords: hero, cover, boxed, title
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/raft-cover-bg.svg',
);

return array(
	'title'      => __( 'Hero Cover with boxed title', 'raft' ),
	'categories' => array( 'raft/heroes_page_titles' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( $images[0] ) . '","id":281,"dimRatio":0,"minHeight":60,"minHeightUnit":"vw","contentPosition":"center center","isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"color":{}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);min-height:60vw"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-281" alt="" src="' . esc_url( $images[0] ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg-alt"}}}},"backgroundColor":"raft-bg-inv","textColor":"raft-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group has-raft-fg-alt-color has-raft-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
		<h1 class="wp-block-heading has-text-align-center has-huge-font-size">' . esc_html( $raft_strings['hero_title'] ) . '</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['section_description'] ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover --></div>
		<!-- /wp:group -->
	',
);
