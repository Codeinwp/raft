<?php
/**
 * Centered Title Pattern
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: centered-title
 * title: Centered Title
 * categories: raft/heroes_page_titles
 * keywords: centered, title, content
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Centered Title', 'raft' ),
	'categories' => array( 'raft/heroes_page_titles' ),
	'content'    => '
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group has-raft-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
            <h1 class="wp-block-heading has-text-align-center has-huge-font-size">' . esc_html( $raft_strings['page_title'] ) . '</h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    ',
);
