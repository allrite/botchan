<?php
    /**
     * Botchan theme functions and definitions
     *
     * @package botchan
     * @since 0.1
     */

    // Card Image size 1149x270
    $botchan_settings = array(
        'styles'        =>  array(
            array('bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css'),
            array('botchan-style', get_template_directory_uri() . '/style.css'),
        ),
        'scripts'       =>  arrray(
            array('bs-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true),
            array('bs-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), '1.12.3', true),
            array('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array(), '4.0.0-beta.2', true),
        ),
        'theme_support' =>  array(
            array('aesop-component-styles', array( "parallax", "image", "quote", "gallery", "content", "video", "audio", "collection", "chapter", "document", "character", "map", "timeline" )),
        ),




    );
    require_once('inc/config.php');

    $botchan_config = new Botchan_Config($botchan_settings);

     
    
?>