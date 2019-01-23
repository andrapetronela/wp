<?php 

function myFunctionFiles() {
   
    
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Open+Sans:300,400,700');
    
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
    
//    wp_enqueue_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
    
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'myFunctionFiles');

?>