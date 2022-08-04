<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 *
 * slug: img-gallery
 * title: Image Gallery with title
 * categories: raft
 * keywords: gallery, images
 */

$illustrations = array(
	'shape-01.svg',
	'shape-05.svg',
	'shape-04.svg',

	'shape-03.svg',
	'shape-02.svg',
);

$illustrations_markup = '';

$strings = array(
	'title'  => __( 'Image Gallery with title', 'raft' ),
	'byline' => __( 'Add your text, and replace with your images', 'raft' ),
	'button' => __( 'View more photos', 'raft' ),
);

foreach ( $illustrations as $illustration ) {
	$illustrations_markup .= '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->';
	$illustrations_markup .= '<figure class="wp-block-image size-full">';
	$illustrations_markup .= '<img src="' . esc_url( RAFT_URL . 'assets/img/' . $illustration ) . '" alt="Illustration"/>';
	$illustrations_markup .= '</figure>';
	$illustrations_markup .= '<!-- /wp:image -->';
}


return array(
	'title'      => $strings['title'],
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">' . esc_html( $strings['title'] ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html( $strings['byline'] ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">

<!-- wp:gallery {"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center"} -->
<figure class="wp-block-gallery aligncenter has-nested-images columns-default">' . wp_kses_post( $illustrations_markup ) . '</figure>
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
<a class="wp-block-button__link has-raft-fg-alt-color has-text-color">' . esc_html( $strings['button'] ) . '</a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
',
);
