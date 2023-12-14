<?php
/**
 * Content Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: horizontal-content-cards
 * title: Content
 * categories: raft/content
 * keywords: content, text, button
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-05.svg',
	RAFT_URL . 'assets/img/shape-09.svg',
);

return array(
	'title'      => __( 'Horizontal content cards', 'raft' ),
	'categories' => array( 'raft/content' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0"}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"inherit":false}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"backgroundColor":"raft-bg-alt"} -->
                <div class="wp-block-columns are-vertically-aligned-center has-raft-bg-alt-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                    <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="' . esc_url( $images[0] ) . '" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">' . esc_html( $raft_strings['content_title'] ) . '</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-primary"} -->
                        <div class="wp-block-button is-style-primary"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
                        <!-- /wp:button --></div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"backgroundColor":"raft-bg-alt"} -->
                <div class="wp-block-columns are-vertically-aligned-center has-raft-bg-alt-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                    <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="' . esc_url( $images[1] ) . '" alt="" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">' . esc_html( $raft_strings['content_title'] ) . '</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-primary"} -->
                        <div class="wp-block-button is-style-primary"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
                        <!-- /wp:button --></div>
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
