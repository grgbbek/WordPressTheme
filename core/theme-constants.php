<?php
/**
 * Capkon
 *
 * @package capkon
 *
 * @since capkon 1.0
 *
 */

$get_theme = wp_get_theme();

define( 'CP_THEME_NAME', $get_theme );
define( 'CP_THEME_VERSION', '1.0.0' );
define( 'CP_THEME_SLUG', 'CP' );
define( 'CP_PREFIX', 'CP_' );

define( 'CP_BASE_URL', get_template_directory_uri() );
define( 'CP_BASE', wp_normalize_path ( get_template_directory() ) );

define( 'CP_CORE', CP_BASE . '/core' );
define( 'CP_FUNCTION', CP_BASE . '/core/functions' );
define( 'CP_ADMIN_CPR', CP_CORE. '/admin' );

//define('CP_THEME_ADMIN_URL', CP_BASE_URL . '/core/admin');
define('CP_THEME_LIBS_URL' , CP_BASE . '/core/lib' );
define('CP_THEME_INC_URL' , CP_BASE . '/core/inc' );

define('CP_ASSEST_URI', CP_BASE_URL . '/assets');
define('CP_JS', CP_BASE_URL . '/assets/js');
define('CP_CSS', CP_BASE_URL . '/assets/css');
define('CP_PLUGIN', CP_BASE_URL . '/assets/plugins');
define('CP_FONT', CP_BASE_URL . '/assets/fonts');
define('CP_IMG', CP_BASE_URL . '/assets/images');
define('CP_BS', CP_BASE_URL . '/assets/bootstrap');


//define('CP_CSS_CONTACT', CP_BASE_URL . '/assets/css/contact');