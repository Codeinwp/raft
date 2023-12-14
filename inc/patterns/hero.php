<?php
/**
 * Hero Section Pattern for Raft Theme
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: hero
 * title: Hero Section
 * categories: raft/heroes_page_titles
 * keywords: hero, banner, call-to-action
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$image_url = RAFT_URL . 'assets/img/raft-illustration.svg';

return array(
    'title'      => __( 'Hero Section', 'raft' ),
    'categories' => array( 'raft/heroes_page_titles' ),
    'content'    => '
        <div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
        <h1 class="wp-block-heading has-text-align-center has-huge-font-size">' . esc_html( $raft_strings['hero_title'] ) . '</h1>
        <p class="has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['paragraph_text'] ) . '</p>
        <div class="wp-block-buttons">
        <div class="wp-block-button"><a class="wp-block-button__link has-raft-fg-alt-color has-text-color wp-element-button">' . esc_html( $raft_strings['button_text'] ) . '</a></div>
        </div>
        <div style="height:3vw" aria-hidden="true" class="wp-block-spacer"></div>
        <figure class="wp-block-image aligncenter size-large"><img src="' . esc_url($image_url) . '" alt="Hero Illustration"/></figure>
        </div>
    ',
);
