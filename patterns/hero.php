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
	'slug'       => 'raft-hero',
	'content'    => '
<!-- wp:group {"backgroundColor":"raft-bg-alt","layout":{"inherit":false}} -->
<div class="wp-block-group has-raft-bg-alt-background-color has-background"><!-- wp:template-part {"slug":"Header","theme":"raft","tagName":"header"} /-->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"layout":{"contentSize":"900px"}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","fontSize":"xxl"} -->
<h2 class="has-text-align-center has-xxl-font-size">Welcome to Raft, a block-based theme by Otter</h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"layout":{"contentSize":"770px"}} -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"lg"} -->
<p class="has-text-align-center has-lg-font-size">Raft is a free Full Site Editing theme by Otter, an awesome plugin for Gutenberg, made by your friends at Themeisle.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"center","id":70,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( RAFT_URL . 'assets/img/raft-illustration.jpg' ) . '" alt="Header Illustration"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
];
