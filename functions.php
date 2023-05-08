<?php 

function taboao_wp_styles () {
    wp_enqueue_style('style.css', get_stylesheet_uri());
    wp_enqueue_style('bootstrap.min', get_stylesheet_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_style('animate.min', get_stylesheet_directory_uri(). '/assets/css/animate.min.css');
    wp_enqueue_style('main.css', get_stylesheet_directory_uri(). '/assets/css/main.css');
    wp_enqueue_style('font-awesome.min.css', get_stylesheet_directory_uri(). '/assets/css/font-awesome.min.css');
    wp_enqueue_style('magnific-popup.css', get_stylesheet_directory_uri(). '/assets/css/magnific-popup.css');
    wp_enqueue_style('responsive.css', get_stylesheet_directory_uri(). '/assets/css/responsive.css');
    wp_enqueue_style('slick.css', get_stylesheet_directory_uri(). '/assets/css/slick.css');
    wp_enqueue_style('structure.css', get_stylesheet_directory_uri(). '/assets/css/structure.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&display=swap');


    wp_enqueue_script ('popper.min.js',get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '', true);
    wp_enqueue_script ('bootstrap.min.js',get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script ('slick.min.js',get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script ('theia-sticky-sidebar.min.js',get_template_directory_uri().'/assets/js/theia-sticky-sidebar.min.js', array('jquery'), '', true);
    wp_enqueue_script ('magnific-popup.min.js',get_template_directory_uri().'/assets/js/magnific-popup.min.js', array('jquery'), '', true);
    wp_enqueue_script ('carouFredSel.js',get_template_directory_uri().'/assets/js/carouFredSel.js', array('jquery'), '', true);
    wp_enqueue_script ('validate.js',get_template_directory_uri().'/assets/js/validate.js', array('jquery'), '', true);
    wp_enqueue_script ('main.js',get_template_directory_uri().'/assets/js/main.js', array('jquery'), '', true);


}


add_action('wp_enqueue_scripts', 'taboao_wp_styles');

add_theme_support ('title-tag');
