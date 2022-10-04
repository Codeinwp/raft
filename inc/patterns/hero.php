<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 *
 * Hero Section
 *
 * slug: hero
 * title: Hero Section
 * categories: raft
 * keywords: hero, section, header, hero section, hero header, hero section header, hero header section, hero header section
 */

$hero_illustration = RAFT_URL . 'assets/img/raft-illustration.svg';

$strings = array(
	'title'    => __( 'Block-based websites made simple.', 'raft' ),
	'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.',
	'button'   => __( 'Learn More', 'raft' ),
);

return array(
	'title'      => __( 'Hero section', 'raft' ),
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"24px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group has-raft-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
<h1 class="has-text-align-center has-huge-font-size">' . esc_html( $strings['title'] ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">' . esc_html( $strings['subtitle'] ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">

<!-- wp:button {"textColor":"raft-fg-alt"} -->
<div class="wp-block-button">
<a class="wp-block-button__link has-raft-fg-alt-color has-text-color">' . esc_html( $strings['button'] ) . '</a>
</div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"3vw"} -->
<div style="height:3vw" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large">
<img src="' . esc_url( $hero_illustration ) . '" alt="Hero Illustration"/>
</figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->
',
);
