<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 *
 * slug: images-text-columns
 * title: Two columns of features
 * categories: raft
 * keywords: section, image, text, columns, title
 */

$illustrations = array(
	'shape-05.svg',
	'shape-01.svg',
);

$strings = array(
	'title'           => __( 'Two columns of features', 'raft' ),
	'byline'          => 'Lorem ipsum dolor sit amet',
	'feature_title'   => 'Lorem ipsum',
	'feature_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.',
);

$columns_markup = '';

foreach ( $illustrations as $illustration ) {
	$columns_markup .= '<!-- wp:column -->';
	$columns_markup .= '<div class="wp-block-column">';

	$columns_markup .= '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->';
	$columns_markup .= '<figure class="wp-block-image size-full">';
	$columns_markup .= '<img src="' . esc_url( RAFT_URL . 'assets/img/' . $illustration ) . '" alt="Illustration"/>';
	$columns_markup .= '</figure>';
	$columns_markup .= '<!-- /wp:image -->';

	$columns_markup .= '<!-- wp:heading {"level":3} -->';
	$columns_markup .= '<h3>' . esc_html( $strings['feature_title'] ) . '</h3>';
	$columns_markup .= '<!-- /wp:heading -->';

	$columns_markup .= '<!-- wp:paragraph -->';
	$columns_markup .= '<p>' . esc_html( $strings['feature_content'] ) . '</p>';
	$columns_markup .= '<!-- /wp:paragraph -->';

	$columns_markup .= '</div>';
	$columns_markup .= '<!-- /wp:column -->';
}

return array(
	'title'      => $strings['title'],
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">

<!-- wp:heading -->
<h2>' . esc_html( $strings['title'] ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">' . esc_html( $strings['byline'] ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:group -->
<div class="wp-block-group">

<!-- wp:columns -->
<div class="wp-block-columns">' . wp_kses_post( $columns_markup ) . '</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
);
