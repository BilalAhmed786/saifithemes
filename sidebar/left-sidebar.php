<?php
if(is_active_sidebar('left_sidebar')){
dynamic_sidebar('left_sidebar');
}
?>

<Style>
    /*sidebars controllers*/ 

    #leftsbp.col-sm-3 h1,
#leftsbp.col-sm-3 h2,
#leftsbp.col-sm-3 h3,
#leftsbp.col-sm-3 h4,
#leftsbp.col-sm-3 h5,
#leftsbp.col-sm-3 h6,
#rightsbp.col-sm-3 h1,
#rightsbp.col-sm-3 h2,
#rightsbp.col-sm-3 h3,
#rightsbp.col-sm-3 h4,
#rightsbp.col-sm-3 h5,
#rightsbp.col-sm-3 h6
{
color:<?php echo get_theme_mod('sidebar_heading_font_color','black') ?>;
font-size:<?php echo get_theme_mod('saifi_sidebar_heading_size','22px') ?>;   


}


#leftsbp.col-sm-3 li,
#leftsbp.col-sm-3 a,
#rightsbp.col-sm-3 li,
#rightsbp.col-sm-3 a,
#leftsbp.col-sm-3 p,
#rightsbp.col-sm-3 p
{
color:<?php echo get_theme_mod('sidebar_font_color','black') ?>;
font-size:<?php echo get_theme_mod('saifi_sidebar_text_size','15px') ?>;

}

#rightsbp.col-sm-3{
border:<?php echo get_theme_mod('sidebar_rightside_border','') ?>;
background-color:<?php echo get_theme_mod('sidebar_background_color','white') ?>;
Width:<?php echo get_theme_mod('sidebar_rightside_width','13rem') ?>;

}
#leftsbp.col-sm-3{
border:<?php echo get_theme_mod('sidebar_leftside_border','') ?>;
background-color:<?php echo get_theme_mod('sidebar_background_color','white') ?>;
Width:<?php echo get_theme_mod('sidebar_leftside_width','13rem') ?>;
}
    
</style>
<?php if( get_theme_mod( 'sidebar_Text_alignment','option 1' )=='option 1'):?>
<?php echo '<style> #leftsbp.col-sm-3 li,
#leftsbp.col-sm-3 a,
#rightsbp.col-sm-3 li,
#rightsbp.col-sm-3 a {text-align:left }</style>';?>    
<?php elseif(get_theme_mod( 'sidebar_Text_alignment','option 1' )=='option 2'):?>
<?php echo '<style> #thechamp.pagetitle {text-align:center}</style>';?>

<?php endif ?>


<?php if( get_theme_mod( 'sidebar_Heading_alignment','option 1' )=='option 1'):?>
<?php echo '<style>
    #leftsbp.col-sm-3 h1,
    #leftsbp.col-sm-3 h2,
    #leftsbp.col-sm-3 h3,
    #leftsbp.col-sm-3 h4,
    #leftsbp.col-sm-3 h5,
    #leftsbp.col-sm-3 h6,
    #rightsbp.col-sm-3 h1,
    #rightsbp.col-sm-3 h2,
    #rightsbp.col-sm-3 h3,
    #rightsbp.col-sm-3 h4,
    #rightsbp.col-sm-3 h5,
    #rightsbp.col-sm-3 h6 
 {text-align:left }</style>';?>    
<?php elseif(get_theme_mod( 'sidebar_Heading_alignment','option 1' )=='option 2'):?>
<?php echo '<style> 
    #leftsbp.col-sm-3 h1,
    #leftsbp.col-sm-3 h2,
    #leftsbp.col-sm-3 h3,
    #leftsbp.col-sm-3 h4,
    #leftsbp.col-sm-3 h5,
    #leftsbp.col-sm-3 h6,
    #rightsbp.col-sm-3 h1,
    #rightsbp.col-sm-3 h2,
    #rightsbp.col-sm-3 h3,
    #rightsbp.col-sm-3 h4,
    #rightsbp.col-sm-3 h5,
    #rightsbp.col-sm-3 h6 {text-align:center }</style>';?>

<?php endif ?>



<?php if( get_theme_mod( 'pages_sidebars_toggle','option 4' )=='option 1'):?>
<?php echo '<style> #leftsbp.col-sm-3
{Display:none }</style>';?>    
<?php elseif(get_theme_mod( 'pages_sidebars_toggle','option 4' )=='option 2'):?>
<?php echo '<style> #rightsbp.col-sm-3 {Display:none}</style>';?>
<?php elseif(get_theme_mod( 'pages_sidebars_toggle','option 4' )=='option 4'):?>
<?php echo '<style> #rightsbp.col-sm-3,
 #leftsbp.col-sm-3
 {Display:none} </style>';?>

<?php endif ?>