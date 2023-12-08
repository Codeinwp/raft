<?php
/**
 * Features on Background
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: features-background
 * title: Features on Background
 * categories: raft/features
 * keywords: features, background, design
 */

$raft_strings = apply_filters( 'raft_strings', array() );

return array(
	'title'      => __( 'Features on Background', 'raft' ),
	'categories' => array( 'raft/features' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg-alt"}}}},"backgroundColor":"raft-bg-inv","textColor":"raft-fg-alt","layout":{"type":"constrained"},"metadata":{}} -->
        <div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-columns alignwide">
                <!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
                <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-medium-font-size">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left">' . esc_html( $raft_strings['feature_description'] ) . '</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
                <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-medium-font-size">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left">' . esc_html( $raft_strings['feature_description'] ) . '</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
                <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"textAlign":"left","level":3,"fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-medium-font-size">' . esc_html( $raft_strings['feature_title'] ) . '</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left">' . esc_html( $raft_strings['feature_description'] ) . '</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    ',
);
