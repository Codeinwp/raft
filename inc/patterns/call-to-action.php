<?php
/**
 * slug: call-to-action
 * title: Call to action
 * categories: raft
 * keywords: section, cta, button
 */

return [
	'title'      => __( 'Call to action', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"128px","bottom":"128px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"raft-accent","textColor":"raft-fg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:128px;padding-bottom:128px">
<!-- wp:heading {"textAlign":"center","textColor":"raft-fg-alt"} -->
<h2 class="has-text-align-center has-raft-fg-alt-color has-text-color">Lorem ipsum sit dolor!</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"textColor":"raft-fg-alt","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-raft-fg-alt-color has-text-color">Lorem ipsum</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
];
