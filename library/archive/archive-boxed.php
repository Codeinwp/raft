<?php
/**
 * Archive Boxed
 *
 * @author Themeisle
 * @package raft
 * @since 1.1.0
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return '<!-- wp:template-part {"slug":"header","theme":"raft","tagName":"header"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"raft-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query-title {"type":"archive","textAlign":"center"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"raft-bg","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-raft-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"contentSize":null,"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"color":[]}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"raft-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-raft-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","textAlign":"center","fontSize":"small"} /-->

<!-- wp:post-date {"textAlign":"center","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"' . esc_html( $raft_strings['continue_reading'] ) . '","showMoreOnNewLine":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|raft-accent"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:query-pagination {"textColor":"raft-fg","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results.","backgroundColor":"raft-bg-alt"} -->
<p class="has-text-align-center has-raft-bg-alt-background-color has-background">' . esc_html( $raft_strings['no_posts_found'] ) . '</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg-alt"}}}},"backgroundColor":"raft-accent","textColor":"raft-fg-alt","layout":{"type":"constrained"},"metadata":{"name":"three columns of feature cards"}} -->
<div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">' . esc_html( $raft_strings['page_title'] ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">' . esc_html( $raft_strings['lorem_ipsum_subtitle'] ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">' . esc_html( $raft_strings['page_title'] ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">' . esc_html( $raft_strings['lorem_ipsum_subtitle'] ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
<div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-left has-medium-font-size">' . esc_html( $raft_strings['page_title'] ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">' . esc_html( $raft_strings['lorem_ipsum_subtitle'] ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"raft","tagName":"footer"} /-->';
