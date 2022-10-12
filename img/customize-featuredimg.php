<?php
add_action('customize_register','Featuredimg_controllers');
function Featuredimg_controllers( $wp_customize ) {
$wp_customize->add_section( 'saifi_featuredimg' , array(
'title' => __('Featured image'),
'panel' => '',
'priority' =>'' , // Before Widgets.
) );  
$wp_customize->add_setting( 'featuredimg_shape_options', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'option 2',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'featuredimg_shape_options', array(
    'type' => 'radio',
    'priority' => '', // Within the section.
    'section' => 'saifi_featuredimg', // Required, core or custom.
    'label' => __( 'Image Shapes' ),
    'choices' => array(
    'option 1' => 'Circle',
    'option 2' => 'Square',
   
    
    )
    ));
    $wp_customize->add_setting( 'saifi_featuredimg_alignment', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'option 1',
        'transport' => 'refresh', // or postMessage
        
        
        ) );
        $wp_customize->add_control( 'saifi_featuredimg_alignment', array(
        'type' => 'select',
        'priority' => '', // Within the section.
        'section' => 'saifi_featuredimg', // Required, core or custom.
        'label' => __( 'Image-alignment' ),
        'choices' => array(
        'option 1' => 'center-align',
        'option 2' => 'left-align',
        
        
        )
        ));

    $wp_customize->add_setting( 'featuredimg_shape_height', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '200px',
        'transport' => 'refresh', // or postMessage
       
        
        ) );
        $wp_customize->add_control( 'featuredimg_shape_height', array(
        'type' => '<input>',
        'priority' => '', // Within the section.
        'section' => 'saifi_featuredimg', // Required, core or custom.
        'label' => __( 'Image height' ),
        'input_attrs' => array(
            'placeholder' => __('    px-rem')
        )
        ));
    
        
    $wp_customize->add_setting( 'featuredimg_shape_width', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '200px',
        'transport' => 'refresh', // or postMessage
        
        
        ) );
        $wp_customize->add_control( 'featuredimg_shape_width', array(
        'type' => '<input>',
        'priority' => '', // Within the section.
        'section' => 'saifi_featuredimg', // Required, core or custom.
        'label' => __( 'Image width' ),
        'input_attrs' => array(
            'placeholder' => __('    px-rem')
        )
        ));

        $wp_customize->add_setting( 'featuredimg_shape_border', array(
            'type' => 'theme_mod', // or 'option'
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
            'default' => '',
            'transport' => 'refresh', // or postMessage
            
            
            ) );
            $wp_customize->add_control( 'featuredimg_shape_border', array(
            'type' => '<input>',
            'priority' => '', // Within the section.
            'section' => 'saifi_featuredimg', // Required, core or custom.
            'label' => __( 'Image Border' ),
            'input_attrs' => array(
                'placeholder' => __('   eg:1px soild balck')
            )
            ));
            $wp_customize->add_setting( 'featuredimg_shape_borderradius', array(
                'type' => 'theme_mod', // or 'option'
                'capability' => 'edit_theme_options',
                'theme_supports' => '', // Rarely needed.
                'default' => '',
                'transport' => 'refresh', // or postMessage
                
                
                ) );
                $wp_customize->add_control( 'featuredimg_shape_borderradius', array(
                'type' => '<input>',
                'priority' => '', // Within the section.
                'section' => 'saifi_featuredimg', // Required, core or custom.
                'label' => __( 'Image Border Radius' ),
                'input_attrs' => array(
                    'placeholder' => __('   eg: 20%')
                )
                ));
       
     



    }