<?php
add_action('customize_register','saifi_theme_pagination');
function saifi_theme_pagination( $wp_customize ) {
$wp_customize->add_panel('saifi_pagination_pan',array(
        'title' => __( 'Pagination' ),
        'description' => '', // Include html tags such as <p>.
        'priority' => 150, // Mixed with top-level-section hierarchy.
        ));
$wp_customize->add_section( 'saifi_Blogpagination_controllers' , array(
'title' => __('Blog-Pagination'),
'panel' => 'saifi_pagination_pan',
'priority' =>'' , // Before Widgets.
) ); 
$wp_customize->add_section( 'saifi_pagepagination_controllers' , array(
    'title' => __('Page-Pagination'),
    'panel' => 'saifi_pagination_pan',
    'priority' =>'' , // Before Widgets.
    ) ); 
// Blog-pagination controllers
$wp_customize->add_setting( 'pagination_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 2',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'pagination_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
'label' => __( 'Blog-Pagination-alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center'
)

));

$wp_customize->add_setting( 'pagination_fontsize', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'pagination_fontsize', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Blog-pagination font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));


$wp_customize->add_setting( 'pagination_fontcolor', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'pagination_fontcolor', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
'label' => __( 'text color' ),
'description'=> 'Blog-pagination text-color',

));
$wp_customize->add_setting( 'pagination_button_border', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '1 px solid',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'pagination_button_border', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
'label' => __( 'Blog-Button Border' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('   eg:- 1px solid black')
)
));
$wp_customize->add_setting( 'pagination_button_radius', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '5px',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'pagination_button_radius', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
'label' => __( 'Border-radius' ),
'description'=> 'button border radius',
'input_attrs' => array(
'placeholder' => __('   px-rem')
)
));
$wp_customize->add_setting( 'pagination_button_padding', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '6px 6px 6px 6px',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'pagination_button_padding', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
'label' => __( 'Blog-Button padding' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('   eg:- 1px 1px 1px 1px')
)
));



$wp_customize->add_setting( 'pagination_button_bgcolor', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'pagination_button_bgcolor', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
'label' => __( 'background color' ),
'description'=> 'Blog-button background color',

));

$wp_customize->add_setting( 'pagination_button_bgcolor_hover', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'white',
    'transport' => 'refresh', // or postMessage
    
    
    ));
    $wp_customize->add_control( 'pagination_button_bgcolor_hover', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
    'label' => __( 'background color' ),
    'description'=> 'Blog-button background color',
    
    ));
    $wp_customize->add_setting( 'pagination_button_textcolor_hover', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'white',
        'transport' => 'refresh', // or postMessage
        
        
        ));
        $wp_customize->add_control( 'pagination_button_textcolor_hover', array(
        'type' => 'color',
        'priority' => '', // Within the section.
        'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
        'label' => __( 'button  text-color on hover' ),
        'description'=> 'Blog-button textcolor on hover',
        
        ));

    $wp_customize->add_setting( 'pagination_button_bgcolor_hover', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'white',
        'transport' => 'refresh', // or postMessage
        
        
        ));
        $wp_customize->add_control( 'pagination_button_bgcolor_hover', array(
        'type' => 'color',
        'priority' => '', // Within the section.
        'section' => 'saifi_Blogpagination_controllers', // Required, core or custom.
        'label' => __( 'background color' ),
        'description'=> 'Blog-button background hover',
        
        ));





// page-pagination controllers

$wp_customize->add_setting( 'page_pagination_alignment', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'option 2',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'page_pagination_alignment', array(
    'type' => 'select',
    'priority' => '', // Within the section.
    'section' => 'saifi_pagepagination_controllers', // Required, core or custom.
    'label' => __( 'Page-Pagination-alignment' ),
    'description'=> '',
    'choices' => array(
    'option 1' =>'align-left',
    'option 2' =>'align-center'
    )
    
    ));
    
    $wp_customize->add_setting( 'page_pagination_fontsize', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '15px',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    
    $wp_customize->add_control( 'page_pagination_fontsize', array(
    'type' => '<input>',
    'priority' => '', // Within the section.
    'section' => 'saifi_pagepagination_controllers', // Required, core or custom.
    'label' => __( 'Font-size' ),
    'description'=> 'Page-pagination font-size',
    'input_attrs' => array(
    'placeholder' => __('    px-rem')
    )
    ));
    
    
    $wp_customize->add_setting( 'page_pagination_fontcolor', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'black',
    'transport' => 'refresh', // or postMessage
    
    
    ));
    $wp_customize->add_control( 'page_pagination_fontcolor', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'saifi_pagepagination_controllers', // Required, core or custom.
    'label' => __( 'text color' ),
    'description'=> 'Page-pagination text-color',
    
    ));
    $wp_customize->add_setting( 'page_pagination_font_hover', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'red',
        'transport' => 'refresh', // or postMessage
        
        
        ));
        $wp_customize->add_control( 'page_pagination_font_hover', array(
        'type' => 'color',
        'priority' => '', // Within the section.
        'section' => 'saifi_pagepagination_controllers', // Required, core or custom.
        'label' => __( 'text color on hover' ),
        'description'=> 'pagination text-color on hover',
        
        ));


    
    
    
    $wp_customize->add_setting( 'page_pagination_bgcolor', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'white',
    'transport' => 'refresh', // or postMessage
    
    
    ));
    $wp_customize->add_control( 'page_pagination_bgcolor', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'saifi_pagepagination_controllers', // Required, core or custom.
    'label' => __( 'background color' ),
    'description'=> 'pagination background color',
    
    ));







}