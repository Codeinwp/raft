<?php
/**
 * Homepage 2
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: homepage-2
 * title: Homepage 2
 * categories: raft/pages
 * keywords: home, landing
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Homepage 2', 'raft' ),
	'categories' => array( 'raft/pages' ),
	'content'    => '
				<!-- wp:pattern {"slug":"raft/hero-columns"} /-->
                <!-- wp:pattern {"slug":"raft/features-background"} /-->
                <!-- wp:pattern {"slug":"raft/single-feature-button"} /-->
				<!-- wp:pattern {"slug":"raft/testimonial-fullwidth"} /-->
				<!-- wp:pattern {"slug":"raft/call-to-action-image"} /-->

    ',
);
