<?php
/**
 * Call to Action 3
 * 
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: call-to-action-3
 * title: Call to Action 3
 * categories: raft/call_to_action
 * keywords: call to action, cta, button, layout
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Call to Action 3', 'raft' ),
	'categories' => array( 'raft/call_to_action' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"},"dimensions":{"minHeight":""},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg-alt"}}}},"backgroundColor":"raft-accent","textColor":"raft-fg-alt","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
		<h2 class="wp-block-heading has-text-align-center has-huge-font-size">' . esc_html( $raft_strings['cta_title'] ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['short_text'] ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group -->
	',
);
