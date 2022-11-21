<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: inverted-gallery-with-title
 * title: Inverted gallery with title
 * categories: raft
 * keywords: section, gallery, image, title, images
 */

$strings = array(
	'title' => __( 'Inverted gallery with title', 'raft' ),
);

$images = array(
	RAFT_URL . 'assets/img/shape-01.svg',
	RAFT_URL . 'assets/img/shape-07.svg',
	RAFT_URL . 'assets/img/shape-06.svg',
	RAFT_URL . 'assets/img/shape-05.svg',
	RAFT_URL . 'assets/img/shape-08.svg',

);

return array(
	'title'      => $strings['title'],
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-fg","textColor":"raft-bg","layout":{"inherit":true,"type":"constrained"},"otterConditions":[]} -->
<div class="wp-block-group alignfull has-raft-bg-color has-raft-fg-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading -->
<h2>' . esc_html( $strings['title'] ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . $images[0] . '" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . $images[1] . '" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . $images[2] . '" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . $images[3] . '" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . $images[4] . '" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
