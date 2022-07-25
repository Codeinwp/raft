<?php
/**
 * Cover background
 *
 * slug: cover-background
 * title: Cover with background
 * categories: raft
 * keywords: cover, section, header, hero
 */

$hero_illustration = RAFT_URL . 'assets/img/raft-cover-bg.jpg';

return [
	'title'      => __( 'Cover with background', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
<!-- wp:cover {"url":"' . esc_url( $hero_illustration ) . '","dimRatio":60,"overlayColor":"black","minHeight":60,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:60vh">
<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span>
<img class="wp-block-cover__image-background" alt="Illustration Background" src="' . esc_url( $hero_illustration ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"textColor":"raft-fg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group has-raft-fg-alt-color has-text-color">
<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="has-huge-font-size">This is a cover, with a background image</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">This is some text</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button">
<a class="wp-block-button__link">This is a button</a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
</div>
<!-- /wp:cover -->',
];
