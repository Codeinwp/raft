<?php
/**
 * Cover Title with Background Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: cover-background
 * title: Cover Title with Background
 * categories: raft/heroes_page_titles
 * keywords: cover, title, background
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$image_url = RAFT_URL . 'assets/img/raft-cover-bg.svg';

return array(
    'title'      => __( 'Cover Title with Background', 'raft' ),
    'categories' => array( 'raft/heroes_page_titles' ),
    'content'    => '
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <div class="wp-block-cover alignfull has-black-background-color has-background-dim-60" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:600px; background-image:url(' . esc_url($image_url) . ');">
        <div class="wp-block-cover__inner-container">
        <div class="wp-block-group has-raft-fg-alt-color has-text-color">
        <h1 class="wp-block-heading">' . esc_html( $raft_strings['hero_title'] ) . '</h1>
        <p class="has-medium-font-size">' . esc_html( $raft_strings['short_text'] ) . '</p>
        <div class="wp-block-buttons">
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
        </div>
        </div>
        </div>
        </div>
        </div>
    ',
);
