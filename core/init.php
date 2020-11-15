<?php
/**
 * Capkon Theme functions and definitions
 *
 * @package capkon
 *
 * @since capkon 1.0
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * Load theme constants
 */
require trailingslashit( get_template_directory() ) . 'core/theme-constants.php';

/**
 * Theme setup functions
 */
require_once( CP_CORE . '/theme-setup.php' );


/**
 * Register widget area and nav
 */
require_once( CP_CORE . '/theme-register.php' );


/**
 * Register Scripts and Style
 */
require_once( CP_CORE . '/enqueue.php' );


/**
 * Register Post Type
 */
require_once( CP_THEME_LIBS_URL . '/post-type.php' );