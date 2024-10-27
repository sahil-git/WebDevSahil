<?php

add_action('after_setup_theme', 'webdevsahil_setup');
function webdevsahil_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height' => 49,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));

    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'webdevsahil'),
    ));
}

add_action('wp_enqueue_scripts', 'webdevsahil_enqueue_styles');
function webdevsahil_enqueue_styles()
{
    $theme_version = filemtime(get_template_directory() . '/style.css');
    wp_enqueue_style('webdevsahil-style', get_stylesheet_uri(), array(), $theme_version);

    $script_version = filemtime(get_template_directory() . '/assets/js/site.js');
    wp_enqueue_script('webdevsahil-script', get_template_directory_uri() . '/assets/js/site.js', array(), $script_version, true);
}

add_action('elementor/theme/register_locations', 'webdevsahil_elementor_locations');
function webdevsahil_elementor_locations($elementor_theme_manager)
{
    $elementor_theme_manager->register_all_core_location();
}

add_action('wp_print_styles', 'wps_deregister_styles', 100);
function wps_deregister_styles()
{
    wp_dequeue_style('wp-block-library');
}

?>