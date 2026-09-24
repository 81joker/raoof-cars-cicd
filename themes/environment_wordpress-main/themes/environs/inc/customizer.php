<?php
add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize)
{

    // 1- Start  Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __( 'Copyright Settings', 'environs' ),
            'description' => __( 'Copyright Settings', 'environs' )
        )
    );

            $wp_customize->add_setting(
                'set_copyright',
                array(
                    'type' => 'theme_mod',
                    'default' => __( 'Copyright X - All Rights Reserved', 'environs' ),
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_copyright',
                array(
                    'label' => __( 'Copyright Information', 'environs' ),
                    'description' => __( 'Please, type your copyright here', 'environs' ),
                    'section' => 'sec_copyright',
                    'type' => 'text'
                )
            );
    // End Copyright Section

    $wp_customize->add_section('slides', array(
        'title'          => 'Slides',
        'priority'       => 25,
    ));

    $wp_customize->add_setting('slide_image_1', array(
        'default'        => '',
    ));

    // First Slide
    // Title
    $wp_customize->add_setting(
        'slide_title_1',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'environs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'slide_title_1',
        array(
            'label' => __('First Title', 'environs'),
            'description' => __('Please, type your here title here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'slide_subtitle_1',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'slide_subtitle_1',
        array(
            'label' => __('First Subtitle', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );

    // First Slide content
    $wp_customize->add_setting(
        'slide_content_1',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some Text', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'slide_content_1',
        array(
            'label' => __('First Content', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slide_image_1', array(
        'label'   => 'First Slide',
        'section' => 'slides',
        'settings'   => 'slide_image_1',
    )));


    //Secoond Slide
    $wp_customize->add_setting('slide_image_2', array(
        'default'        => '',
    ));

    // Second Title
    $wp_customize->add_setting(
        'slide_title_2',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'environs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'slide_title_2',
        array(
            'label' => __('Second Title', 'environs'),
            'description' => __('Please, type your here title here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );
    // Second Subtitle
    $wp_customize->add_setting(
        'slide_subtitle_2',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'slide_subtitle_2',
        array(
            'label' => __('second Subtitle', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );

    // Second Slide content
    $wp_customize->add_setting(
        'slide_content_2',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'slide_content_2',
        array(
            'label' => __('Second Content', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slide_image_2', array(
        'label'   => 'Second Slide',
        'section' => 'slides',
        'settings'   => 'slide_image_2',
    )));


    // Third Slide
    $wp_customize->add_setting('slide_image_3', array(
        'default'        => '',
    ));

    // Third Title
    $wp_customize->add_setting(
        'slide_title_3',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'environs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'slide_title_3',
        array(
            'label' => __('Third Title', 'environs'),
            'description' => __('Please, type your here title here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );
    // Third Subtitle
    $wp_customize->add_setting(
        'slide_subtitle_3',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'slide_subtitle_3',
        array(
            'label' => __('Third Subtitle', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );

    // Third Slide content
    $wp_customize->add_setting(
        'slide_content_3',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some Text', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'slide_content_3',
        array(
            'label' => __('Third Content', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slide_image_3', array(
        'label'   => 'Third Slide',
        'section' => 'slides',
        'settings'   => 'slide_image_3',
    )));


    // Start Gallery Footer 
       // Add section for the footer gallery
       $wp_customize->add_section( 'footer_gallery_section', array(
        'title' => __( 'Footer Gallery', 'environs' ),
        'priority' => 130,
    ));
    
    // Add settings and controls for 6 images
    for ( $i = 1; $i <= 12; $i++ ) {
        $wp_customize->add_setting( "footer_gallery_image_$i", array(
            'default' => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "footer_gallery_image_$i", array(
            'label' => __( "Footer Gallery Image $i", 'environs' ),
            'section' => 'footer_gallery_section',
            'settings' => "footer_gallery_image_$i",
        )));
    }
    // End Gallery Footer 



}
