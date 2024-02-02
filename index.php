<?php

/**
 * Plugin Name: Results Count
 * Plugin URI: https://github.com/PiotrPress/wordpress-results-count
 * Description: This WordPress plugin adds a Results Count block which renders a number of found posts.
 * Version: 0.1.0
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Author: Piotr Niewiadomski
 * Author URI: https://piotr.press
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: piotrpress-results-count
 * Domain Path: /languages
 * Update URI: false
 */

defined( 'ABSPATH' ) or exit;

add_action( 'init', function() { register_block_type( __DIR__, [
    'render_callback' => function() { global $wp_query; return $wp_query->found_posts; },
] ); } );