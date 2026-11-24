<?php
/**
 * Support Hub metadata test.
 *
 * @package raft
 */

class Test_Support_Hub extends WP_UnitTestCase {
	/**
	 * The Support Hub opt-in wires raft_support_hub_metadata and returns a
	 * complete payload: is_pro and the Help-form links.
	 */
	public function test_support_hub_metadata_is_registered_and_complete() {
		new \Raft\Admin(); // Registers the filter in its constructor.

		$meta = apply_filters( 'raft_support_hub_metadata', array() );

		$this->assertIsArray( $meta );
		$this->assertFalse( $meta['is_pro'], 'Raft is a free theme with no Pro tier.' );
		$this->assertCount( 2, $meta['links'] );

		foreach ( $meta['links'] as $link ) {
			$this->assertNotEmpty( $link['icon'] );
			$this->assertNotEmpty( $link['text'] );
			$this->assertNotFalse( filter_var( $link['url'], FILTER_VALIDATE_URL ), 'each link has a valid URL' );
		}
	}
}
