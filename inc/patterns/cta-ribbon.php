<?php
/**
 * Hero Section.
 *
 * slug: hero
 * title: Hero Section
 * categories: raft
 * keywords: hero, section, header, hero section, hero header, hero section header, hero header section, hero header section
 * description: The Raft front page hero section
 */

return [
	'title'      => __( 'CTA Ribbon', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"6vw","bottom":"6vw"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-accent","textColor":"raft-fg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group has-raft-fg-alt-color has-raft-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:6vw;padding-bottom:6vw">
    
    <!-- wp:heading {"textAlign":"center","className":"is-style-default","fontSize":"s"} -->
    <h2 class="has-text-align-center is-style-default has-s-font-size">Before we even knew it, we were off the ground.</h2>
    <!-- /wp:heading -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
    
        <!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline">
        	<a class="wp-block-button__link">Yes please</a>
        </div>
        <!-- /wp:button -->
    
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
	',
];
