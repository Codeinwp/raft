<?php
/**
 * Image Gallery with Title
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: image-gallery
 * title: Image Gallery with Title
 * categories: raft/content
 * keywords: image, gallery, title
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-01.svg',
	RAFT_URL . 'assets/img/shape-05.svg',
	RAFT_URL . 'assets/img/shape-04.svg',
	RAFT_URL . 'assets/img/shape-03.svg',
	RAFT_URL . 'assets/img/shape-02.svg',
);

return array(
	'title'      => __( 'Image Gallery with Title', 'raft' ),
	'categories' => array( 'raft/content' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center">' . esc_html( $raft_strings['section_title'] ) . '</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">' . esc_html( $raft_strings['section_description'] ) . '</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"align":"wide"} -->
        <div class="wp-block-group alignwide"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:gallery {"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center"} -->
        <figure class="wp-block-gallery aligncenter has-nested-images columns-default">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="' . esc_url( $images[0] ) . '" alt="Illustration"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="' . esc_url( $images[1] ) . '" alt="Illustration"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="' . esc_url( $images[2] ) . '" alt="Illustration"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="' . esc_url( $images[3] ) . '" alt="Illustration"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="' . esc_url( $images[4] ) . '" alt="Illustration"/></figure>
            <!-- /wp:image -->
        </figure>
        <!-- /wp:gallery --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"textColor":"raft-fg-alt"} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:group -->
    ',
);
