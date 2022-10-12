<?php
add_action('customize_register','custom_page_title');
function custom_page_title( $wp_customize ) {

$wp_customize->add_section( 'saifi_page_title' , array(
'title' => __('Page-Title'),
'panel' => '',
'priority' =>'' , // Before Widgets.
) );  



$wp_customize->add_setting( 'page_title_family', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'option 1',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'page_title_family', array(
    'type' => 'select',
    'priority' => '', // Within the section.
    'section' => 'saifi_page_title', // Required, core or custom.
    'label' => __( 'Text-style' ),
    'description'=> 'page title text style',
   'choices' => array(
    'option 1' => 'font style 1',
    'option 2' => 'font style 2',
    'option 3' => 'font style 3',
    'option 4' => 'font style 4',
    'option 5' => 'font style 5',
    'option 6' => 'font style 6',
    'option 7' => 'font style 7',
    'option 8' => 'font style 8',
    'option 9' => 'font style 9',
    'option 10' => 'font style 10',
    'option 11' => 'font style 11',
    
    
    )
    ));

    $wp_customize->add_setting( 'saifi_pagetitle_toggle', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'Hide',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
        
        ) );
        $wp_customize->add_control( 'saifi_pagetitle_toggle', array(
        'type' => 'radio',
        'priority' => '', // Within the section.
        'section' => 'saifi_page_title', // Required, core or custom.
        'label' => __( 'Hide/Show page-title' ),
        'choices' => array(
        'Hide' => 'Hide',
        'Show' => 'Show',
        
        )
        ));
    
    
    $wp_customize->add_setting( 'saifi_pagetitle-text-align', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'option 1',
        'transport' => 'refresh', // or postMessage
        
        
        ) );
        $wp_customize->add_control( 'saifi_pagetitle-text-align', array(
        'type' => 'select',
        'priority' => '', // Within the section.
        'section' => 'saifi_page_title', // Required, core or custom.
        'label' => __( 'Page-title alignment' ),
        'choices' => array(
        'option 1' => 'center-align',
        'option 2' => 'left-align',
        
        
        )
        ));
        $wp_customize->add_setting( 'saifi_pagetitle_font_size', array(
            'type' => 'theme_mod', // or 'option'
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
            'default' => '15px',
            'transport' => 'refresh', // or postMessage
            
            
            ) );
            $wp_customize->add_control( 'saifi_pagetitle_font_size', array(
            'type' => '<input>',
            'priority' => '', // Within the section.
            'section' => 'saifi_page_title', // Required, core or custom.
            'label' => __( 'Font-size' ),
            'description'=> 'page-title font-size',
            'input_attrs' => array(
                'placeholder' => __('    px-rem')
            )
            ));
    
        $wp_customize->add_setting( 'saifi_pagetitle_font_color', array(
            'type' => 'theme_mod', // or 'option'
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
            'default' => 'black',
            'transport' => 'refresh', // or postMessage
            
            
            ));
            $wp_customize->add_control( 'saifi_pagetitle_font_color', array(
            'type' => 'color',
            'priority' => '', // Within the section.
            'section' => 'saifi_page_title', // Required, core or custom.
            'label' => __( 'Font-Color' ),
            'description'=> 'page-title font-color',
           
    ));
    
    
    
    $wp_customize->add_setting( 'saifi_pagetitle_bg_color', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'green',
        'transport' => 'refresh', // or postMessage
        
        
        ));
        $wp_customize->add_control( 'saifi_pagetitle_bg_color', array(
        'type' => 'color',
        'priority' => '', // Within the section.
        'section' => 'saifi_page_title', // Required, core or custom.
        'label' => __( 'Background-color' ),
        'description'=> 'page_title background-color',
       
    ));
    



}