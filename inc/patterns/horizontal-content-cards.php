<?php
/**
 * Horizontal Content Cards Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: horizontal-content-cards
 * title: Horizontal Content Cards
 * categories: raft/content
 * keywords: horizontal, content, cards
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
    RAFT_URL . 'assets/img/shape-05.svg',
    RAFT_URL . 'assets/img/shape-09.svg',
);

return array(
    'title'      => __( 'Horizontal Content Cards', 'raft' ),
    'categories' => array( 'raft/content' ),
    'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0"}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
        <div class="wp-block-group alignwide">
        <div class="wp-block-columns are-vertically-aligned-center has-raft-bg-alt-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
        <figure class="wp-block-image size-full"><img src="' . esc_url( $images[0] ) . '" alt=""/></figure>
        </div>
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
        <h3 class="wp-block-heading">' . esc_html( $raft_strings['content_title'] ) . '</h3>
        <p>' . esc_html( $raft_strings['paragraph_text'] ) . '</p>
        <div class="wp-block-buttons"><div class="wp-block-button is-style-primary"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div></div>
        </div>
        </div>
        </div>
        <div class="wp-block-group alignwide">
        <div class="wp-block-columns are-vertically-aligned-center has-raft-bg-alt-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
        <figure class="wp-block-image size-full"><img src="' . esc_url( $images[1] ) . '" alt=""/></figure>
        </div>
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
        <h3 class="wp-block-heading">' . esc_html( $raft_strings['content_title'] ) . '</h3>
        <p>' . esc_html( $raft_strings['paragraph_text'] ) . '</p>
        <div class="wp-block-buttons"><div class="wp-block-button is-style-primary"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div></div>
        </div>
        </div>
        </div>
        </div>
        <!-- /wp:group -->
    ',
);
