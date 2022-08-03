<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 *
 * slug: cover-background
 * title: Cover title with background
 * categories: raft
 * keywords: cover, section, header, hero
 */

$hero_illustration = RAFT_URL . 'assets/img/raft-cover-bg.svg';

$strings = array(
	'title'  => __( 'This is a cover with a background image', 'raft' ),
	'byline' => 'Lorem ipsum dolor',
	'button' => __( 'This is a button', 'raft' ),
);

return array(
	'title'      => __( 'Cover title with background', 'raft' ),
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:cover {"url":"' . esc_url( $hero_illustration ) . '","dimRatio":60,"overlayColor":"black","minHeight":60,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:60vh">
<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span>
<img class="wp-block-cover__image-background" alt="" src="' . esc_url( $hero_illustration ) . '" data-object-fit="cover"/>
<div class="wp-block-cover__inner-container">

<!-- wp:group {"textColor":"raft-fg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group has-raft-fg-alt-color has-text-color">

<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="has-huge-font-size">' . esc_html( $strings['title'] ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">' . esc_html( $strings['byline'] ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html( $strings['button'] ) . '</a></div>
<!-- /wp:button -->
</div>

<!-- /wp:buttons -->
</div>

<!-- /wp:group -->
</div>

</div>
<!-- /wp:cover -->',
);
