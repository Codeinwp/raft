<?php
/**
 * Latest posts query loop
 *
 * slug: latest-posts-2
 * title: Latest posts 2
 * categories: raft
 * keywords: section, blog, posts, latest
 */

return [
	'title'      => __( 'Latest posts 2', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-bottom:80px">

<!-- wp:heading -->
<h2>Latest posts Query loop</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query">

<!-- wp:post-template -->
<!-- wp:post-featured-image {"align":"center"} /-->
<!-- wp:post-date {"fontSize":"small"} /-->
<!-- wp:post-title /-->
<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eGo to post\u003c/strong\u003e","style":{"elements":{"link":{"color":{"text":"var:preset|color|raft-accent"}}}}} /-->
<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results.","backgroundColor":"raft-bg-alt"} -->
<p class="has-raft-bg-alt-background-color has-background">Unfortunately, no posts were found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->',
];
