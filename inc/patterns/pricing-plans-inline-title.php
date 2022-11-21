<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: pricing-plans-inline-title
 * title: Pricing Plans inline title
 * categories: raft
 * keywords: section, pricing, columns
 */

$strings = array(
	'title' => __( 'Pricing Plans', 'raft' ),
);

return array(
	'title'      => $strings['title'] . ' 2',
	'categories' => array( 'raft' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"},"otterConditions":[]} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"className":"is-style-default"} -->
<h2 class="is-style-default">' . esc_html( $strings['title'] ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size">Choose the plan that works best for you!</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">All plans come with a 14-day refund period</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"16px"}},"backgroundColor":"raft-bg-alt"} -->
<div class="wp-block-column has-raft-bg-alt-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size">Agency</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">39.99$</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Ideal for agencies</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">100 activations</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">1 year of updates</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">1 year of support</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline","otterConditions":[]} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Buy Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"16px"}},"backgroundColor":"raft-bg-alt"} -->
<div class="wp-block-column has-raft-bg-alt-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="has-medium-font-size">Enterprise</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">99.99$</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Ideal for companies</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Unlimited activations</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">1 year of updates</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">1 year of support</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline","otterConditions":[]} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Buy Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
