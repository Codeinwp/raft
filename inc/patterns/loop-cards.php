<?php
/**
 * Posts Loop Cards Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: loop-cards
 * title: Posts Loop Cards
 * categories: raft/post_loops
 * keywords: posts, loop, cards
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Posts Loop Cards', 'raft' ),
	'categories' => array( 'raft/post_loops' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"enhancedPagination":true,"align":"wide","layout":{"type":"default"}} -->
			<div class="wp-block-query alignwide">
				<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true} /-->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"raft-bg-alt","layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"small"} -->
						<div class="wp-block-group has-small-font-size">
							<!-- wp:post-date /-->

							<!-- wp:post-terms {"term":"category"} /--></div>
						<!-- /wp:group -->

						<!-- wp:post-title {"textAlign":"left","isLink":true,"fontSize":"medium"} /-->

						<!-- wp:read-more {"content":"' . esc_html( $raft_strings['continue_reading'] ) . '","style":{"elements":{"link":{"color":{"text":"var:preset|color|raft-accent"}}}},"textColor":"raft-accent"} /--></div>
					<!-- /wp:group --></div>
				<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
					<!-- wp:query-pagination {"textColor":"raft-fg","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous /-->

					<!-- wp:query-pagination-numbers /-->

					<!-- wp:query-pagination-next /-->
					<!-- /wp:query-pagination --></div>
				<!-- /wp:group -->

				<!-- wp:query-no-results -->
				<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results.","backgroundColor":"raft-bg-alt"} -->
				<p class="has-text-align-center has-raft-bg-alt-background-color has-background">' . esc_html( $raft_strings['no_posts_found'] ) . '</p>
				<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
	',
);
