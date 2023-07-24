<?php
/*
 * This is the child theme for Codeweber theme, generated with Generate Child Theme plugin by catchthemes.
 *
 */
add_action('wp_enqueue_scripts', 'smartfit_enqueue_styles');
function smartfit_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*
 * Your code goes below
 */