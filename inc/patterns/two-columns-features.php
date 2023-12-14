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
        <div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
        <div class="wp-block-group">
        <h2 class="wp-block-heading">' . esc_html( $raft_strings['feature_section_title'] ) . '</h2>
        <p class="has-medium-font-size">' . esc_html( $raft_strings['section_description'] ) . '</p>
        </div>
        <div class="wp-block-group">
        <div class="wp-block-columns">
        <div class="wp-block-column">
        <figure class="wp-block-image size-full"><img src="' . esc_url( $images[0] ) . '" alt="Illustration"/></figure>
        <h3 class="wp-block-heading">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
        <p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
        </div>
        <div class="wp-block-column">
        <figure class="wp-block-image size-full"><img src="' . esc_url( $images[1] ) . '" alt="Illustration"/></figure>
        <h3 class="wp-block-heading">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
        <p>' . esc_html( $raft_strings['feature_description'] ) . '</p>
        </div>
        </div>
        </div>
        </div>
    ',
);
