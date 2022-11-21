<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: testimonial-columns
 * title: Testimonial Columns
 * categories: raft
 * keywords: section, testimonial, columns, users
 */

$image = RAFT_URL . 'assets/img/shape-07.svg';

return array(
	'title'      => __( 'Testimonial Columns', 'raft' ),
	'categories' => array( 'raft' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"},"otterConditions":[]} -->
<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="' . esc_url( $image ) . '" alt="" width="150" height="150"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">"...Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium..."</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h3 class="has-text-align-center has-small-font-size" style="text-transform:uppercase">Smith Williamson</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="' . esc_url( $image ) . '" alt="" width="150" height="150"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">"...Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium..."</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h3 class="has-text-align-center has-small-font-size" style="text-transform:uppercase">Smith Williamson</h3>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
