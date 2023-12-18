<?php
/**
 * Hero with Columns Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: hero-with-columns
 * title: Hero with Columns
 * categories: raft/heroes_page_titles
 * keywords: hero, columns, content
 */

$raft_strings = apply_filters( 'raft_strings', array() );
$images       = array(
	RAFT_URL . 'assets/img/shape-05.svg',
	RAFT_URL . 'assets/img/shape-06.svg',
	RAFT_URL . 'assets/img/shape-07.svg',
);

return array(
	'title'      => __( 'Hero with Columns', 'raft' ),
	'categories' => array( 'raft/heroes_page_titles' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"32px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxl"} -->
				<h1 class="wp-block-heading has-text-align-center has-xxl-font-size">' . esc_html( $raft_strings['hero_title'] ) . '</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
				<p class="has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['section_description'] ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"backgroundColor":"raft-accent"} -->
				<hr class="wp-block-separator has-text-color has-raft-accent-color has-alpha-channel-opacity has-raft-accent-background-color has-background"/>
				<!-- /wp:separator -->

				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"raft-bg-alt"} -->
					<div class="wp-block-column is-vertically-aligned-top has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded"} -->
						<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( $images[0] ) . '" alt=""/></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"fontSize":"medium"} -->
						<h2 class="wp-block-heading has-medium-font-size">' . esc_html( $raft_strings['content_subtitle'] ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"style":{"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"className":"is-style-fill"} -->
							<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"raft-bg-alt"} -->
					<div class="wp-block-column is-vertically-aligned-top has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded"} -->
						<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( $images[1] ) . '" alt=""/></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"fontSize":"medium"} -->
						<h2 class="wp-block-heading has-medium-font-size">' . esc_html( $raft_strings['content_subtitle'] ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"style":{"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"className":"is-style-fill"} -->
							<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"raft-bg-alt"} -->
					<div class="wp-block-column is-vertically-aligned-top has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded"} -->
						<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="' . esc_url( $images[2] ) . '" alt=""/></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"fontSize":"medium"} -->
						<h2 class="wp-block-heading has-medium-font-size">' . esc_html( $raft_strings['content_subtitle'] ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"style":{"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"className":"is-style-fill"} -->
							<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
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
