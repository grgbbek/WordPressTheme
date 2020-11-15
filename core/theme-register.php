<?php
/**
 * Capkon Register widget area and nav
 *
 * @package capkon
 *
 * @since capkon 1.0
 *
 */

/**
 * Custom Navigation Menu
 */
require_once CP_THEME_LIBS_URL . '/navWalker.php';
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  /**
   * Register Widgets areas
   */
  function CP_widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer 1st Column',
        'id'            => 'footer_col_1st',
	    'before_widget' => '<div id="%1$s" class="footer-content sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title text-left">',
        'after_title'   => '<hr></h2>',
    ));

    register_sidebar(array(
        'name'          => 'Footer 2nd Column',
        'id'            => 'footer_col_2nd',
	    'before_widget' => '<div id="%1$s" class="footer-content sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title text-left">',
        'after_title'   => '<hr></h2>',
    ));

    register_sidebar(array(
        'name'          => 'Footer 3rd Column',
        'id'            => 'footer_col_3rd',
	    'before_widget' => '<div id="%1$s" class="footer-content sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title text-left">',
        'after_title'   => '<hr></h2>',
    ));

    register_sidebar(array(
        'name'          => 'Footer 4th Column',
        'id'            => 'footer_col_4th',
	    'before_widget' => '<div id="%1$s" class="footer-content sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title text-left">',
        'after_title'   => '<hr></h2>',
    ));

}
add_action( 'init', 'cp_widgets_init' );


/*  EXCERPT
    Usage:

    <?php echo excerpt(100); ?>
*/
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

/* custom options for additional data */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title'  => 'General Settings',
        'menu_title'  => 'Theme Settings',
        'menu_slug'   => 'theme-general-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
      ) );
}

