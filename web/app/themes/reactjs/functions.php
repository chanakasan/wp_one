<?php

const REACTJS_PARENT_STYLE = 'twentyfifteen-style';

function parent_scripts() {
    wp_enqueue_style(REACTJS_PARENT_STYLE, get_template_directory_uri() . '/style.css');
}

function child_scripts() {
    wp_enqueue_style(
        'reactjs-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(REACTJS_PARENT_STYLE),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script('bundlejs', dirname('/../../') . '/frontend/bundle.js');
}

add_action('wp_enqueue_scripts', 'parent_scripts');
add_action('wp_enqueue_scripts', 'child_scripts');
