

<?php if( get_theme_mod( 'saifi_pagetitle_toggle','Show' )=='Show') :?>
<div id='thechamp' class='pagetitle'>
<?php the_title();?>
</div>
<?php endif ?>




<?php if( get_theme_mod( 'saifi_pagetitle-text-align','option 1' )=='option 1'):?>
<?php echo '<style> div#thechamp.pagetitle {text-align:center }</style>';?>    
<?php elseif(get_theme_mod( 'saifi_pagetitle-text-align','option 1' )=='option 2'):?>
<?php echo '<style> div#thechamp.pagetitle {text-align:left }</style>';?>

<?php endif ?>


<?php if( get_theme_mod( 'page_title_family','option 1' )=='option 1'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:Gabriola }</style>';?>    
<?php elseif(get_theme_mod( 'page_title_family','option 1' )=='option 2'):?>
<?php echo '<style> #thechampdiv#thechamp.pagetitle  {font-family:option 1 }</style>';?>
<?php  elseif(get_theme_mod( 'page_title_family','option 1' )=='option 3'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:Brush Script MT }</style>' ;?>
<?php elseif( get_theme_mod( 'page_title_family','option 1' )=='option 4'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:Comic Sans MS }</style>';?>    
<?php elseif(get_theme_mod( 'page_title_family','option 1' )=='option 5'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:Courier }</style>';?>
<?php  elseif(get_theme_mod( 'page_title_family','option 1' )=='option 6'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:Ink Free }</style>' ;?>
<?php elseif( get_theme_mod( 'page_title_family','option 1' )=='option 7'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:Lucida Handwriting }</style>';?>    
<?php elseif(get_theme_mod( 'page_title_family','option 1' )=='option 8'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:Verdana }</style>';?>
<?php  elseif(get_theme_mod( 'page_title_family','option 1' )=='option 9'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:MV Boli }</style>' ;?>
<?php elseif( get_theme_mod( 'page_title_family','option 1' )=='option 10'):?>
<?php echo '<style> div#thechamp.pagetitle {font-famliy:papyrus }</style>';?>    
<?php elseif(get_theme_mod( 'page_title_family','option 1' )=='option 11'):?>
<?php echo '<style> div#thechamp.pagetitle {font-family:Segoe Script }</style>';?>

<?php endif ?>




<style>

div#thechamp.pagetitle  {

color:<?php echo get_theme_mod('saifi_pagetitle_font_color','black') ?>;
font-size:<?php echo get_theme_mod('saifi_pagetitle_font_size','15px') ?>;   
background-color:<?php echo get_theme_mod('saifi_pagetitle_bg_color','green') ?>; 
}

</style>