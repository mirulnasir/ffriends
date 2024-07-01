<?php

/**
 * Finance Friends Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Finance Friends Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_FINANCE_FRIENDS_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
    //disable caching by wp_enqueue_style('main-styles', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_template_directory() . '/css/style.css'), false);
    wp_enqueue_style('finance-friends-child-theme-meta-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_FINANCE_FRIENDS_CHILD_VERSION, 'all');
    // wp_enqueue_style( 'finance-friends-child-theme-css', get_stylesheet_directory_uri() . '/dist/index.css', array(), filemtime(get_stylesheet_directory() . '/dist/index.css'), 'all' );
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

/**
 * Remove Astra theme styles
 */
function astra_force_remove_style()
{
    add_filter('print_styles_array', function ($styles) {

        // Set styles to remove.
        $styles_to_remove = array('astra-theme-css', 'astra-addon-css');
        if (is_array($styles) and count($styles) > 0) {
            foreach ($styles as $key => $code) {
                if (in_array($code, $styles_to_remove)) {
                    unset($styles[$key]);
                }
            }
        }
        return $styles;
    });
}
add_action('wp_enqueue_scripts', 'astra_force_remove_style', 99);

define('IS_VITE_DEVELOPMENT', true);


include "inc/inc.vite.php";


function register_acf_blocks()
{
    register_block_type(__DIR__ . '/blocks/testimonial');
}
add_action('init', 'register_acf_blocks');
