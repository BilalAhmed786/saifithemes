<div id="preloader" class='allpre'></div>

<style> 

div#preloader.allpre
{

background-size:<?php echo get_theme_mod('saifi_preloader_width','100px'); ?>;
background-color:<?php echo get_theme_mod('saifi_preloader_color','white'); ?>;  

}
div#frontpreloader.fropre
{

background-size:<?php echo get_theme_mod('saifi_preloader_width','100px'); ?>;
background-color:<?php echo get_theme_mod('saifi_preloader_color','white'); ?>;  

}

</style>

<?php 
//preloader Enable/Disable

if( get_theme_mod( 'saifi_preloader_hide_show','option 2' )=='option 1'):?>
<?php echo '<style> 
div#preloader{}
</style>';?>    

<?php elseif(get_theme_mod( 'saifi_preloader_hide_show','option 2' )=='option 2'):?>
<?php echo '<style> 
div#preloader
{display:none}
#frontpreloader
{display:none}

</style>';?>
<?php elseif(get_theme_mod( 'saifi_preloader_hide_show','option 2' )=='option 3'):?>
<?php echo '<style> 
div#preloader
{display:none}</style>';?>

<?php endif; ?>





<?php 
//preloader styles
if( get_theme_mod( 'saifi_preloader_style','option 1' )=='option 1'):?>
<?php echo '<style> 
div#preloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("https://i.gifer.com/origin/ec/ecf46fc2a40f43ad0ef438b04b0d2e8e_w200.gif") 50% 50% no-repeat;
    
}
div#frontpreloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url ("https://i.gifer.com/origin/ec/ecf46fc2a40f43ad0ef438b04b0d2e8e_w200.gif") 50% 50% no-repeat;
   
   
}
</style>';?>    

<?php elseif(get_theme_mod( 'saifi_preloader_style','option 1' )=='option 2'):?>
<?php echo '<style> 
div#preloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("https://sksworldschool.com/wp-content/uploads/2021/10/Reload-Image-Gif-1.gif") 50% 50% no-repeat;
    
}
div#frontpreloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("https://sksworldschool.com/wp-content/uploads/2021/10/Reload-Image-Gif-1.gif") 50% 50% no-repeat;
    

}

</style>';?>
<?php elseif(get_theme_mod( 'saifi_preloader_style','option 1' )=='option 3'):?>
<?php echo '<style> 
div#preloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif") 50% 50% no-repeat;
    
}
div#frontpreloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif"") 50% 50% no-repeat;
    
}
 
</style>';?>
<?php elseif(get_theme_mod( 'saifi_preloader_style','option 1' )=='option 4'):?>
<?php echo '<style> 
div#preloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("https://wpamelia.com/wp-content/uploads/2018/11/ezgif-2-6d0b072c3d3f.gif") 50% 50% no-repeat;
   
}
div#frontpreloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("https://wpamelia.com/wp-content/uploads/2018/11/ezgif-2-6d0b072c3d3f.gif") 50% 50% no-repeat;
    
}


</style>';?>
<?php elseif(get_theme_mod( 'saifi_preloader_style','option 1' )=='option 5'):?>
<?php echo '<style> 
div#preloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("https://createwebsite.net/wp-content/uploads/2015/09/KeyFrames.gif") 50% 50% no-repeat;
        
}
div#frontpreloader{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background:url("https://createwebsite.net/wp-content/uploads/2015/09/KeyFrames.gif") 50% 50% no-repeat;
    
}

</style>';?>

<?php endif; ?>