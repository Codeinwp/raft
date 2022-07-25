<?php
/**
 * Image Gallery.
 *
 * slug: img-gallery
 * title: Image gallery
 * categories: raft
 * keywords: gallery, images
 */

$illustrations = [
	'shape-01.png',
	'shape-02.png',
	'shape-03.png',
	'shape-04.png',
	'shape-05.png',
];

$illustrations_markup = '';

foreach ( $illustrations as $illustration ) {
	$illustrations_markup .= '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->';
	$illustrations_markup .= '<figure class="wp-block-image size-full">';
	$illustrations_markup .= '<img src="' . esc_url( RAFT_URL . 'assets/img/' . $illustration ) . '" alt="Illustration"/>';
	$illustrations_markup .= '</figure>';
	$illustrations_markup .= '<!-- /wp:image -->';
}


return [
	'title'      => __( 'Image gallery', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","right":"24px","bottom":"80px","left":"24px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">A pattern with an image Gallery</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">This is just some text.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">

<!-- wp:gallery {"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center"} -->
<figure class="wp-block-gallery aligncenter has-nested-images columns-default">' . $illustrations_markup . '</figure>
<!-- /wp:gallery -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">

<!-- wp:button {"textColor":"raft-fg-alt"} -->
<div class="wp-block-button">
<a class="wp-block-button__link has-raft-fg-alt-color has-text-color">View more photos</a>
</div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
',
];
