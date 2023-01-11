<?php

function enqueue_style(){

    wp_enqueue_style(
        'normalize',
        get_template_directory_uri() . '/public/css/normalize.css',
        array(),
        '8.0.1',
        'all'
    );

    wp_enqueue_style(
        'public-css',
        get_template_directory_uri() . '/public/css/style.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'bootstrap-css',
        get_template_directory_uri() . '/helpers/bootstrap-5.3.0/css/bootstrap.min.css',
        array(),
        '5.3.0',
        'all'
    );

}
add_action('wp_enqueue_scripts', 'enqueue_style');

function enqueue_scripts() {

    wp_enqueue_script(
        'public-js',
        get_template_directory_uri() . '/public/js/atr-public.js',
        ['jquery', 'bootstrap-min'],
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'bootstrap-min',
        get_template_directory_uri() . '/helpers/bootstrap-5.3.0/js/bootstrap.min.js',
        ['jquery'],
        '5.3.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');