<?php
/**
 * Images & text - two columns
 *
 * slug: images-text-columns
 * title: Images & text - two columns
 * categories: raft
 * keywords: section, image, text, columns, title
 */

$illustrations = [
	'shape-05.png',
	'shape-01.png'
];

return [
	'title'      => __( 'Images & text - two columns', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5vw","bottom":"5vw"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="padding-top:5vw;padding-bottom:5vw">

<!-- wp:heading -->
<h2>Hello world</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">This is just some text.</p>
<!-- /wp:paragraph -->

<!-- wp:group -->
<div class="wp-block-group">

<!-- wp:columns -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( RAFT_URL . 'assets/img/' . $illustrations[0] ) . '" alt="Illustration"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>This is one</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Meetings are most productive when we create something that none of us could have created alone. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( RAFT_URL . 'assets/img/' . $illustrations[1] ) . '" alt="Illustration"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>This is two</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Meetings are most productive when we create something that none of us could have created alone. </p>
<!-- /wp:paragraph -->
</div>

<!-- /wp:column -->
</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
];
