<?php
/**
 * Posts Query Loop Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: posts-query-loop
 * title: Posts Query Loop
 * categories: raft/post_loops
 * keywords: posts, query, loop
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
    'title'      => __( 'Posts Query Loop', 'raft' ),
    'categories' => array( 'raft/post_loops' ),
    'content'    => '
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
        <div class="wp-block-query">
        <div class="wp-block-group">
            <!-- wp:post-template -->
            <!-- wp:post-featured-image {"align":"center"} /-->
            <!-- wp:post-date {"fontSize":"small"} /-->
            <!-- wp:post-title /-->
            <!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
            <!-- wp:post-excerpt {"moreText":"' . esc_html( $raft_strings['continue_reading'] ) . '","style":{"elements":{"link":{"color":{"text":"var:preset|color|raft-accent"}}}}} /-->
            <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:post-template -->

            <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
            <!-- wp:query-pagination-previous /-->
            <!-- wp:query-pagination-numbers /-->
            <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->

            <!-- wp:query-no-results -->
            <p class="has-raft-bg-alt-background-color has-background">' . esc_html( $raft_strings['no_posts_found'] ) . '</p>
            <!-- /wp:query-no-results -->
        </div>
        </div>
        </div>
    ',
);
