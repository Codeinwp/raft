<?php
/**
 * Text Columns Pattern
 * 
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: text-columns
 * title: Text Columns
 * categories: raft/content
 * keywords: text, columns, content
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Text Columns', 'raft' ),
	'categories' => array( 'raft/content' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-group alignwide">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">' . esc_html( $raft_strings['content_title'] ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html( $raft_strings['paragraph_text'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:separator {"backgroundColor":"raft-accent"} -->
		<hr class="wp-block-separator has-text-color has-raft-accent-color has-alpha-channel-opacity has-raft-accent-background-color has-background"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size">' . esc_html( $raft_strings['feature_description'] ) . '</p>
		<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
		<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['content_subtitle'] ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
		<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['content_subtitle'] ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html( $raft_strings['paragraph_text'] ) . '</p>
		<!-- /wp:paragraph -->
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
