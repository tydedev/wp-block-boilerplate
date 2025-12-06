<?php
/**
 * Modula Theme functions and definitions
 *
 * @package Modula
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue theme styles and scripts
 */
function modula_theme_enqueue_scripts() {
    // Enqueue theme styles
    wp_enqueue_style(
        'modula-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue theme script for interactive elements
    wp_enqueue_script(
        'modula-script',
        get_theme_file_uri('build/index.js'),
        array('wp-blocks', 'wp-element', 'wp-editor'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'modula_theme_enqueue_scripts');

/**
 * Register block patterns
 */
function modula_register_block_patterns() {
    register_block_pattern_category(
        'modula',
        array('label' => __('Modula', 'modula'))
    );
}
add_action('init', 'modula_register_block_patterns');

/**
 * Add theme support for various features
 */
function modula_theme_support() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for custom line height controls
    add_theme_support('custom-line-height');

    // Add support for experimental link color control
    add_theme_support('experimental-link-color');

    // Add support for custom units
    add_theme_support('custom-units');

    // Add support for custom spacing
    add_theme_support('custom-spacing');
}
add_action('after_setup_theme', 'modula_theme_support');
