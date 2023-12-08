<?php
/**
 * Team Member Rows
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.5
 *
 * slug: team-rows
 * title: Team Member Rows
 * categories: raft/team
 * keywords: team, member, rows
 */

$raft_strings = apply_filters( 'raft_strings', array() );

$images = array(
	RAFT_URL . 'assets/img/shape-05.svg',
	RAFT_URL . 'assets/img/shape-01.svg',
);

return array(
	'title'      => __( 'Team Member Rows', 'raft' ),
	'categories' => array( 'raft/team' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|raft-fg-alt"}}}},"backgroundColor":"raft-bg-inv","textColor":"raft-fg-alt","layout":{"type":"constrained"},"metadata":{}} -->
        <div class="wp-block-group alignfull has-raft-fg-alt-color has-raft-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
            <div class="wp-block-columns alignwide are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"textAlign":"left"} -->
                    <h2 class="wp-block-heading has-text-align-left">' . esc_html( $raft_strings['team_member'] ) . '</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
                    <p class="has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['member_role'] ) . '</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>' . esc_html( $raft_strings['paragraph_text'] ) . '</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"raft-fg-alt","iconColorValue":"#FDFDFD","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only">
                        <!-- wp:social-link {"url":"#","service":"x"} /-->
                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
                    <!-- wp:image {"id":287,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
                    <figure class="wp-block-image size-large has-custom-border"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-287" style="border-radius:999px"/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
            <div class="wp-block-columns alignwide are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"textAlign":"left"} -->
                    <h2 class="wp-block-heading has-text-align-left">' . esc_html( $raft_strings['team_member'] ) . '</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
                    <p class="has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $raft_strings['member_role'] ) . '</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>' . esc_html( $raft_strings['paragraph_text'] ) . '</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"raft-fg-alt","iconColorValue":"#FDFDFD","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only">
                        <!-- wp:social-link {"url":"#","service":"x"} /-->
                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
                    <!-- wp:image {"id":283,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
                    <figure class="wp-block-image size-large has-custom-border"><img src="' . esc_url( $images[1] ) . '" alt="" class="wp-image-283" style="border-radius:999px"/></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    ',
);
