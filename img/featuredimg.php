<div class='featuredimage'>
<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail('smallest');
}
?>
</div>



<style>
div.featuredimage img{
    width: <?php echo get_theme_mod('featuredimg_shape_width','200px'); ?>;
    height: <?php echo get_theme_mod('featuredimg_shape_height','200px'); ?>;
    border: <?php echo get_theme_mod('featuredimg_shape_border','200px'); ?>;
    border-radius: <?php echo get_theme_mod('featuredimg_shape_borderradius','200px'); ?>;
	}

</style>

<?php
//shapes featured image
if( get_theme_mod( 'featuredimg_shape_options','option 2' )=='option 1'):?>
<?php echo '<style>
.featuredimage img{
    border-radius:50%;
	}
</style>';?>    
<?php elseif(get_theme_mod( 'featuredimg_shape_options','option 2' )=='option 2'):?>
<?php echo '<style>
.featuredimage img{
    border-radius:0%;
	}


</style>';?>


<?php endif;
?>



<?php
//shapes featured image alignment
if( get_theme_mod( 'saifi_featuredimg_alignment','option 1' )=='option 1'):?>
<?php echo '<style>
div.featuredimage{
    text-align:center;
	}
</style>';?>    
<?php elseif(get_theme_mod( 'saifi_featuredimg_alignment','option 1' )=='option 2'):?>
<?php echo '<style>
div.featuredimage{
    text-align:left;
	}


</style>';?>


<?php endif;
?>