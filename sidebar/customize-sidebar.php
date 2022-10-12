<?php
add_action('customize_register','sidebars_page_content');
function sidebars_page_content( $wp_customize ) {

$wp_customize->add_section( 'saifi_sidebars_page' , array(
'title' => __('Sidebar'),
'panel' => '',
'priority' =>'' , // Before Widgets.
) );  

$wp_customize->add_setting( 'saifi_sidebar_heading_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'saifi_sidebar_heading_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Headings font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'saifi_sidebar_text_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'saifi_sidebar_text_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'text font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));

$wp_customize->add_setting( 'sidebar_rightside_border', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'sidebar_rightside_border', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Right sidebar border' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('   eg:1px solid black  ')
)
));
$wp_customize->add_setting( 'sidebar_rightside_width', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '13rem',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'sidebar_rightside_width', array(
    'type' => '<input>',
    'priority' => '', // Within the section.
    'section' => 'saifi_sidebars_page', // Required, core or custom.
    'label' => __( 'Right sidebar Width' ),
    'description'=> '',
    'input_attrs' => array(
    'placeholder' => __('   px-rem  ')
    )
    ));
    $wp_customize->add_setting( 'sidebar_leftside_width', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '13rem',
        'transport' => 'refresh', // or postMessage
        
        
        ) );
        $wp_customize->add_control( 'sidebar_leftside_width', array(
        'type' => '<input>',
        'priority' => '', // Within the section.
        'section' => 'saifi_sidebars_page', // Required, core or custom.
        'label' => __( 'Left sidebar Width' ),
        'description'=> '',
        'input_attrs' => array(
        'placeholder' => __('    px-rem  ')
        )
        ));


$wp_customize->add_setting( 'sidebar_leftside_border', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'sidebar_leftside_border', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Left sidebar Border' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('  eg:1px solid black  ')
)
));

$wp_customize->add_setting( 'sidebar_Heading_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'sidebar_Heading_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Heading alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center'
)
));


$wp_customize->add_setting( 'sidebar_Text_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'sidebar_Text_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Text alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center'
)
));
$wp_customize->add_setting( 'pages_sidebars_toggle', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'option 4',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'pages_sidebars_toggle', array(
    'type' => 'radio',
    'priority' => '', // Within the section.
    'section' => 'saifi_sidebars_page', // Required, core or custom.
    'label' => __( 'sidebar options' ),
    'description'=> '',
    'choices' => array(
    'option 1' =>'Show Right sidebar',
    'option 2' =>'Show Left sidebar',
    'option 3' =>'Show Both sidebars',
    'option 4' =>'Hide Both sidebars'
    
    
    )
    ));
$wp_customize->add_setting( 'sidebar_heading_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'sidebar_heading_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'Headings font-color',

));
$wp_customize->add_setting( 'sidebar_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'sidebar_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'text font-color',

));
$wp_customize->add_setting( 'sidebar_background_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'sidebar_background_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_sidebars_page', // Required, core or custom.
'label' => __( 'Background-color' ),
'description'=> '',

));


}