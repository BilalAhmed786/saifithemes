<?php
add_action('customize_register','widget_footer_area');
function widget_footer_area( $wp_customize ) {
$wp_customize->add_panel('saifi_footer_settings',array(
'title' => __( 'Footer' ),
'description' => '', // Include html tags such as <p>.
'priority' => 150, // Mixed with top-level-section hierarchy.
));

$wp_customize->add_section( 'saifi_footer_settings' , array(
'title' => __('Footer'),
'panel' => 'saifi_footer_settings',
'priority' =>'' , // Before Widgets.
) ); 
$wp_customize->add_section( 'saifi_footer_copyright' , array(
'title' => __('Footer Copyright'),
'panel' => 'saifi_footer_settings',
'priority' =>'' , // Before Widgets.
) ); 


$wp_customize->add_setting( 'saifi_footer_heading_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'saifi_footer_heading_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Headings font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'saifi_footer_text_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'saifi_footer_text_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'text font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'footers_hide_show', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.

'default' => 'option 4',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'footers_hide_show', array(
'type' => 'radio',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Footers options' ),
'description'=> '',
'choices' => array(
'option 1' =>'show 1 column',
'option 2' =>'Show 1st and 2nd columns',
'option 3' =>'Show  1st,2nd and third columns',
'option 4' =>'Show all columns'


)
));
$wp_customize->add_setting( 'saifi_footer_border', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'none',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'saifi_footer_border', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Footer border' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('   eg:1px solid black  ')
)
));


$wp_customize->add_setting( 'footer_Heading_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'footer_Heading_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Heading alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center'
)
));


$wp_customize->add_setting( 'footer_Text_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'footer_Text_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Text alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center'
)
));
$wp_customize->add_setting( 'footer_heading_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'footer_heading_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'Headings font-color',

));
$wp_customize->add_setting( 'footertext_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'footertext_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'text font-color',

));
$wp_customize->add_setting( 'footer_background_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'footer_background_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_footer_settings', // Required, core or custom.
'label' => __( 'Background-color' ),
'description'=> '',

));

//footer copyright
$wp_customize->add_setting( 'footer_copyright_toggle', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'Show',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'footer_copyright_toggle', array(
'type' => 'radio',
'priority' => '', // Within the section.
'section' => 'saifi_footer_copyright', // Required, core or custom.
'label' => __( 'Hide/Show footer copyright' ),
'description'=> '',
'choices' => array(
'Hide' =>'Hide',
'Show' =>'Show'
)
));

$wp_customize->add_setting( 'footer_copyright_Edit', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'Ⓒsaifithemes 2022',
'transport' => 'refresh', // or postMessage


) );


$wp_customize->add_control( 'footer_copyright_Edit', array(
'type' => 'textarea',
'priority' => '', // Within the section.
'section' => 'saifi_footer_copyright', // Required, core or custom.
'label' => __( 'Copyright' ),
'description'=> '',

));
$wp_customize->add_setting( 'Copyright_text_style', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Copyright_text_style', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'saifi_footer_copyright', // Required, core or custom.
'label' => __( 'Text-style' ),
'description'=> 'Copyright text style',
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
$wp_customize->add_setting( 'copright_footer_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 2',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'copright_footer_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'saifi_footer_copyright', // Required, core or custom.
'label' => __( 'copyright alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center',
'option 3' =>'align-right'
)
));

$wp_customize->add_setting( 'footer_copyright_font_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'footer_copyright_font_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_footer_copyright', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Copyright font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'footer_copyright_padding', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'footer_copyright_padding', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'saifi_footer_copyright', // Required, core or custom.
'label' => __( 'padding' ),
'description'=> 'padding copyright',
'input_attrs' => array(
'placeholder' => __('    eg: 1px 1px 1px 1px')
)
));
$wp_customize->add_setting( 'copyright_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'copyright_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_footer_copyright', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'copyright font-color',

));
$wp_customize->add_setting( 'copyright_background_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'copyright_background_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'saifi_footer_copyright', // Required, core or custom.
'label' => __( 'background color' ),
'description'=> 'copyright background',

));

}


// scroll to top function
add_action('customize_register','Saifi_scroll_to_top');
function Saifi_scroll_to_top( $wp_customize ) {
$wp_customize->add_section( 'scroll_to_top_area' , array(
'title' => __('Scroll-to-top'),
'panel' => '',
'priority' =>'' , // Before Widgets.
) ); 
$wp_customize->add_setting( 'saifi_scroll_toggle', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'hide',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'saifi_scroll_toggle', array(
    'type' => 'radio',
    'priority' => '', // Within the section.
    'section' => 'scroll_to_top_area', // Required, core or custom.
    'label' => __( 'Enable/Disable' ),
    'description'=> 'Enable/Disable scroll-to-top',
    'choices' => array(
        'Show' =>'Enable',
        'Hide' =>'Disable'
        )
    
    ));
    

$wp_customize->add_setting( 'saifi_scroll_to_top_edit', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '<i class="fa fa-arrow-circle-up"></i>',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'saifi_scroll_to_top_edit', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'scroll_to_top_area', // Required, core or custom.
'label' => __( 'font-awsome icon' ),
'description'=> 'select scroll to top icon',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));


$wp_customize->add_setting( 'scroll_to_top_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 2',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'scroll_to_top_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'scroll_to_top_area', // Required, core or custom.
'label' => __( 'Scroll alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-right'
)
));
$wp_customize->add_setting( 'saifi_scroll_font_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'saifi_scroll_font_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'scroll_to_top_area', // Required, core or custom.
'label' => __( 'font-size' ),
'description'=> 'Icon font size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'scroll_top_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'scroll_top_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'scroll_to_top_area', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'scroll-to-top color',

));

$wp_customize->add_setting( 'scroll_top_background_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'scroll_top_background_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'scroll_to_top_area', // Required, core or custom.
'label' => __( 'background color' ),
'description'=> 'scroll background color',

));






}
