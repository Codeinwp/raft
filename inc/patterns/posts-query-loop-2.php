<?php
/**
 * Posts Query Loop 2 Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: posts-query-loop-2
 * title: Posts Query Loop 2
 * categories: raft/post_loops
 * keywords: posts, query, loop, grid
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
    'title'      => __( 'Posts Query Loop 2', 'raft' ),
    'categories' => array( 'raft/post_loops' ),
    'content'    => '
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
        <div class="wp-block-query alignwide">
            <!-- wp:post-template -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
                <!-- wp:post-featured-image {"height":"","align":"center"} /-->
                <!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
                <!-- wp:post-title /-->
            </div>
            <!-- /wp:post-template -->

            <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>

            <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
            <!-- wp:query-pagination-previous /-->
            <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->

            <!-- wp:query-no-results -->
            <p class="has-raft-bg-alt-background-color has-background">' . esc_html( $raft_strings['no_posts_found'] ) . '</p>
            <!-- /wp:query-no-results -->
        </div>
        </div>
    ',
);
