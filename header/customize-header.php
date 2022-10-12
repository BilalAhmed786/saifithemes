<?php
add_action('customize_register','custom_header_section');
function custom_header_section( $wp_customize ) {
$wp_customize->add_panel('header_area',array(
'title' => __( 'Header' ),
'description' => '', // Include html tags such as <p>.
'priority' => 150, // Mixed with top-level-section hierarchy.
));
$wp_customize->add_section( 'custom_site_headerstyle' , array(
'title' => __('Header Style'),
'panel' => 'header_area',
'priority' =>'' , // Before Widgets.
) );  
$wp_customize->add_section( 'custom_logo_style' , array(
'title' => __('Site-Title'),
'panel' => 'header_area',
'priority' =>'' , // Before Widgets.
) );  
$wp_customize->add_section( 'desktop_nav_menu' , array(
'title' => __('Menu'),
'panel' => 'header_area',
'priority' =>'' , // Before Widgets.
) );  
$wp_customize->add_section( 'mobile_nav_menu' , array(
'title' => __('Mobile Menu'),
'panel' => 'header_area',
'priority' =>'' , // Before Widgets.
) );  

//header style section
$wp_customize->add_setting( 'custom_header_style', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'custom_header_style', array(
'type' => 'radio',
'priority' => '', // Within the section.
'section' => 'custom_site_headerstyle', // Required, core or custom.
'label' => __( 'Choose your favourite header style' ),
'choices' => array(
'option 1' => 'Style 1',
'option 2' => 'Style 2',
'option 3' => 'Style 3',

)
));
$wp_customize->add_setting( 'custom_header_width', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '9rem',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'custom_header_width', array(
    'type' => '<input>',
    'priority' => '', // Within the section.
    'section' => 'custom_site_headerstyle', // Required, core or custom.
    'label' => __( 'Header Width' ),
    'input_attrs' => array(
        'placeholder' => __('    px-rem')
        )
    ));
    $wp_customize->add_setting( 'custom_header_border', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        
        
        ) );
        $wp_customize->add_control( 'custom_header_border', array(
        'type' => '<input>',
        'priority' => '', // Within the section.
        'section' => 'custom_site_headerstyle', // Required, core or custom.
        'label' => __( 'Header Border color&width' ),
        'input_attrs' => array(
            'placeholder' => __('    1px solid black')
            )
        ));


$wp_customize->add_setting( 'font_color_before', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'green',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'font_color_before', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'custom_site_headerstyle', // Required, core or custom.
'description' => 'header color before scroll',
'label' => __( 'Header color' ),


));
$wp_customize->add_setting( 'font_color_after', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'yellow',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'font_color_after', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'custom_site_headerstyle', // Required, core or custom.
'description' => 'header color after scroll',
'label' => __( ' Header color' ),


));
$wp_customize->add_setting( 'search_icon_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'red',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'search_icon_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'custom_site_headerstyle', // Required, core or custom.
'label' => __( 'Search-icon Color' ),


));
$wp_customize->add_setting( 'title_text_style', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage

) );
// site title and logo
$wp_customize->add_control( 'title_text_style', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'custom_logo_style', // Required, core or custom.
'label' => __( 'Text-style' ),
'description'=> 'Title text style',
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

$wp_customize->add_setting( 'title_logo_width', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '6rem',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'title_logo_width', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'custom_logo_style', // Required, core or custom.
'label' => __( 'Logo width' ),
'description'=> 'Set logo width',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'title_width', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '40px',
    'transport' => 'refresh', // or postMessage
    
    
    ));
    $wp_customize->add_control( 'title_width', array(
    'type' => '<input>',
    'priority' => '', // Within the section.
    'section' => 'custom_logo_style', // Required, core or custom.
    'label' => __( 'Font-size' ),
    'description'=> 'Adjust title Font-size',
    'input_attrs' => array(
        'placeholder' => __('    px-rem')
        )



));
$wp_customize->add_setting( 'title_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'title_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'custom_logo_style', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'Title font-color',

));
$wp_customize->add_setting( 'description_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'description_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'custom_logo_style', // Required, core or custom.
'label' => __( 'Font-color' ),
'description'=> 'Tagline font-color',




));


$wp_customize->add_setting( 'site_description_width', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'site_description_width', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'custom_logo_style', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Adjust site tagline Font-size',
'input_attrs' => array(
    'placeholder' => __('    px-rem')
    )



));

//desktop menu section

$wp_customize->add_setting( 'navmenu_text_style', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'navmenu_text_style', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'desktop_nav_menu', // Required, core or custom.
'label' => __( 'Text-style' ),
'description'=> 'Navmenu text style',
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


$wp_customize->add_setting( 'Nav_text_align', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 2',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Nav_text_align', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'desktop_nav_menu', // Required, core or custom.
'label' => __( 'Menu-alignment' ),
'description'=> 'Navmenu text style',
'choices' => array(
'option 1' => 'left-align',
'option 2' => 'center-align',

)
));

$wp_customize->add_setting( 'Nav_font_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '25px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Nav_font_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'desktop_nav_menu', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Navmenu font size',
'input_attrs' => array(
    'placeholder' => __('    px-rem')
)
));

$wp_customize->add_setting( 'Navmenu_padding', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '10px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Navmenu_padding', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'desktop_nav_menu', // Required, core or custom.
'label' => __( 'Navmenu padding' ),
'description'=> 'Padding between menu links',
'input_attrs' => array(
    'placeholder' => __('    px-rem')
)
));

$wp_customize->add_setting( 'Nav_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Nav_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'desktop_nav_menu', // Required, core or custom.
'label' => __( 'Font Color' ),
'description'=> 'Navmenu text color',

));
$wp_customize->add_setting( 'Nav_font_hover', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'orange',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Nav_font_hover', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'desktop_nav_menu', // Required, core or custom.
'label' => __( 'Hover Font Color' ),
'description'=> 'Navmenu Font color on hover',

));
$wp_customize->add_setting( 'Nav_font_bg_hover', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Nav_font_bg_hover', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'desktop_nav_menu', // Required, core or custom.
    'label' => __( 'Hover background Color' ),
    'description'=> 'Navmenu background color on hover',

    ));
    $wp_customize->add_setting( 'Nav_bg_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'gray',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
$wp_customize->add_control( 'Nav_bg_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'desktop_nav_menu', // Required, core or custom.
'label' => __( 'Background Color' ),
'description'=> 'Navmenu Background color',

));
$wp_customize->add_setting( 'Nav_dropdown_bg', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'gray',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Nav_dropdown_bg', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'desktop_nav_menu', // Required, core or custom.
'label' => __( 'DropDown Menu Color' ),
'description'=> 'Dropdown background color',

));


//Mobile-Menu settings


$wp_customize->add_setting( 'mobilemenu_text_style', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'mobilemenu_text_style', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Text-style' ),
'description'=> 'Mobile Menu text style',
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


$wp_customize->add_setting( 'mobile_text_align', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 2',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'mobile_text_align', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Menu alignment' ),
'description'=> 'menu alignment',
'choices' => array(
'option 1' => 'left-align',
'option 2' => 'center-align',

)
));
$wp_customize->add_setting( 'Mobile_header_layout', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Mobile_header_layout', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Mobile Header Display' ),
'description'=> 'choose your favt. header style',
'choices' => array(
'option 1' => 'logo/title and button center align  ',
'option 2' => 'logo/title left and button right align',
'option 3' => 'logo/title right and button left align',

)
));

$wp_customize->add_setting( 'mobileheader_menu_width', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '5px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'mobileheader_menu_width', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Mobile Menu Margin' ),
'description'=> 'Margin from top for adjustment',
'input_attrs' => array(
    'placeholder' => __('    px-rem')
)

));

$wp_customize->add_setting( 'mobilemenu_font_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '5rem',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'mobilemenu_font_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Menu font size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));

$wp_customize->add_setting( 'mobilemenu_padding', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '7px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'mobilemenu_padding', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Link padding' ),
'description'=> 'Padding between menu links',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));

$wp_customize->add_setting( 'mobilemenu_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'mobilemenu_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Font Color' ),
'description'=> 'menu text color',

));
$wp_customize->add_setting( 'Mobilemenu_font_hover', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'orange',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Mobilemenu_font_hover', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Hover Font Color' ),
'description'=> 'menu Font color on hover',

));
$wp_customize->add_setting( 'mobilemenu_font_bg_hover', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'mobilemenu_font_bg_hover', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Hover background Color' ),
'description'=> 'menu background color on hover',

));
$wp_customize->add_setting( 'Mobilemenu_bg_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'gray',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Mobilemenu_bg_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Background Color' ),
'description'=> 'Menu Background color',

));
$wp_customize->add_setting( 'Mobiledropdown_bg_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'gray',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Mobiledropdown_bg_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'mobile_nav_menu', // Required, core or custom.
'label' => __( 'Background Color' ),
'description'=> 'Dropdown Background color',

));



}