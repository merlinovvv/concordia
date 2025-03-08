<?php
add_action('wp_enqueue_scripts', 'concordia_styles');
add_action('wp_enqueue_scripts', 'concordia_scripts');

function concordia_styles()
{
    wp_enqueue_style('slider-swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_style('Material-Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('notyf', 'https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css');
    wp_enqueue_style('concordia-style', get_stylesheet_uri());
};

function concordia_scripts()
{
    wp_enqueue_script('jquery-script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array(), null, true);
    wp_enqueue_script('slider-swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('notyf', 'https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js', array(), null, true);
    wp_enqueue_script('inputmask', get_template_directory_uri() . '/assets/libs/inputmask.min.js', array(), null, true);
    wp_enqueue_script('just-validate', get_template_directory_uri() . '/assets/libs/just-validate.min.js', array(), null, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
};

add_theme_support('custom-logo');
?>