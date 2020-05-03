<?php

    function my_styles() {
        wp_enqueue_style( 'ress.css', get_template_directory_uri() . '/css/ress.css', array(), '1.0' );
        wp_enqueue_style( 'Original Style', get_template_directory_uri() . '/css/style.css', array(), '1.0' );
    }
    add_action( 'wp_enqueue_scripts', 'my_styles');

?>