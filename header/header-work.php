<nav id ="headercontain" class="navbar navbar-expand-md navbar-light customnav" role="navigation">
<div class='logoadjst'>
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 if ( has_custom_logo() ) {
   echo '<a href= "'.home_url().'"><img src="' . esc_url( $logo[0] ) .'"  class ="logosize" alt="' . get_bloginfo( 'name' ) . '"></a>';   
} else {
    echo '<div class="textlogo"><h1><a href= "'.home_url().'"> '  . get_bloginfo( 'name' ) . ' </a></h1></div>';        
    echo '<div class="textlogo"><P>' . get_bloginfo('description') . '</P></div>';
    
}
?>
<!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
    <span class="dark-blue-text"><i
        class="fas fa-bars fa-1x"></i></span>
</button>
</div>
<?php
wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 7,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        
    <div class="searchform">
<?php get_template_part( '/searchform' );
?>
</nav>



<?php 
/*requiring template sections*/
get_template_part( 'header/header-customizer' );
?>

