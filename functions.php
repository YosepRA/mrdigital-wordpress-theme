<?php

// Loading CSS files.
function load_stylesheets()
{
  // Main stylesheet
  wp_register_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// Loading JavaScript files.
function loadjs()
{
  wp_register_script('customjs', get_template_directory_uri() . '/js/main.js', array(), 1, true);
  wp_enqueue_script('customjs');
}

// add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');

// Register display locations of menu.
register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme')
  )
);

// Registering image sizes for thumbnails.
add_image_size('largest', 1000, 1000);
add_image_size('custom-size', 500, 1000, false);
