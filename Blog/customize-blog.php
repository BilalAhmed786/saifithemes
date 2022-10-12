<?php
add_action('customize_register','saifi_blog_area');
function saifi_blog_area( $wp_customize ) {
$wp_customize->add_panel('bloger_pann',array(
'title' => __( 'Blog' ),
'description' => '', // Include html tags such as <p>.
'priority' => 150, // Mixed with top-level-section hierarchy.
));
$wp_customize->add_section( 'Blog_customize_controllers' , array(
'title' => __('Blog'),
'panel' => 'bloger_pann',
'priority' =>'' , // Before Widgets.
) );  
$wp_customize->add_section( 'Blog_Breadcrumb_controllers' , array(
'title' => __('Breadcrumb'),
'panel' => 'bloger_pann',
'priority' =>'' , // Before Widgets.
) );  
$wp_customize->add_section( 'Blog_sidebars_controllers' , array(
'title' => __('Sidebar'),
'panel' => 'bloger_pann',
'priority' =>'' , // Before Widgets.
) );  
$wp_customize->add_section( 'Blog_comments_controllers' , array(
'title' => __('Comments'),
'panel' => 'bloger_pann',
'priority' =>'' , // Before Widgets.
) );  


$wp_customize->add_setting( 'Blog_category_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 2',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blog_category_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Blog Category_title alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center'
)

));

$wp_customize->add_setting( 'Blog_category_toggle', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'Show',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blog_category_toggle', array(
'type' => 'radio',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Hide/Show' ),
'description'=> 'Blog-category toggle',
'choices' => array(
'Hide' =>'Hide',
'Show' =>'Show'
)

));
$wp_customize->add_setting( 'Blog_category_fontstyle', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 2',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blog_category_fontstyle', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Font-family' ),
'description'=> 'Blog category title font style',
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

$wp_customize->add_setting( 'Blog_category_fontsize', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'Blog_category_fontsize', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Blog category font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'Blog_category_fontcolor', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'Blog_category_fontcolor', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Font-color' ),
'description'=> 'Blog category font-color',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));


$wp_customize->add_setting( 'Blog_category_bgcolor', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'Blog_category_bgcolor', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Font-color' ),
'description'=> 'Blog category bg-color',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'Blog_button edit', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'Readmore',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'Blog_button edit', array(
'type' => 'text',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Edit button Text' ),
'description'=> '',

));
$wp_customize->add_setting( 'Blog_button_font_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '18px',
'transport' => 'refresh', // or postMessage


) );

$wp_customize->add_control( 'Blog_button_font_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'button-text-size' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));

$wp_customize->add_setting( 'blogbutton_text_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'blogbutton_text_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Button-text-color' ),
'description'=> '',

));

$wp_customize->add_setting( 'blogbutton_text_hover', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'blogbutton_text_hover', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'text-color' ),
'description'=> 'button text color on hover',

));



$wp_customize->add_setting( 'blogbutton_background_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'blue',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'blogbutton_background_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Button-Background-color' ),
'description'=> '',

));
$wp_customize->add_setting( 'blogbutton_background_hover', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'blogbutton_background_hover', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Background-color' ),
'description'=> 'Button background on hover',

));


$wp_customize->add_setting( 'blogbutton_border', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'blogbutton_border', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_customize_controllers', // Required, core or custom.
'label' => __( 'Button border' ),
'description'=> '',

));
$wp_customize->add_setting( 'blogbutton_border_radius', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'white',
    'transport' => 'refresh', // or postMessage
    
    
    ));
    $wp_customize->add_control( 'blogbutton_border_radius', array(
    'type' => '<input>',
    'priority' => '', // Within the section.
    'section' => 'Blog_customize_controllers', // Required, core or custom.
    'label' => __( 'Button border-radius' ),
    'description'=> '',
    
    ));






//breadcrumb controllers

$wp_customize->add_setting( 'Blog_breadcrumb_toggle', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'Hide',
'transport' => 'refresh', // or postMessage
'sanitize_callback' => 'esc_attr',

) );
$wp_customize->add_control( 'Blog_breadcrumb_toggle', array(
'type' => 'radio',
'priority' => '', // Within the section.
'section' => 'Blog_Breadcrumb_controllers', // Required, core or custom.
'label' => __( 'Hide/Show Breadcrumb' ),
'choices' => array(
'Hide' => 'Hide',
'Show' => 'Show',

)
));


$wp_customize->add_setting( 'Blog_Breadcrumb_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blog_Breadcrumb_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'Blog_Breadcrumb_controllers', // Required, core or custom.
'label' => __( 'breadcrumb-alignment' ),
'choices' => array(
'option 1' => 'center-align',
'option 2' => 'left-align',


)
));
$wp_customize->add_setting( 'Bolog_breadcrumb_font_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Bolog_breadcrumb_font_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_Breadcrumb_controllers', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'breadcrumb font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));

$wp_customize->add_setting( 'Blog_breadcrumb_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'Blog_breadcrumb_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_Breadcrumb_controllers', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'breadcrumb font-color',

));



$wp_customize->add_setting( 'Blog_breadcrumb_bg_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'green',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'Blog_breadcrumb_bg_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_Breadcrumb_controllers', // Required, core or custom.
'label' => __( 'Background-color' ),
'description'=> 'breadcrumb background-color',

));

//sidebar controllers



$wp_customize->add_setting( 'Blog_sidebar_heading_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blog_sidebar_heading_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'Headings font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'Blog_sidebar_text_size', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '15px',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blog_sidebar_text_size', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Font-size' ),
'description'=> 'text font-size',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'Blog_sidebars_toggle', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 4',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blog_sidebars_toggle', array(
'type' => 'radio',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'sidebar options' ),
'description'=> '',
'choices' => array(
'option 1' =>'Show Right sidebar',
'option 2' =>'Show Left sidebar',
'option 3' =>'Show Both sidebars',
'option 4' =>'Hide Both sidebars'


)
));
$wp_customize->add_setting( 'Blogsidebar_rightside_border', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blogsidebar_rightside_border', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Right sidebar border' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('   eg:1px solid black  ')
)
));

$wp_customize->add_setting( 'Blogsidebar_leftside_border', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blogsidebar_leftside_border', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Left sidebar border' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('    eg:1px solid black')
)
));
$wp_customize->add_setting( 'Blogsidebar_right_width', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => '12rem',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blogsidebar_right_width', array(
'type' => '<input>',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Right sidebar width' ),
'description'=> '',
'input_attrs' => array(
'placeholder' => __('    px-rem')
)
));
$wp_customize->add_setting( 'Blogsidebar_left_width', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '12rem',
    'transport' => 'refresh', // or postMessage
    
    
    ) );
    $wp_customize->add_control( 'Blogsidebar_left_width', array(
    'type' => '<input>',
    'priority' => '', // Within the section.
    'section' => 'Blog_sidebars_controllers', // Required, core or custom.
    'label' => __( 'Left sidebar width' ),
    'description'=> '',
    'input_attrs' => array(
    'placeholder' => __('    px-rem')
    )
    ));

$wp_customize->add_setting( 'Blogsidebar_Heading_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blogsidebar_Heading_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Heading alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center'
)
));


$wp_customize->add_setting( 'Blogsidebar_Text_alignment', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'option 1',
'transport' => 'refresh', // or postMessage


) );
$wp_customize->add_control( 'Blogsidebar_Text_alignment', array(
'type' => 'select',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Text alignment' ),
'description'=> '',
'choices' => array(
'option 1' =>'align-left',
'option 2' =>'align-center'
)
));
$wp_customize->add_setting( 'Blogsidebar_heading_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'Blogsidebar_heading_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'Headings font-color',

));
$wp_customize->add_setting( 'Blogsidebar_font_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'black',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'Blogsidebar_font_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Font-Color' ),
'description'=> 'text font-color',

));
$wp_customize->add_setting( 'Blogsidebar_background_color', array(
'type' => 'theme_mod', // or 'option'
'capability' => 'edit_theme_options',
'theme_supports' => '', // Rarely needed.
'default' => 'white',
'transport' => 'refresh', // or postMessage


));
$wp_customize->add_control( 'Blogsidebar_background_color', array(
'type' => 'color',
'priority' => '', // Within the section.
'section' => 'Blog_sidebars_controllers', // Required, core or custom.
'label' => __( 'Background-color' ),
'description'=> '',

));

/*comments controllers*/


$wp_customize->add_setting( 'Comments_toggle', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    
    ) );
    $wp_customize->add_control( 'Comments_toggle', array(
    'type' => 'radio',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Hide/Show comments Form' ),
    'choices' => array(
    'option 1' => 'Hide comment form',
    'option 2' => 'Hide comments only',
    'option 3' => 'Hide comments section',
    'option 4' => 'Show comments section',
    )
    ));
    
    $wp_customize->add_setting( 'Comments_alignment', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'option 2',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    
    ) );
    $wp_customize->add_control( 'Comments_alignment', array(
    'type' => 'select',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Comments Alignment' ),
    'choices' => array(
    'option 1' => 'Comments align left',
    'option 2' => 'Comments align center',
    
    )
    ));
    $wp_customize->add_setting( 'comments_title_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'black',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'comments_title_color', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Font color' ),
    'description' => __( 'Change Title color' ),
    ) );
    $wp_customize->add_setting( 'comments_title_font', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '15px',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'comments_title_font', array(
    'type' => '<input>',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Comment title Font' ),
    'description' => __( 'Change font size' ),
    'input_attrs' => array(
    'placeholder' => __('    px-rem')
    )
    ) );
    
    
    
    $wp_customize->add_setting( 'Comments_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'black',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'Comments_color', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Font color' ),
    'description' => __( 'comments color' ),
    ) );
    $wp_customize->add_setting( 'Comments_font', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '15px',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'Comments_font', array(
    'type' => 'input',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Font size' ),
    'description' => __( 'comments font size' ),
    'input_attrs' => array(
    'placeholder' => __('    px-rem')
    )
    ) );
    $wp_customize->add_setting( 'Form_lable_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '',
    'transport' => 'refresh', // or postMessage
   
    ) );
    $wp_customize->add_control( 'Form_lable_color', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Form label color' ),
    'description' => __( '' ),
    ) );
    $wp_customize->add_setting( 'Form_lable_font', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '15px',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'Form_lable_font', array(
    'type' => 'input',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Font-size' ),
    'description' => __( 'Font-Size form lable' ),
    'input_attrs' => array(
    'placeholder' => __('    px-rem')
    )
    ) );
    $wp_customize->add_setting( 'textarea_color_ajst', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'textarea_color_ajst', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Form textarea color' ),
    'description' => __( '' ),
    ) );

    $wp_customize->add_setting( 'textarea_input_color', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'black',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
        'description' => __( '' ),
        ) );
        $wp_customize->add_control( 'textarea_input_color', array(
        'type' => 'color',
        'priority' => '', // Within the section.
        'section' => 'Blog_comments_controllers', // Required, core or custom.
        'label' => __( 'Form textarea input color' ),
        'description' => __( '' ),
        ) );
    
    
    $wp_customize->add_setting( 'input_bg_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'input_bg_color', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Form input background' ),
    'description' => __( '' ),
    ) );
    
    $wp_customize->add_setting( 'Form_bg_color', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'white',
        'transport' => 'refresh', // or postMessage
        
        ) );
        $wp_customize->add_control( 'Form_bg_color', array(
        'type' => 'color',
        'priority' => '', // Within the section.
        'section' => 'Blog_comments_controllers', // Required, core or custom.
        'label' => __( 'Form background' ),
        'description' => __( '' ),
        ) );
    
    
    
    $wp_customize->add_setting( 'form_input_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'black',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'form_input_color', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'Form input color' ),
    'description' => __( '' ),
    ) );
    $wp_customize->add_setting( 'button_text_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '5rem',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'button_text_color', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'button Text-color' ),
    'description' => __( '' ),
    ) );
    $wp_customize->add_setting( 'button_text_size', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '15px',
        'transport' => 'refresh', // or postMessage
       
        ) );
        $wp_customize->add_control( 'button_text_size', array(
        'type' => '<input>',
        'priority' => '', // Within the section.
        'section' => 'Blog_comments_controllers', // Required, core or custom.
        'label' => __( 'button Text-size' ),
        'description' => __( '' ),
        ) );

    $wp_customize->add_setting( 'button_text_hovercolor', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '5rem',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
        'description' => __( '' ),
        ) );
        $wp_customize->add_control( 'button_text_hovercolor', array(
        'type' => 'color',
        'priority' => '', // Within the section.
        'section' => 'Blog_comments_controllers', // Required, core or custom.
        'label' => __( 'button Text-color' ),
        'description' => __( 'button Text-color on hover' ),
        ) );
    $wp_customize->add_setting( 'button_bg_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'button_bg_color', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'button background-color' ),
    'description' => __( '' ),
    ) );
    $wp_customize->add_setting( 'button_bg_hover', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'button_bg_hover', array(
    'type' => 'color',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'button background ' ),
    'description' => __( 'button background color on hover' ),
    ) );
    
    
    $wp_customize->add_setting( 'comment_button_border', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => '1px solid black',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_attr',
    'description' => __( '' ),
    ) );
    $wp_customize->add_control( 'comment_button_border', array(
    'type' => 'input',
    'priority' => '', // Within the section.
    'section' => 'Blog_comments_controllers', // Required, core or custom.
    'label' => __( 'button border color and thickness' ),
    'description' => __( '' ),
    'input_attrs' => array(
    'placeholder' => __('    eg: 1px solid white')
    )
    
    ) );

    $wp_customize->add_setting( 'comment_button_border_radius', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'esc_attr',
        'description' => __( '' ),
        ) );
        $wp_customize->add_control( 'comment_button_border_radius', array(
        'type' => 'input',
        'priority' => '', // Within the section.
        'section' => 'Blog_comments_controllers', // Required, core or custom.
        'label' => __( 'Button-border radius' ),
        'description' => __( '' ),
        'input_attrs' => array(
        'placeholder' => __('    px-rem')
        )
        ));
        $wp_customize->add_setting( 'comment_button_padding', array(
            'type' => 'theme_mod', // or 'option'
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
            'default' => '1 px 1px 1px 1px',
            'transport' => 'refresh', // or postMessage
            'sanitize_callback' => 'esc_attr',
            'description' => __( '' ),
            ) );
            $wp_customize->add_control( 'comment_button_padding', array(
            'type' => 'input',
            'priority' => '', // Within the section.
            'section' => 'Blog_comments_controllers', // Required, core or custom.
            'label' => __( 'Button-padding' ),
            'description' => __( '' ),
            'input_attrs' => array(
            'placeholder' => __('    eg: 1px 1px 1px 1px')
            )
        
        ) );
    
    
    
    }
    

    
