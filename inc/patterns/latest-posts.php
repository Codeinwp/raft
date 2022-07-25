<?php
/**
 * Latest posts
 *
 * slug: latest-posts
 * title: Latest posts
 * categories: raft
 * keywords: section, blog, posts, latest
 */

return [
	'title'      => __( 'Latest posts', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-bottom:80px">

<!-- wp:heading -->
<h2>Latest posts</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:latest-posts {"postsToShow":2,"displayPostContent":true,"excerptLength":14,"displayAuthor":true,"displayPostDate":true,"postLayout":"grid","columns":2,"displayFeaturedImage":true,"featuredImageAlign":"center","featuredImageSizeSlug":"large","addLinkToFeaturedImage":true} /-->

</div>
<!-- /wp:group -->',
];
