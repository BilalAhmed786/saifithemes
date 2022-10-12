<style>
#footer1.col-sm h1,
#footer1.col-sm h2,
#footer1.col-sm h3,
#footer1.col-sm h4,
#footer1.col-sm h5,
#footer1.col-sm h6,

#footer2.col-sm h1,
#footer2.col-sm h2,
#footer2.col-sm h3,
#footer2.col-sm h4,
#footer2.col-sm h5,
#footer2.col-sm h6,

#footer3.col-sm h1,
#footer3.col-sm h2,
#footer3.col-sm h3,
#footer3.col-sm h4,
#footer3.col-sm h5,
#footer3.col-sm h6,

#footer4.col-sm h1,
#footer4.col-sm h2,
#footer4.col-sm h3,
#footer4.col-sm h4,
#footer4.col-sm h5,
#footer4.col-sm h6{

color:<?php echo get_theme_mod('footer_heading_font_color','black') ?>;
font-size:<?php echo get_theme_mod('saifi_footer_heading_size','22px') ?>;

}

#footer1.col-sm li,
#footer1.col-sm a,
#footer2.col-sm li,
#footer2.col-sm a,
#footer3.col-sm li,
#footer3.col-sm a,
#footer4.col-sm li,
#footer4.col-sm a,
#footer1.col-sm p,
#footer2.col-sm p,
#footer3.col-sm p,
#footer4.col-sm p
{

color:<?php echo get_theme_mod('footertext_font_color','black') ?>;
font-size:<?php echo get_theme_mod('saifi_footer_text_size','15px') ?>;

}

#footercontain{

background-color:<?php echo get_theme_mod('footer_background_color','white') ?>;
border:<?php echo get_theme_mod('saifi_footer_border','') ?>;

}
/*footer copyright area*/

div#copyrightarea.copyrite{
    
color:<?php echo get_theme_mod('copyright_font_color','black') ?>;
font-size:<?php echo get_theme_mod('footer_copyright_font_size','22px') ?>;
background-color:<?php echo get_theme_mod('copyright_background_color','white') ?>;
padding:<?php echo get_theme_mod('footer_copyright_padding','') ?>;

}


/* scroll to top area */

.button-top {

  font-size:<?php echo get_theme_mod('saifi_scroll_font_size','22px') ?>;
  color:<?php echo get_theme_mod('scroll_top_font_color','black') ?>;
  background-color:<?php echo get_theme_mod('scroll_top_background_color','white') ?>;

}



</style>


<?php if( get_theme_mod( 'footer_Heading_alignment','option 1' )=='option 1'):?>
<?php echo '<style>
#footer1.col-sm h1,
#footer1.col-sm h2,
#footer1.col-sm h3,
#footer1.col-sm h4,
#footer1.col-sm h5,
#footer1.col-sm h6,

#footer2.col-sm h1,
#footer2.col-sm h2,
#footer2.col-sm h3,
#footer2.col-sm h4,
#footer2.col-sm h5,
#footer2.col-sm h6,

#footer3.col-sm h1,
#footer3.col-sm h2,
#footer3.col-sm h3,
#footer3.col-sm h4,
#footer3.col-sm h5,
#footer3.col-sm h6,

#footer4.col-sm h1,
#footer4.col-sm h2,
#footer4.col-sm h3,
#footer4.col-sm h4,
#footer4.col-sm h5,
#footer4.col-sm h6
{text-align:left }</style>';?>    
<?php elseif(get_theme_mod( 'footer_Heading_alignment','option 1' )=='option 2'):?>
<?php echo '<style> 
#footer1.col-sm h1,
#footer1.col-sm h2,
#footer1.col-sm h3,
#footer1.col-sm h4,
#footer1.col-sm h5,
#footer1.col-sm h6,

#footer2.col-sm h1,
#footer2.col-sm h2,
#footer2.col-sm h3,
#footer2.col-sm h4,
#footer2.col-sm h5,
#footer2.col-sm h6,

#footer3.col-sm h1,
#footer3.col-sm h2,
#footer3.col-sm h3,
#footer3.col-sm h4,
#footer3.col-sm h5,
#footer3.col-sm h6,

#footer4.col-sm h1,
#footer4.col-sm h2,
#footer4.col-sm h3,
#footer4.col-sm h4,
#footer4.col-sm h5,
#footer4.col-sm h6

{text-align:center}</style>';?>

<?php endif ?>



<?php if( get_theme_mod( 'footer_Text_alignment','option 1' )=='option 1'):?>
<?php echo '<style> 
#footer1.col-sm li,
#footer1.col-sm a,
#footer2.col-sm li,
#footer2.col-sm a,
#footer3.col-sm li,
#footer3.col-sm a,
#footer4.col-sm li,
#footer4.col-sm a,
#footer1.col-sm p,
#footer2.col-sm p,
#footer3.col-sm p,
#footer4.col-sm p
{text-align:left }</style>';?>    
<?php elseif(get_theme_mod( 'footer_Text_alignment','option 1' )=='option 2'):?>
<?php echo '<style> 
#footer1.col-sm li,
#footer1.col-sm a,
#footer2.col-sm li,
#footer2.col-sm a,
#footer3.col-sm li,
#footer3.col-sm a,
#footer4.col-sm li,
#footer4.col-sm a,
#footer1.col-sm p,
#footer2.col-sm p,
#footer3.col-sm p,
#footer4.col-sm p

{text-align:center}</style>';?>

<?php endif ?>



<?php if( get_theme_mod( 'footers_hide_show','option 4' )=='option 1'):?>
<?php echo '<style> 
#footer2.col-sm,
#footer3.col-sm,
#footer4.col-sm
{Display:none }</style>';?>    
<?php elseif(get_theme_mod( 'footers_hide_show','option 4' )=='option 2'):?>
<?php echo '<style> 
#footer3.col-sm,
#footer4.col-sm
{Display:none}</style>';?>
<?php elseif(get_theme_mod( 'footers_hide_show','option 4' )=='option 3'):?>
<?php echo '<style> #footer4.col-sm {Display:none} </style>';?>

<?php endif ?>




<?php
// copyright toggle

if( get_theme_mod( 'footer_copyright_toggle','Show' )=='Hide'):?>
<?php echo '<style>div#copyrightarea.copyrite
{Display:none }</style>';?>    

<?php endif ?>



<?php 

//copyright alignment
if( get_theme_mod( 'copright_footer_alignment','option 2' )=='option 1'):?>
<?php echo '<style> div#copyrightarea.copyrite
{text-align:left }</style>';?>    
<?php elseif(get_theme_mod( 'copright_footer_alignment','option 2' )=='option 2'):?>
<?php echo '<style> div#copyrightarea.copyrite
{text-align:center }</style>';?>
<?php elseif(get_theme_mod( 'copright_footer_alignment','option 2' )=='option 3'):?>
<?php echo '<style> div#copyrightarea.copyrite
{text-align:right }</style>';?>

<?php endif ?>




<?php 
//copyright text-style


if( get_theme_mod( 'Copyright_text_style','option 1' )=='option 1'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:Gabriola }</style>';?>    
<?php elseif(get_theme_mod( 'Copyright_text_style','option 1' )=='option 2'):?>
<?php echo '<style> #thechampdiv#copyrightarea.copyrite  {font-family:option 1 }</style>';?>
<?php  elseif(get_theme_mod( 'Copyright_text_style','option 1' )=='option 3'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:Brush Script MT }</style>' ;?>
<?php elseif( get_theme_mod( 'Copyright_text_style','option 1' )=='option 4'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:Comic Sans MS }</style>';?>    
<?php elseif(get_theme_mod( 'Copyright_text_style','option 1' )=='option 5'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:Courier }</style>';?>
<?php  elseif(get_theme_mod( 'Copyright_text_style','option 1' )=='option 6'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:Ink Free }</style>' ;?>
<?php elseif( get_theme_mod( 'Copyright_text_style','option 1' )=='option 7'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:Lucida Handwriting }</style>';?>    
<?php elseif(get_theme_mod( 'Copyright_text_style','option 1' )=='option 8'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:Verdana }</style>';?>
<?php  elseif(get_theme_mod( 'Copyright_text_style','option 1' )=='option 9'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:MV Boli }</style>' ;?>
<?php elseif( get_theme_mod( 'Copyright_text_style','option 1' )=='option 10'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-famliy:papyrus }</style>';?>    
<?php elseif(get_theme_mod( 'Copyright_text_style','option 1' )=='option 11'):?>
<?php echo '<style> div#copyrightarea.copyrite {font-family:Segoe Script }</style>';?>

<?php endif ?>




<?php
/* scroll to top alignment*/
if( get_theme_mod( 'scroll_to_top_alignment','option 2' )=='option 1'):?>
<?php echo '<style> 
.button-top {
        display:block;
        float:left;
        bottom: 20px;
        left: 20px;
        z-index: 100;
        width: 40px;
        height: 40px;
        border: 0;
        border-radius: 2px;
        box-shadow: none;
        line-height: 20px;
        text-align: center;
        cursor: pointer;
      }
      .button-top {
    
        pointer-events: none;
        opacity: 0;
        transition: opacity .18s ease;
      }
      
      .button-top-visible {
        opacity: 1;
        pointer-events: auto;
      }
 

</style>';?>    
<?php elseif(get_theme_mod( 'scroll_to_top_alignment','option 2' )=='option 2'):?>
<?php echo '<style> 

.button-top {
     dispaly:block;
    float:right;
    bottom: 20px;
    right: 20px;
    z-index: 100;
    width: 40px;
    height: 40px;
    border: 0;
    border-radius: 2px;
    box-shadow: none;
    line-height: 20px;
    text-align: center;
    cursor: pointer;
  
}

.button-top {
    
    pointer-events: none;
    opacity: 0;
    transition: opacity .18s ease;
  }
  
  .button-top-visible {
    opacity: 1;
    pointer-events: auto;
  }



</style>';?>

<?php endif ?>



<?php 
//copyright Enable/Disable

if( get_theme_mod( 'saifi_scroll_toggle','hide' )=='Hide'):?>
<?php echo '<style> .button-top{display:none;}</style>';?>    
<?php endif ?>