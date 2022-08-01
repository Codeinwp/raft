<?php
/**
 * Constants class.
 *
 * @author Themeisle
 * @package raft
 * @since 1.0.0
 */

namespace Raft;

/**
 * Class Constants
 *
 * @package raft
 */
class Constants {

	const ASSETS_SLUGS = array(
		'frontend-css' => 'raft-style',
		'editor-css'   => 'raft-editor',
	);

	const FONT_SLUG_BODY     = 'body';
	const FONT_SLUG_HEADINGS = 'headings';

	/**
	 * CSS Variables.
	 *
	 * @see theme.json
	 */
	const CSS_VAR_BODY_FF     = '--raft-body-font-family';
	const CSS_VAR_HEADINGS_FF = '--raft-headings-font-family';
}
