<?php
/**
 * Pricing Plans 4 Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: pricing-4
 * title: Pricing Plans 4
 * categories: raft/pricing
 * keywords: pricing, plans, premium
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Pricing Plans 4', 'raft' ),
	'categories' => array( 'raft/pricing' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70"},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg-alt"}}}},"backgroundColor":"raft-bg-inv","textColor":"raft-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-group alignwide"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-radius:5px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['plan_title'] ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
		<p class="has-text-align-center has-huge-font-size">' . esc_html( $raft_strings['price'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"16px"} -->
		<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
		<p class="has-text-align-center has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
		<p class="has-text-align-center has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
		<p class="has-text-align-center has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"16px"} -->
		<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"textColor":"raft-fg-alt","width":100} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg"}}}},"backgroundColor":"raft-bg","textColor":"raft-fg","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-raft-fg-color has-raft-bg-background-color has-text-color has-background has-link-color" style="border-radius:5px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['plan_title'] ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
		<p class="has-text-align-center has-huge-font-size">' . esc_html( $raft_strings['price'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"16px"} -->
		<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
		<p class="has-text-align-center has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
		<p class="has-text-align-center has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
		<p class="has-text-align-center has-normal-font-size">' . esc_html( $raft_strings['price_feature'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"16px"} -->
		<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"textColor":"raft-fg-alt","width":100,"className":"is-style-fill"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
	',
);
