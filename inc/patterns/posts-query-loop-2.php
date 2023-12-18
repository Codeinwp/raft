<?php
/**
 * Post Query Loop 2 Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: post-query-loop-2
 * title: Post Query Loop 2
 * categories: raft/post_loops
 * keywords: post, query, loop
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Post Query Loop 2', 'raft' ),
	'categories' => array( 'raft/post_loops' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:query {"queryId":3,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} -->
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
                    <!-- wp:post-featured-image {"height":"","align":"center"} /-->

                    <!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->

                    <!-- wp:post-title /-->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:spacer {"height":"80px"} -->
                <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"backgroundColor":"raft-bg-alt"} -->
                <p class="has-raft-bg-alt-background-color has-background">' . esc_html( $raft_strings['no_posts_found'] ) . '</p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    ',
);
