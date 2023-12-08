<?php
/**
 * Page Title with Button
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: title-button
 * title: Page title with button
 * categories: raft/heroes_page_titles
 * keywords: page, title, button, layout
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Page title with button', 'raft' ),
	'categories' => array( 'raft/heroes_page_titles' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|raft-accent","width":"4px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--raft-accent);border-left-width:4px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
		<h1 class="wp-block-heading has-text-align-center has-huge-font-size">' . esc_html( $raft_strings['page_title'] ) . '</h1>
		<!-- /wp:heading --></div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"textColor":"raft-fg-alt"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
	',
);
