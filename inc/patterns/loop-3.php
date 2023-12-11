<?php
/**
 * Posts Query Loop 3
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: loop-3
 * title: Posts Query Loop 3
 * categories: raft/post_loops
 * keywords: post, loop, query
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Posts Query Loop 3', 'raft' ),
	'categories' => array( 'raft/post_loops' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"inherit":false}} -->
		<div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['subtitle'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:query {"queryId":18,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"taxQuery":null},"enhancedPagination":true} -->
		<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

		<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /--></div>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
	',
);
