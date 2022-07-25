<?php
/**
 * Call to action ribbon 2
 *
 * slug: cta-ribbon-2
 * title: Call to action ribbon 2
 * categories: raft
 * keywords: section, cta, buttons, ribbon
 */

return [
	'title'      => __( 'Call to action ribbon', 'raft' ) . ' 2',
	'categories' => [ 'raft' ],
	'content'    => '	
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"raft-accent","textColor":"raft-fg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-accent-background-color has-text-color has-background" style="padding-top:80px;padding-bottom:80px">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">

<!-- wp:heading {"textColor":"raft-fg-alt"} -->
<h2 class="has-raft-fg-alt-color has-text-color">Talk with our experts!</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons">

<!-- wp:button {"textColor":"raft-fg-alt","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline">
<a class="wp-block-button__link has-raft-fg-alt-color has-text-color">Let\'s talk!</a>
</div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
];
