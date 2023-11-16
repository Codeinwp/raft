<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 *
 * slug: call-to-action
 * title: Call to action
 * categories: raft
 * keywords: section, cta, button
 */

return array(
	'title'      => __( 'Call to action', 'raft' ),
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:heading {"textAlign":"center","textColor":"ti-fg-alt"} -->
<h2 class="has-text-align-center has-ti-fg-alt-color has-text-color">Lorem ipsum sit dolor!</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"textColor":"ti-fg-alt","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-ti-fg-alt-color has-text-color">Lorem ipsum</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
);
