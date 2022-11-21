<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: hero-with-columns
 * title: Hero section with columns
 * categories: raft
 * keywords: section, hero, columns
 */

$strings = array(
	'title'      => __( 'Hero section with columns', 'raft' ),
	'learn_more' => __( 'Learn More', 'raft' ),
);

$image = RAFT_URL . 'assets/img/shape-05.svg';


return array(
	'title'      => $strings['title'],
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"32px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"},"otterConditions":[]} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"32px"}},"otterConditions":[]} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxl"} -->
<h1 class="has-text-align-center has-xxl-font-size">' . esc_html( $strings['title'] ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"raft-accent"} -->
<hr class="wp-block-separator has-text-color has-raft-accent-color has-alpha-channel-opacity has-raft-accent-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"raft-bg-alt"} -->
<div class="wp-block-column is-vertically-aligned-top has-raft-bg-alt-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
<!-- wp:image {"width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( $image ) . '" alt="" width="150" height="150"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"medium"} -->
<h2 class="has-medium-font-size">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"className":"is-style-fill","otterConditions":[]} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px">' . esc_html( $strings['learn_more'] ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"raft-bg-alt"} -->
<div class="wp-block-column is-vertically-aligned-top has-raft-bg-alt-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
<!-- wp:image {"width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( $image ) . '" alt="" width="150" height="150"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"medium"} -->
<h2 class="has-medium-font-size">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing. sed do eiusmod tempor incididunt ut labore et dolore.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"className":"is-style-fill","otterConditions":[]} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px">' . esc_html( $strings['learn_more'] ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"raft-bg-alt"} -->
<div class="wp-block-column is-vertically-aligned-top has-raft-bg-alt-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
<!-- wp:image {"width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( $image ) . '" alt="" width="150" height="150"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"fontSize":"medium"} -->
<h2 class="has-medium-font-size">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"className":"is-style-fill","otterConditions":[]} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px">' . esc_html( $strings['learn_more'] ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
