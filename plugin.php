<?php

/**
 * Plugin Name: WP Parsdown
 * Description: Filter post and comment content to rendered Markdown.
 * Author: Joe Hoyle
 * Version: 1.0
 */

namespace WP_Parsdown;

use Parsedown;

require_once __DIR__ . '/lib/parsedown/vendor/autoload.php';

add_filter( 'the_content', __NAMESPACE__ . '\\apply_markdown', 1 );
add_filter( 'comment_text', __NAMESPACE__ . '\\apply_markdown', 1 );

function apply_markdown( $text ) {
	$parsedown = new Parsedown();
	return $parsedown->text( $text );
}
