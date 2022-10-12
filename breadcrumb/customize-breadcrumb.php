<?php
add_action('customize_register','breadcrumb_controllers');
function breadcrumb_controllers( $wp_customize ) {
$wp_customize->add_section( 'saifi_bread' , array(
'title' => __('Breadcrumb'),
'panel' => '',
'priority' =>'' , // Before Widgets.
) );  
$wp_customize->add_setting( 'saif_breadcrumb_toggle', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'Hide',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    
    ) );
    $wp_customize->add_control( 'saif_breadcrumb_toggle', array(
    'type' => 'radio',
    'priority' => '', // Within the section.
    'section' => 'saifi_bread', // Required, core or custom.
    'label' => __( 'Hide/Show Breadcrumb' ),
    'choices' => array(
    'Hide' => 'Hide',
    'Show' => 'Show',
    
    )
    ));


$wp_customize->add_setting( 'saifi_breadcrumb_text-align', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'option 1',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'saifi_breadcrumb_text-align', array(
    'type' => 'select',
    'priority' => '', // Within the section.
    'section' => 'saifi_bread', // Required, core or custom.
    'label' => __( 'breadcrumb-alignment' ),
    'choices' => array(
    'option 1' => 'center-align',
    'option 2' => 'left-align',
    
    
    )
    ));
    $wp_customize->add_setting( 'saifi_breadcrumb_font_size', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '15px',
        'transport' => 'refresh', // or postMessage
        
        
        ) );
        $wp_customize->add_control( 'saifi_breadcrumb_font_size', array(
        'type' => '<input>',
        'priority' => '', // Within the section.
        'section' => 'saifi_bread', // Required, core or custom.
        'label' => __( 'Font-size' ),
        'description'=> 'breadcrumb font-size',
        'input_attrs' => array(
            'placeholder' => __('    px-rem')
        )
        ));

    $wp_customize->add_setting( 'saifi_breadcrumb_font_color', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'black',
        'transport' => 'refresh', // or postMessage
        
        
        ));
        $wp_customize->add_control( 'saifi_breadcrumb_font_color', array(
        'type' => 'color',
        'priority' => '', // Within the section.
        'section' => 'saifi_bread', // Required, core or custom.
        'label' => __( 'Font-Color' ),
        'description'=> 'breadcrumb font-color',
       
));



$wp_customize->add_setting( 'saifi_breadcrumb_bg_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'green',
    'transport' => 'refresh', // or postMessage
    
    
    ));
    $wp_customize->add_control( 'saifi_breadcrumb_bg_color', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'saifi_bread', // Required, core or custom.
    'label' => __( 'Background-color' ),
    'description'=> 'breadcrumb background-color',
   
));




}