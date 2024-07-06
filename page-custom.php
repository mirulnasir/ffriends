<?php

/**
 * The template for displaying all pages.
 * Template Name: Custom Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar') : ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>


    <?php

    if (have_rows('sections')) :

        // Loop through rows.
        while (have_rows('sections')) : the_row();

            // Case: Page Header layout.
            if (get_row_layout() == 'page_header') :
                $args = array(
                    'heading' => get_sub_field('heading'),
                    'subheading' => get_sub_field('subheading'),
                );
                get_template_part('sections/page-header', null, $args);

            // Case: About layout.
            elseif (get_row_layout() == 'about') :
                $heading = get_sub_field('heading');
                $overline = get_sub_field('overline');
                $body_copy = get_sub_field('body_copy');
                $button = get_sub_field('button');
                $image = get_sub_field('image');
                $args = array(
                    'heading' => $heading,
                    'overline' => $overline,
                    'body_copy' => $body_copy,
                    'button' => $button,
                    'image' => $image,
                );
                get_template_part('sections/about', null, $args);

            endif;

        // End loop.
        endwhile;

    // No value.
    else :
    // Do something...
    endif;

    ?>


</div><!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar') : ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>