<?php
/**
 * Portfolio Columns Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: portfolio-columns
 * title: Portfolio Columns
 * categories: raft/features
 * keywords: portfolio, columns, work
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-06.svg',
	RAFT_URL . 'assets/img/shape-01.svg',
	RAFT_URL . 'assets/img/shape-04.svg',
	RAFT_URL . 'assets/img/shape-07.svg',
);

return array(
	'title'      => __( 'Portfolio Columns', 'raft' ),
	'categories' => array( 'raft/features' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70"}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column">
					<!-- wp:image {"id":288,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-288"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center"} -->
					<h2 class="wp-block-heading has-text-align-center">' . esc_html( $raft_strings['portfolio_title'] ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
					<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['portfolio_client'] ) . '</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column">
					<!-- wp:image {"id":283,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( $images[1] ) . '" alt="" class="wp-image-283"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center"} -->
					<h2 class="wp-block-heading has-text-align-center">' . esc_html( $raft_strings['portfolio_title'] ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
					<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['portfolio_client'] ) . '</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column">
					<!-- wp:image {"id":286,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( $images[2] ) . '" alt="" class="wp-image-286"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center"} -->
					<h2 class="wp-block-heading has-text-align-center">' . esc_html( $raft_strings['portfolio_title'] ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
					<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['portfolio_client'] ) . '</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column">
					<!-- wp:image {"id":289,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( $images[3] ) . '" alt="" class="wp-image-289"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center"} -->
					<h2 class="wp-block-heading has-text-align-center">' . esc_html( $raft_strings['portfolio_title'] ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
					<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['portfolio_client'] ) . '</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	',
);
