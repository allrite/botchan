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
        'scripts'       =>  array(
            array('bs-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true),
            array('bs-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), '1.12.3', true),
            array('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array(), '4.0.0-beta.2', true),
        ),
        'admin_styles' =>  array(
            array('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css')
        ),
        'theme_support' =>  array(
            array('post-thumbnails'),
            array('custom-header', array(
                'default-image' => 'assets/images/botchan-ressha.jpg',
                'random-default' => false,
                'width' => 0,
                'height' => 0,
                'flex-height' => false,
                'flex-width' => false,
                'default-text-color' => '',
                'header-text' => true,
                'uploads' => true,
                'wp-head-callback' => '',
                'admin-head-callback' => '',
                'admin-preview-callback' => '',
                'video' => false,
                'video-active-callback' => 'is_front_page',
            )),
            array('custom-logo', array(
                'height'      => 60,
                'width'       => 250,
                'flex-height' => true,
                'flex-width'  => true,
                'header-text' => array( 'site-title', 'site-description' ),
            ) ),
            array('title-tag'),
            array( 'customize-selective-refresh-widgets' ),
            array('aesop-component-styles', array( "parallax", "image", "quote", "gallery", "content", "video", "audio", "collection", "chapter", "document", "character", "map", "timeline" )),
        ),
        'image_sizes'   =>  array(
            array('botchan_card', 1149, 270, true),
            array('botchan_home_card', 318, 180, true),
            array('botchan_home_banner', 2048, false, false),
            array('botchan_post_heading', 1149, 270, true)
        ),
        'content_width' => 1149,
        'sidebars'      => array(
            array(
                'name'          =>  'Footer 1',
                'id'            =>  'footer-1',
                'before_widget' =>  '<div class="container">',
                'after_widget'  =>  '</div>',
                'before_title'  =>  '<h2 class="widget-title">',
                'after_title'   =>  '</h2>',
            ),
            array(
                'name'          =>  'Footer 2',
                'id'            =>  'footer-2',
                'before_widget' =>  '<div class="container">',
                'after_widget'  =>  '</div>',
                'before_title'  =>  '<h2 class="widget-title">',
                'after_title'   =>  '</h2>',
            ),
            array(
                'name'          =>  'Footer 2',
                'id'            =>  'footer-2',
                'before_widget' =>  '<div class="container">',
                'after_widget'  =>  '</div>',
                'before_title'  =>  '<h2 class="widget-title">',
                'after_title'   =>  '</h2>',
            ),
        ),
        'menus'     => array(
            array(
                'location'      =>  'primary',
                'description'   =>  __( 'Primary Menu', 'botchan'),            
            )
        ),
    );
    require_once('inc/config.php');
    $botchan_config = new Botchan_Config($botchan_settings);
    require_once('inc/botchan.php');

     
    
?>