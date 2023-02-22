<?php

    function pratham_theme_support(){
        
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme','pratham_theme_support');



function pratham_register_styles() {
    
    // To get the version of theme

    $version=wp_get_theme()->get( 'Version' );

    
    wp_enqueue_style('pratham-css', get_template_directory_uri()."/style.css", array('pratham-bootstrap') , $version ,'all');
    wp_enqueue_style('pratham-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array() , '5.13.0' ,'all');
    wp_enqueue_style('pratham-fontawesome',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');
}
    
    add_action('wp_enqueue_scripts', 'pratham_register_styles');

    function pratham_register_scripts() {
    $version=wp_get_theme()->get( 'Version' );

        wp_enqueue_script('pratham-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1',true);
        wp_enqueue_script('pratham-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.16.0',true);
        wp_enqueue_script('pratham-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'4.4.1',true);
        wp_enqueue_script('pratham-js',get_template_directory_uri()."assets/js/main.js", array(),$version,true);

    }

    add_action('wp_enqueue_scripts', 'pratham_register_scripts');

 ?>