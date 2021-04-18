<?php

function smash_scripts()
{   
    // Style Loading 
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');  
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');  
    wp_enqueue_style('LineIcons', get_template_directory_uri() . '/assets/css/LineIcons.css');  
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');  
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');  
    wp_enqueue_style('template-style', get_template_directory_uri() . '/assets/css/template-style.css');  
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
    // Script Loading
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), '1.12.4', true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('ajax-contact', get_template_directory_uri() . '/assets/js/ajax-contact.js', array(), '1.0.0', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), '1.0.0', true);
    wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array(), '1.0.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    
}

add_action('wp_enqueue_scripts', 'smash_scripts');