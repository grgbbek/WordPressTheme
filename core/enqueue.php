<?php
/**
 * Capkon Enqueue functions and definitions
 *
 * @package capkon
 *
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*=================================
FRONTEND ENQUEUE FUNCTION
=================================
 */
function cp_load_scripts()
{
    wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i');
    wp_enqueue_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,700');
    wp_enqueue_style('Pacifico', 'https://fonts.googleapis.com/css?family=Pacifico');
    wp_enqueue_style('PT+Serif', 'https://fonts.googleapis.com/css?family=PT+Serif');
    wp_enqueue_style('Asap', 'https://fonts.googleapis.com/css2?family=Asap:wght@400;600;700&display=swap');

    wp_enqueue_style('bootstrap', CP_BS . '/css/bootstrap.css', array(), '4.0.0', 'all');
    wp_enqueue_style('font-awesome', CP_FONT . '/font-awesome/css/font-awesome.css', array(), '4.7.0', 'all');
    wp_enqueue_style('magnific-popup', CP_PLUGIN . '/magnific-popup/magnific-popup.css', array(), '4', 'all');
    wp_enqueue_style('settings', CP_PLUGIN . '/rs-plugin-5/css/settings.css', array(), '5.4.5', 'all');
    wp_enqueue_style('layers', CP_PLUGIN . '/rs-plugin-5/css/layers.css', array(), '5.0', 'all');
    wp_enqueue_style('navigation', CP_PLUGIN . '/rs-plugin-5/css/navigation.css', array(), '5.0', 'all');
    wp_enqueue_style('animations', CP_CSS . '/animations.css', array(), '2.1', 'all');
    wp_enqueue_style('slick', CP_PLUGIN . '/slick/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', CP_CSS . '/style.css', array(), '2.1', 'all');
    wp_enqueue_style('typography-default', CP_CSS . '/typography-default.css', array(), '2.1', 'all');
    wp_enqueue_style('custom-skin', CP_CSS . '/skins/custom_skin.css', array(), '2.1', 'all');
    wp_enqueue_style('custom', CP_CSS . '/custom.css', array(), '2.1', 'all');

    /* Scripts */
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', CP_PLUGIN . '/jquery.min.js', false, '3.3.1', true);
    wp_enqueue_script( 'jquery' );

    //wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/plugins/jquery.min.js', array('jquery'), '3.3.1', true);
    wp_enqueue_script('bootstrap', CP_BS . '/js/bootstrap.bundle.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_script('themepunch_tools', CP_PLUGIN . '/rs-plugin-5/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('themepunch_revolution', CP_PLUGIN . '/rs-plugin-5/js/jquery.themepunch.revolution.min.js', array('jquery'), '5.4.7', true);
    wp_enqueue_script('imagesloaded', CP_PLUGIN . '/isotope/imagesloaded.pkgd.min.js', array('jquery'), '4.1.4', true);
    wp_enqueue_script('isotope', CP_PLUGIN . '/isotope/isotope.pkgd.min.js', array('jquery'), '3.0.5', true);
    wp_enqueue_script('magnific_popup', CP_PLUGIN . '/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
    wp_enqueue_script('jquery_waypoints', CP_PLUGIN . '/waypoints/jquery.waypoints.min.js', array('jquery'), '4.0.1', true);
    wp_enqueue_script('sticky', CP_PLUGIN . '/waypoints/sticky.min.js', array('jquery'), '3.0.0', true);
    wp_enqueue_script('countTo', CP_PLUGIN . '/countTo/jquery.countTo.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick', CP_PLUGIN . '/slick/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('template', CP_JS . '/template.js', array('jquery'), '2.1', true);
    wp_enqueue_script('custom', CP_JS . '/custom.js', array('jquery'), '2.1', true);
}
add_action('wp_enqueue_scripts', 'cp_load_scripts');
