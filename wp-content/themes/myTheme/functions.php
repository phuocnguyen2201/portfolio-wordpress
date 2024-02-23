<?php 

function enqueue_bootstrap_css() {
    wp_register_style('header',get_template_directory_uri() .'/header.css');
    wp_register_style('style',get_template_directory_uri() .'/style.css');
    wp_register_style('styling-phuoc',get_template_directory_uri() .'/styling-phuoc.css');

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('header');
    wp_enqueue_style('style');
    wp_enqueue_style('styling-phuoc');
}

function enqueue_bootstrap_js() {
    wp_enqueue_script('jquery');
    wp_register_script('fontawesome', 'https://kit.fontawesome.com/192e3b220b.js');
    wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('fontawesome');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_js');
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_css');