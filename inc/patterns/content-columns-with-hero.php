<?php
/**
 * Content Columns with Hero Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: content-columns-with-hero
 * title: Content Columns with Hero
 * categories: raft/content
 * keywords: content, columns, hero
 */

$raft_strings = apply_filters( 'raft_strings', array() );
$images       = array(
	RAFT_URL . 'assets/img/shape-05.svg',
);

return array(
	'title'      => __( 'Content Columns with Hero', 'raft' ),
	'categories' => array( 'raft/content' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"layout":{"inherit":false}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
				<h2 class="wp-block-heading has-text-align-center has-huge-font-size">' . esc_html( $raft_strings['section_title'] ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size">' . esc_html( $raft_strings['section_description'] ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:spacer {"height":"40px"} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:heading {"level":3} -->
						<h3 class="wp-block-heading">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":3} -->
						<h3 class="wp-block-heading">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full"><img src="' . esc_url( $images[0] ) . '" alt=""/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	',
);
