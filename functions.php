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
    wp_enqueue_script('jquery');
    wp_enqueue_style('finance-friends-child-theme-meta-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_FINANCE_FRIENDS_CHILD_VERSION, 'all');
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

define('IS_VITE_DEVELOPMENT', false);


include "inc/inc.vite.php";

// Change excerpt length
add_filter('get_the_excerpt', function ($excerpt, $post) {

    $excerpt_length = 10; // Change excerpt length 
    $excerpt_more   = null;

    if (has_excerpt($post)) {
        $excerpt = wp_trim_words($excerpt, $excerpt_length, $excerpt_more);
    }

    return $excerpt;
}, 10, 2);


add_filter(
    'excerpt_length',
    function ($length) {
        // Number of words to display in the excerpt.
        return 20;
    },
    500
);

/**
 * Customize the "Read More" text for post excerpts to include a link to the full article.
 * 
 * For more information, refer to the WordPress Codex:
 * @link https://codex.wordpress.org/Customizing_the_Read_More#Modify_the_Read_More_text_when_using_the_the_excerpt.28.29
 */
function new_excerpt_more($more)
{
    global $post;
    return null;
}
add_filter('excerpt_more', 'new_excerpt_more');


function register_acf_blocks()
{
    register_block_type(__DIR__ . '/blocks/testimonial');
}
add_action('init', 'register_acf_blocks');
