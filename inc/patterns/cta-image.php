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

// TODO: change this to theme provided one.
$image_url = 'http://awesomedog.link/wp-content/uploads/2021/06/cap-2.jpg';

return [
	'title'      => __( 'CTA Image', 'raft' ),
	'categories' => [ 'raft' ],
	'content'    => '
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"6vw","bottom":"6vw"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:6vw;padding-bottom:6vw">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        
        <!-- wp:column {"width":""} -->
        <div class="wp-block-column">
          
            <!-- wp:heading {"className":"is-style-default"} -->
            <h2 class="is-style-default">The block-based theme you need to build any type of site.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Meetings are most productive when we create something that none of us could have created alone. How can we leverage the wisdom of the crowd, while ensuring that decisions and responsibilities continue to reside with an individual?</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button">
                	<a class="wp-block-button__link" href="https://awesomedog.link/coming-soon/">Yes please</a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"textColor":"raft-accent","className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline">
                	<a class="wp-block-button__link has-raft-accent-color has-text-color">Learn More</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
            
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
           
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
            	<img src="' . esc_url( $image_url ) . '" alt="Raft Illustration"/>
            </figure>
            <!-- /wp:image -->
            
        </div>
        <!-- /wp:column -->
    
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
',
];
