<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: content-columns-with-hero
 * title: Content columns with hero
 * categories: raft
 * keywords: section, content, columns, hero
 */

return array(
	'title'      => __( 'Content columns with hero', 'raft' ),
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"},"otterConditions":[]} -->
<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="has-text-align-center has-huge-font-size">Lorem ipsum sit dolor</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3} -->
<h3>Lorem ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Dolor si amet</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( RAFT_URL . 'assets/img/shape-05.svg' ) . '" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
