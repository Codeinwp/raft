<?php
/**
 * Inverted Gallery with Title
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: inverted-gallery-with-title
 * title: Inverted Gallery with Title
 * categories: raft/content
 * keywords: gallery, inverted, title
 */

$raft_strings = apply_filters( 'raft_strings', array() );

// Define image URLs.
$images = array(
	RAFT_URL . 'assets/img/shape-01.svg',
	RAFT_URL . 'assets/img/shape-07.svg',
	RAFT_URL . 'assets/img/shape-06.svg',
	RAFT_URL . 'assets/img/shape-05.svg',
	RAFT_URL . 'assets/img/shape-08.svg',
);

return array(
	'title'      => __( 'Inverted Gallery with Title', 'raft' ),
	'categories' => array( 'raft/content' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-bg-inv","textColor":"raft-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"30%"} -->
                    <div class="wp-block-column" style="flex-basis:30%">
                        <!-- wp:heading -->
                        <h2 class="wp-block-heading">' . esc_html( $raft_strings['section_title'] ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $raft_strings['section_description'] ) . '</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%">
                        <!-- wp:gallery {"linkTo":"none"} -->
                        <figure class="wp-block-gallery has-nested-images columns-default is-cropped">
                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[0] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[1] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[2] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[3] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[4] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->
                        </figure>
                        <!-- /wp:gallery -->
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
