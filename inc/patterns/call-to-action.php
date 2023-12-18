<?php
/**
 * Call to Action Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: call-to-action
 * title: Call to Action
 * categories: raft/call_to_action
 * keywords: call to action, engagement, interaction
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Call to Action', 'raft' ),
	'categories' => array( 'raft/call_to_action' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-accent","textColor":"raft-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"textAlign":"center","textColor":"raft-fg-alt"} -->
			<h2 class="wp-block-heading has-text-align-center has-raft-fg-alt-color has-text-color">' . esc_html( $raft_strings['cta_title'] ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"raft-fg-alt","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	',
);
