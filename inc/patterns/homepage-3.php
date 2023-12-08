<?php
/**
 * Homepage 3
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: homepage-3
 * title: Homepage 3
 * categories: raft/pages
 * keywords: home, landing
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Homepage 3', 'raft' ),
	'categories' => array( 'raft/pages' ),
	'content'    => '
				<!-- wp:pattern {"slug":"raft/hero-boxed"} /-->
				<!-- wp:pattern {"slug":"raft/alternating-feature-columns"} /-->
				<!-- wp:pattern {"slug":"raft/inverted-background"} /-->
				<!-- wp:pattern {"slug":"raft/testimonial-cards"} /-->
				<!-- wp:pattern {"slug":"raft/call-to-action-3"} /-->

	',
);
