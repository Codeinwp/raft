<?php
/**
 * Call to Action Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: call-to-action-pattern
 * title: Call to Action 2
 * categories: raft/call_to_action
 * keywords: call to action, CTA, engagement
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Call to Action 2', 'raft' ),
	'categories' => array( 'raft/call_to_action' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-group alignwide"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading -->
		<h2 class="wp-block-heading">' . esc_html( $raft_strings['cta_title'] ) . '</h2>
		<!-- /wp:heading --></div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"align":"left"} -->
		<p class="has-text-align-left">' . esc_html( $raft_strings['feature_description'] ) . '</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-primary is-style-fill"} -->
		<div class="wp-block-button is-style-primary is-style-fill"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
	',
);
