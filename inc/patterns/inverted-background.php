<?php
/**
 * Inverted Background Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: inverted-background
 * title: Inverted Background
 * categories: raft/content
 * keywords: inverted, background
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-01.svg',
	RAFT_URL . 'assets/img/shape-04.svg',
);

return array(
	'title'      => __( 'Inverted Background', 'raft' ),
	'categories' => array( 'raft/content' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-bg-inv","textColor":"raft-fg-alt","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:group {"align":"wide"} -->
            <div class="wp-block-group alignwide">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading -->
                        <h2 class="wp-block-heading">' . esc_html( $raft_strings['section_title'] ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $raft_strings['section_description'] ) . '</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                    <div class="wp-block-column">
                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full">
                            <img src="' . esc_url( $images[0] ) . '" alt="Illustration"/>
                        </figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">' . esc_html( $raft_strings['subtitle'] ) . '</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">' . esc_html( $raft_strings['subtitle'] ) . '</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full">
                            <img src="' . esc_url( $images[1] ) . '" alt="Illustration"/>
                        </figure>
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
