<?php 

if ( ! function_exists('jedu_theme_support')):

    function jedu_theme_support() {
        add_theme_support('wp-block-styles');
        add_editor_style('style.css');
    }
endif;

add_action('after_setup_theme', 'jedu_theme_support');

if ( ! function_exists('jedu_styles')):
function jedu_styles() {
    echo "testing ";
    wp_enqueue_style('jedu_style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('jedu_style_block', get_template_directory_uri() . '/assets/css/block.css');
}
endif;

add_action('wp_enqueue', 'jedu_styles')
?>

