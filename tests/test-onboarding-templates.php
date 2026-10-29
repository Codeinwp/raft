<?php
/**
 * Class Test_Onboarding_Templates
 *
 * @package raft
 *
 * @phpstan-type ParsedBlock array{blockName: string|null, attrs: array<string, mixed>, innerBlocks: list<array<string, mixed>>, innerHTML: string, innerContent: list<string|null>}
 */

class Test_Onboarding_Templates extends WP_UnitTestCase {
	/**
	 * Onboarding archive templates must list the posts of the archive being viewed.
	 *
	 * @return void
	 */
	public function test_archive_templates_inherit_the_archive_query(): void {
		$support = get_theme_support( 'otter-onboarding' );

		/** @var array<string, array{file: string, title: string}> $archive_templates */
		$archive_templates = $support[0]['templates']['archive'];

		$this->assertNotEmpty( $archive_templates );

		foreach ( $archive_templates as $slug => $template ) {
			$queries = $this->find_query_blocks( parse_blocks( include $template['file'] ) );

			$this->assertNotEmpty( $queries, $slug );

			foreach ( $queries as $query ) {
				$this->assertTrue( $query['attrs']['query']['inherit'], $slug );
			}
		}
	}

	/**
	 * Collect every Query block, including nested ones.
	 *
	 * @param list<ParsedBlock> $blocks Parsed blocks.
	 *
	 * @return list<ParsedBlock>
	 */
	private function find_query_blocks( array $blocks ): array {
		$queries = array();

		foreach ( $blocks as $block ) {
			if ( 'core/query' === $block['blockName'] ) {
				$queries[] = $block;
			}

			$queries = array_merge( $queries, $this->find_query_blocks( $block['innerBlocks'] ) );
		}

		return $queries;
	}
}
