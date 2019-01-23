<?php 

function myFunctionFiles() {
   
    
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700');
    
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
        
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'myFunctionFiles');


// display page name on tab

function features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'features');

?>