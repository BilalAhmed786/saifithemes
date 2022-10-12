<div class="breadcrumb"><?php get_breadcrumb(); ?></div>


<style>
 
div.breadcrumb{

    font-size: <?php echo get_theme_mod('saifi_breadcrumb_font_size','15px'); ?>;
    color: <?php echo get_theme_mod('saifi_breadcrumb_font_color','black'); ?>;
    background-color: <?php echo get_theme_mod('saifi_breadcrumb_bg_color','green'); ?>;
}

.fa-home{
    color: <?php echo get_theme_mod('saifi_breadcrumb_font_color','black'); ?>;
}





</style>


<?php 
/* bradcrumb text align */

if( get_theme_mod( 'saifi_breadcrumb_text-align','option 1' )=='option 1'):?>
<?php echo '<style> div.breadcrumb{text-align:center}</style>';?>    
<?php elseif(get_theme_mod( 'saifi_breadcrumb_text-align','option 1' )=='option 2'):?>
<?php echo '<style> div.breadcrumb{text-align:left}</style>';?>

<?php endif ?>




<?php if( get_theme_mod( 'saif_breadcrumb_toggle','Hide' )=='Hide') :?>
    <?php echo '<style> div.breadcrumb{display:none}</style>';?>   
<?php endif ?>