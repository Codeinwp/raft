<?php
/**
 * Images & text - three columns
 *
 * slug: images-text-columns-2
 * title: Images & text - three columns
 * categories: raft
 * keywords: section, image, text, columns, title
 */

$illustrations = [
	'shape-01.png',
	'shape-04.png'
];

return [
	'title'      => __( 'Images & text - three columns', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","right":"24px","bottom":"80px","left":"24px"}}},"backgroundColor":"raft-fg","textColor":"raft-bg","layout":{"inherit":false,"wideSize":"960px"}} -->
<div class="wp-block-group alignfull has-raft-bg-color has-raft-fg-background-color has-text-color has-background" style="padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">

<!-- wp:group -->
<div class="wp-block-group">

<!-- wp:columns -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading -->
<h2>Hello world</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">This is just some text.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( RAFT_URL . 'assets/img/' . $illustrations[0] ) . '" alt="Illustration"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>This is a title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Meetings are most productive when we create something that none of us could have created alone. </p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( RAFT_URL . 'assets/img/' . $illustrations[1] ) . '" alt="Illustration"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>This is a title</h3>
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
