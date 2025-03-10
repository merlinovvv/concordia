<?php
add_action('wp_enqueue_scripts', 'concordia_styles');
add_action('wp_enqueue_scripts', 'concordia_scripts');

$version = '1.0.4';

function concordia_styles()
{
    global $version; // Делаем переменную глобальной внутри функции
    wp_enqueue_style('slider-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css', array(), $version);
    wp_enqueue_style('Material-Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), $version);
    wp_enqueue_style('notyf', 'https://cdn.jsdelivr.net/npm/notyf@3.10.0/notyf.min.css', array(), $version);
    wp_enqueue_style('concordia-style', get_stylesheet_uri(), array(), $version);
}

function concordia_scripts()
{
    global $version; // Делаем переменную глобальной внутри функции
    wp_enqueue_script('jquery-script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), $version, true);
    wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios@1.5.1/dist/axios.min.js', array(), $version, true);
    wp_enqueue_script('slider-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js', array(), $version, true);
    wp_enqueue_script('notyf', 'https://cdn.jsdelivr.net/npm/notyf@3.10.0/notyf.min.js', array(), $version, true);
    wp_enqueue_script('inputmask', get_template_directory_uri() . '/assets/libs/inputmask.min.js', array(), $version, true);
    wp_enqueue_script('just-validate', get_template_directory_uri() . '/assets/libs/just-validate.min.js', array(), $version, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), $version, true);
}

add_theme_support('custom-logo');
?>
