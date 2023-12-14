<?php
/**
 * Two Columns of Features Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: two-columns-features
 * title: Two Columns of Features
 * categories: raft/features
 * keywords: two columns, features, services
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-05.svg',
	RAFT_URL . 'assets/img/shape-01.svg',
);

return array(
	'title'      => __( 'Two Columns of Features', 'raft' ),
	'categories' => array( 'raft/features' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading -->
                <h2 class="wp-block-heading">' . esc_html( $raft_strings['feature_section_title'] ) . '</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size">' . esc_html( $raft_strings['section_description'] ) . '</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                    <div class="wp-block-column">
                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="' . esc_url( $images[0] ) . '" alt="Illustration"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                    <div class="wp-block-column">
                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="' . esc_url( $images[1] ) . '" alt="Illustration"/></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
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
