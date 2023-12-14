<?php
/**
 * Portfolio Page
 *
 * @author Themeisle
 * @package raft
 * @since 1.1.0
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
    <h1 class="wp-block-heading alignwide has-text-align-center">' . esc_html( $raft_strings['portfolio_section_title'] ) . '</h1>
    <!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"raft/portfolio-columns"} /-->
<!-- wp:pattern {"slug":"raft/testimonial-fullwidth"} /-->
<!-- wp:pattern {"slug":"raft/call-to-action-image"} /-->';
