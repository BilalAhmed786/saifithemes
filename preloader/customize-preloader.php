<?php
add_action('customize_register','custom_preloader_area');
function custom_preloader_area( $wp_customize ) {
$wp_customize->add_section( 'custom_preloader_section' , array(
'title' => __('Preloader'),
'panel' => '',
'priority' =>'' , // Before Widgets.
) ); 
$wp_customize->add_setting( 'saifi_preloader_hide_show', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    
    'default' => 'option 2',
    'transport' => 'refresh', // or postMessage
    
    
) );
    $wp_customize->add_control( 'saifi_preloader_hide_show', array(
    'type' => 'radio',
    'priority' => '', // Within the section.
    'section' => 'custom_preloader_section', // Required, core or custom.
    'label' => __( 'Preloader' ),
    'description'=> '',
    'choices' => array(
    'option 1' =>'Enable',
    'option 2' =>'Disable',
    'option 3' =>'Show only front page',
   
)
    ));


$wp_customize->add_setting( 'saifi_preloader_style', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'option 1',
        'transport' => 'refresh', // or postMessage
        
        
    ) );
        $wp_customize->add_control( 'saifi_preloader_style', array(
        'type' => 'radio',
        'priority' => '', // Within the section.
        'section' => 'custom_preloader_section', // Required, core or custom.
        'label' => __( 'Preloader Styles' ),
        'description'=> '',
        'choices' => array(
        'option 1' =>'Style 1',
        'option 2' =>'Style 2',
        'option 3' =>'Style 3',
        'option 4' =>'Style 4',
        'option 5' =>'Style 5'
       
    )
        ));
    
        $wp_customize->add_setting( 'saifi_preloader_width', array(
            'type' => 'theme_mod', // or 'option'
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
            'default' => '100px',
            'transport' => 'refresh', // or postMessage
            
            
            ) );
            $wp_customize->add_control( 'saifi_preloader_width', array(
            'type' => '<input>',
            'priority' => '', // Within the section.
            'section' => 'custom_preloader_section', // Required, core or custom.
            'label' => __( 'preloader Width' ),
            'input_attrs' => array(
                'placeholder' => __('    px-rem')
                )
            ));


         
                $wp_customize->add_setting( 'saifi_preloader_color', array(
                'type' => 'theme_mod', // or 'option'
                'capability' => 'edit_theme_options',
                'theme_supports' => '', // Rarely needed.
                'default' => 'white',
                'transport' => 'refresh', // or postMessage
                
                
                ) );
                $wp_customize->add_control( 'saifi_preloader_color', array(
                'type' => 'color',
                'priority' => '', // Within the section.
                'section' => 'custom_preloader_section', // Required, core or custom.
                'description' => '',
                'label' => __( 'background color' ),
                
                
                ));





}