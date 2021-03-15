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
            array('bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css'),
            array('botchan-style', get_template_directory_uri() . '/style.css'),
        ),
        'scripts'       =>  array(
            array('bs-jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array('jquery'), '3.5.1', true),
            array('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.5.3', true),
            // array('botchan-script', get_template_directory_uri() . '/assets/js/botchan.js', array('jquery'), false, true),
        ),
        'admin_styles' =>  array(
            array('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css')
        ),
        'theme_support' =>  array(
            array('post-thumbnails'),
            array('custom-header', array(
                'default-image' => get_template_directory_uri() . '/assets/images/botchan-ressha.jpg',
                'random-default' => false,
                'width' => 2048,
                'height' => 1361,
                'flex-height' => true,
                'flex-width' => true,
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
            array('botchan_card', 1108, 270, true),
            array('botchan_home_card', 318, 180, true),
            array('botchan_jumbotron', 2048, 1361, false),
            array('botchan_post_heading', 1140, 270, true)
        ),
        'content_width' => 1140,
        'sidebars'      => array(
            array(
                'name'          =>  'Footer 1',
                'id'            =>  'footer-1',
                'before_widget' =>  '<div class="container footer-widget">',
                'after_widget'  =>  '</div>',
                'before_title'  =>  '<h2 class="widget-title">',
                'after_title'   =>  '</h2>',
            ),
            array(
                'name'          =>  'Footer 2',
                'id'            =>  'footer-2',
                'before_widget' =>  '<div class="container footer-widget">',
                'after_widget'  =>  '</div>',
                'before_title'  =>  '<h2 class="widget-title">',
                'after_title'   =>  '</h2>',
            ),
            array(
                'name'          =>  'Footer 3',
                'id'            =>  'footer-3',
                'before_widget' =>  '<div class="container footer-widget">',
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
        'customizer' =>	array(

            // Remove Customizer Controls
            'header_textcolor' => array(
                'remove_control'    => true
            ),
            'footer' => array(
                'add_section'   =>  array(
                    'title'         => __('Footer','botchan'),
                    'capability'    => 'edit_theme_options',
                    'priority'      => 90,
                )
            ),
            'footer_text' => array(
                'add_setting'   =>  array(
                    'type'          => 'theme_mod',
                    'capability'    => 'edit_theme_options',
                    'default'       => '&copy; #year# #name#',
                ),
                'add_control'   =>  array(
                    'label'         => __( 'Footer copyright text', 'botchan' ),
                    'description'   =>  __('Use #year# to insert the current year, #name# for the site title.', 'botchan'),
                    'type'          => 'text',
                    'priority'      => 20,
                    'section'       => 'footer',
                ),
            ),
        ),
    );
    require_once('inc/config.php');
    $botchan_config = new Botchan_Config($botchan_settings);
    require_once('inc/botchan.php');
    $botchan = new Botchan();

     
    
?>