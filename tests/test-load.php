<?php
/**
 * Class Test_Loading
 *
 * @package raft
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'RAFT_VERSION' ) );
		$this->assertTrue( defined( 'RAFT_DEBUG' ) );
		$this->assertTrue( defined( 'RAFT_DIR' ) );
		$this->assertTrue( defined( 'RAFT_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertFalse( RAFT_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'Raft\Core', false ) );
	}
}