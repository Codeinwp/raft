<?php
/**
 * Posts Loop Rows
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: posts-loop-rows
 * title: Posts Loop Rows
 * categories: raft/post_loops
 * keywords: loop, rows, posts
 */

$raft_strings = apply_filters( 'raft_strings', array() );

// Define images array if needed here.

return array(
	'title'      => __( 'Posts Loop Rows', 'raft' ),
	'categories' => array( 'raft/post_loops' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:query {"queryId":4,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"enhancedPagination":true,"align":"wide","layout":{"type":"default"}} -->
			<div class="wp-block-query alignwide">
				<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":1}} -->
				<!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
				<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:post-featured-image {"isLink":true} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:50%">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
						<div class="wp-block-group has-small-font-size">
							<!-- wp:post-terms {"term":"category"} /-->

							<!-- wp:post-date /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:post-title {"textAlign":"left","isLink":true,"fontSize":"medium"} /-->

						<!-- wp:read-more {"content":"' . esc_html( $raft_strings['continue_reading'] ) . '","style":{"elements":{"link":{"color":{"text":"var:preset|color|raft-accent"}}}},"textColor":"raft-accent"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- /wp:post-template -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">
					<!-- wp:query-pagination {"textColor":"raft-fg","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous /-->

					<!-- wp:query-pagination-numbers /-->

					<!-- wp:query-pagination-next /-->
					<!-- /wp:query-pagination -->
				</div>
				<!-- /wp:group -->

				<!-- wp:query-no-results -->
				<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results.","backgroundColor":"raft-bg-alt"} -->
				<p class="has-text-align-center has-raft-bg-alt-background-color has-background">Unfortunately no posts were found</p>
				<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
	',
);
