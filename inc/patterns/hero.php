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
	'title'      => __( 'Hero Section', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px"}}},"backgroundColor":"raft-bg-alt","layout":{"inherit":false}} -->
<div class="wp-block-group has-raft-bg-alt-background-color has-background" style="padding-top:0px">

<!-- wp:template-part {"slug":"Header","theme":"raft","tagName":"header"} /-->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->


<!-- wp:group {"layout":{"contentSize":"960px","inherit":false}} -->
<div class="wp-block-group">

<!-- wp:heading {"textAlign":"center","className":"has-huge-font-size"} -->
<h2 class="has-text-align-center has-huge-font-size">Welcome to Raft, a block-based theme by Otter</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"contentSize":"770px"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"align":"center","className":"has-large-font-size"} -->
<p class="has-text-align-center has-large-font-size">Raft is a free Full Site Editing theme by Otter, an awesome plugin for Gutenberg, made by your friends at Themeisle.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button">
<a class="wp-block-button__link">Learn More</a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

</div>
<!-- /wp:group -->

<!-- wp:image {"align":"center"} -->
<figure class="wp-block-image aligncenter">
<img src="https://fse.test/wp-content/themes/raft/assets/img/raft-illustration.jpg" alt="Header Illustration"/>
</figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

</div>
<!-- /wp:group -->


</div>
<!-- /wp:group -->',
];
