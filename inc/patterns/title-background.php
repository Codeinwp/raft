<?php
/**
 * Page Title on Background
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: title-background
 * title: Page title on background
 * categories: raft/heroes_page_titles
 * keywords: page, title, background, layout
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Page title on background', 'raft' ),
	'categories' => array( 'raft/heroes_page_titles' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg-alt"}}}},"backgroundColor":"raft-bg-inv","textColor":"raft-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","orientation":"vertical"}} -->
		<div class="wp-block-group alignwide"><!-- wp:post-title {"level":1} /-->

		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
	',
);
