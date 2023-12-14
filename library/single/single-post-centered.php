<?php
/**
 * Single Post Centered
 *
 * @author Themeisle
 * @package raft
 * @since 1.1.0
 */

return '<!-- wp:template-part {"slug":"header","theme":"raft","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"backgroundColor":"raft-bg-alt","layout":{"inherit":false}} -->
<div class="wp-block-group has-raft-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"align":"wide"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"raft-bg","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-raft-bg-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:group {"style":{"border":{"radius":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size" style="border-radius:8px"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-content /-->

<!-- wp:comments {"className":"wp-block-comments-query-loop "} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"64px"} -->
<div class="wp-block-column" style="flex-basis:64px"><!-- wp:avatar {"size":60,"style":{"border":{"radius":"100px"},"spacing":{"margin":{"right":"0","left":"0"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"style":{"spacing":{"margin":{"bottom":"8px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"64px","bottom":"64px"}}}} -->
<div class="wp-block-group" style="margin-top:64px;margin-bottom:64px"><!-- wp:comments-pagination {"align":"center","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
<!-- /wp:comments-pagination --></div>
<!-- /wp:group -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"raft","tagName":"footer"} /-->';
