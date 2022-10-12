<?php

// stylesheet and bootstrap css
function load_stylesheet() {
wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all' );
wp_enqueue_style('bootstrap');
wp_register_style( 'style', get_template_directory_uri() . '/main.css',array(),false,'all' );
wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheet' );


// jquery enquing


function Inculde_jquery()
{

wp_deregister_script('jquery');
wp_enqueue_script('jquery',get_template_directory_uri() . '/js/jquery-3.6.0.min.js','',1,true);
add_action( 'wp_enqueue_scripts', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'Inculde_jquery' );

// custom js enquing

function loadjs() {
    wp_register_script( 'customjs', get_template_directory_uri() . '/header/script.js',array(),'',1,true);
    wp_enqueue_script('customjs');
}

add_action( 'wp_enqueue_scripts', 'loadjs' );

// Enqueue Font Awesome 5
function tme_load_font_awesome() {
    // You can find the current URL for the latest version here: https://fontawesome.com/start
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.6.3/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'tme_load_font_awesome' );

//add sitelogo and title


add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**
 * Register Custom Navigation 
 */

register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


//breadcrumb
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow"><i class="fas fa-home"></i></a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

// body background image or color

$args = array(
    'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
    'default-color' => '0000ff',
);
add_theme_support( 'custom-background', $args );

//featured image

add_theme_support( 'post-thumbnails' );
add_image_size( 'smallest', 300,100,true );
add_image_size( 'medium',400 ,300,true);
add_image_size( 'largest',600,400,true);


// footer and sidebars page 

add_action( 'widgets_init', 'saifitheme_widgets_init' );
function saifitheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left Sidebar', 'saifi_theme' ),
        'id'            => 'left_sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'saifi_theme' ),
        'id'            => 'right_sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'saifi_theme' ),
        'id'            => 'footer_1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'saifi_theme' ),
        'id'            => 'footer_2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'saifi_theme' ),
        'id'            => 'footer_3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer 4', 'saifi_theme' ),
        'id'            => 'footer_4',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}


//template function files requiring


     require("header/customize-header.php");
     require("breadcrumb/customize-breadcrumb.php");
     require("pagetitle/customize-page.php");
     require("sidebar/customize-sidebar.php");
     require("footer/customize-footer.php");
     require("pagination/customize-pagination.php");
     require("Blog/customize-blog.php");
     require("img/customize-featuredimg.php");
     require("preloader/customize-preloader.php");



