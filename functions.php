<?php 

function jedu_theme_support(){
add_theme_support('title-tag');
}

add_action('after_setup_theme', 'jedu_theme_support');

function jedu_register_styles(){
    wp_enqueue_style('jedu', get_template_directory_uri() . "/style.css", array('jedu_bootstrap'), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('jedu_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", 'all');
    wp_enqueue_style('jedu_fonts',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", 'all');
}

add_action('wp_enqueue_scripts', 'jedu_register_styles');

function jedu_register_scripts(){
    wp_enqueue_script('jedu_jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('jedu_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('jedu_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
    wp_enqueue_script('jedu_main', get_template_directory_uri() . "assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'jedu_register_scripts');

?>

