<?php
/**
 * Single Post Columns
 *
 * @author Themeisle
 * @package raft
 * @since 1.1.0
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-08.svg',
);

return '<!-- wp:template-part {"slug":"header","theme":"raft","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"raft-bg","layout":{"type":"default"}} -->
<div class="wp-block-group has-raft-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|70"}},"backgroundColor":"raft-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"aspectRatio":"1"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size" style="border-radius:8px"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","level":1,"align":"wide"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|70"},"dimensions":{"minHeight":""}},"backgroundColor":"raft-bg","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-raft-bg-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:8px"><!-- wp:image {"align":"center","id":290,"width":"96px","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image aligncenter size-large is-resized has-custom-border"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-290" style="border-radius:999px;width:96px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-center has-medium-font-size">' . esc_html( $raft_strings['about_me'] ) . '</h2>
<!-- /wp:heading -->

<!-- wp:post-author-biography {"textAlign":"center"} /-->

<!-- wp:social-links {"iconBackgroundColorValue":"#C26148","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"WordPress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"raft","tagName":"footer"} /-->';
