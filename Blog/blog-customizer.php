<style>
#customizetitle.blogtitle
	{
color:<?php echo get_theme_mod('Blog_category_fontcolor','black') ?>;
font-size:<?php echo get_theme_mod('Blog_category_fontsize','15px') ?>;
background-color:<?php echo get_theme_mod('Blog_category_bgcolor','white') ?>;
}

.blogbreadcrumb  

	{

color:<?php echo get_theme_mod('Blog_breadcrumb_font_color','black') ?>;
font-size:<?php echo get_theme_mod('Bolog_breadcrumb_font_size','15px') ?>;
background-color:<?php echo get_theme_mod('Blog_breadcrumb_bg_color','white') ?>;

}
.blogbreadcrumb a
	{
        color:<?php echo get_theme_mod('Blog_breadcrumb_font_color','black') ?>;
    }
    .fa-home{
    color: <?php echo get_theme_mod('Blog_breadcrumb_font_color','black'); ?>;
}

.btn.btn-primary{

color:<?php echo get_theme_mod('blogbutton_text_color','black') ?>;
font-size:<?php echo get_theme_mod('Blog_button_font_size','15px') ?>;
background-color:<?php echo get_theme_mod('blogbutton_background_color','blue') ?>;
border:<?php echo get_theme_mod('blogbutton_border','1 px solid black') ?>;
border-radius:<?php echo get_theme_mod('blogbutton_border_radius','black') ?>;

}

.btn.btn-primary:hover{
    color:<?php echo get_theme_mod('blogbutton_text_hover','red') ?>;
    background-color:<?php echo get_theme_mod('blogbutton_background_hover','yellow') ?>;
}

/* blog sidebars settings*/ 
#leftsbB.col-sm-3 h1,
#leftsbB.col-sm-3 h2,
#leftsbB.col-sm-3 h3,
#leftsbB.col-sm-3 h4,
#leftsbB.col-sm-3 h5,
#leftsbB.col-sm-3 h6,
#rightsbB.col-sm-3 h1,
#rightsbB.col-sm-3 h2,
#rightsbB.col-sm-3 h3,
#rightsbB.col-sm-3 h4,
#rightsbB.col-sm-3 h5,
#rightsbB.col-sm-3 h6
{

color:<?php echo get_theme_mod('Blogsidebar_heading_font_color','black') ?>;
font-size:<?php echo get_theme_mod('Blog_sidebar_heading_size','22px') ?>;   


}


#leftsbB.col-sm-3 li,
#leftsbB.col-sm-3 a,
#rightsbB.col-sm-3 li,
#rightsbB.col-sm-3 a,
#rightsbB.col-sm-3 p,
#leftsbB.col-sm-3 p
{
color:<?php echo get_theme_mod('Blogsidebar_font_color','black') ?>;
font-size:<?php echo get_theme_mod('Blog_sidebar_text_size','15px') ?>;

}

#rightsbB.col-sm-3{
border:<?php echo get_theme_mod('Blogsidebar_rightside_border','') ?>;
background-color:<?php echo get_theme_mod('Blogsidebar_background_color','white') ?>;
Width:<?php echo get_theme_mod('Blogsidebar_right_width','13rem') ?>;

}
#leftsbB.col-sm-3{
border:<?php echo get_theme_mod('Blogsidebar_leftside_border','') ?>;
background-color:<?php echo get_theme_mod('Blogsidebar_background_color','white') ?>;
Width:<?php echo get_theme_mod('Blogsidebar_left_width','13rem') ?>;

}
.col-sm-3{

    width:<?php echo get_theme_mod('Blogsidebar_width-adjust','12rem') ?>; 
}


/* comments settings*/ 

#comments,
.comment-reply-title{
color:<?php echo get_theme_mod('comments_title_color','black') ?>;
font-size:<?php echo get_theme_mod('comments_title_font','15px') ?>;

}

ol.commentlist a,
ol.commentlist p,
ol.commentlist li
{
    color:<?php echo get_theme_mod('Comments_color','black') ?>;
    font-size:<?php echo get_theme_mod('Comments_font','15px') ?>;

}


.comment-form {

    color:<?php echo get_theme_mod('Form_lable_color','black') ?>;
    font-size:<?php echo get_theme_mod('Form_lable_font','15px') ?>;

}

textarea#comment {
    color: <?php echo get_theme_mod('textarea_input_color','black') ?>;
    background-color:<?php echo get_theme_mod('textarea_color_ajst','white') ?>;
}

input#author,
input#email,
input#url{
    color: <?php echo get_theme_mod('form_input_color','black') ?>;
    background-color:<?php echo get_theme_mod('input_bg_color','white') ?>;

}
.customcomment{
    background-color:<?php echo get_theme_mod('Form_bg_color','white') ?>;

}
.form-submit input{
    color: <?php echo get_theme_mod('button_text_color','black') ?>;
    font-size: <?php echo get_theme_mod('button_text_size','black') ?>;
    background-color:<?php echo get_theme_mod('button_bg_color','white') ?>;
    border:<?php echo get_theme_mod('comment_button_border','1px solid black') ?>;
    border-radius:<?php echo get_theme_mod('comment_button_border_radius','5px') ?>;
    padding:<?php echo get_theme_mod('comment_button_padding','1px 1px 1px 1px') ?>;

}
.form-submit input:hover{
    color: <?php echo get_theme_mod('button_text_hovercolor','black') ?>;
    background-color:<?php echo get_theme_mod('button_bg_hover','white') ?>;

}

</style>

<?php 
//Blog category toggle

if( get_theme_mod( 'Blog_category_toggle','Show' )=='Hide') :?>
    <?php echo '<style> 
#customizetitle.blogtitle{display:none;}
</style>';?> 
<?php endif ?>



<?php
//Blog category title alignment
if( get_theme_mod( 'Blog_category_alignment','option 2' )=='option 1'):?>
<?php echo '<style> 
#customizetitle.blogtitle{text-align:left;}
</style>';?>    
<?php elseif(get_theme_mod( 'Blog_category_alignment','option 2' )=='option 2'):?>
<?php echo '<style>  #customizetitle.blogtitle{text-align:center; }</style>';?>
<?php endif ?>


<?php 
//Blog category title style

if( get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 1'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:Gabriola }</style>';?>    
<?php elseif(get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 2'):?>
<?php echo '<style>#customizetitle.blogtitle  {font-family:option 1 }</style>';?>
<?php  elseif(get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 3'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:Brush Script MT }</style>' ;?>
<?php elseif( get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 4'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:Comic Sans MS }</style>';?>    
<?php elseif(get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 5'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:Courier }</style>';?>
<?php  elseif(get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 6'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:Ink Free }</style>' ;?>
<?php elseif( get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 7'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:Lucida Handwriting }</style>';?>    
<?php elseif(get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 8'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:Verdana }</style>';?>
<?php  elseif(get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 9'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:MV Boli }</style>' ;?>
<?php elseif( get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 10'):?>
<?php echo '<style> #customizetitle.blogtitle {font-famliy:papyrus }</style>';?>    
<?php elseif(get_theme_mod( 'Blog_category_fontstyle','option 1' )=='option 11'):?>
<?php echo '<style> #customizetitle.blogtitle {font-family:Segoe Script }</style>';?>

<?php endif ?>


<?php if( get_theme_mod( 'Blog_sidebars_hide_show','Show' )=='Hide') :?>
    <?php echo '<style> 
#customizetitle.blogtitle{display:none;}
</style>';?> 
<?php endif ?>


<?php 
//Blog breadcrum toggle

if( get_theme_mod( 'Blog_breadcrumb_toggle','Show' )=='Hide') :?>
    <?php echo '<style> 
.blogbreadcrumb{display:none;}
</style>';?>
<?php endif ?>
<?php
//Blog breadcrumb alignment
if( get_theme_mod( 'Blog_Breadcrumb_alignment','option 2' )=='option 1'):?>
<?php echo '<style> 
div#bc.blogbreadcrumb{text-align:center;}
</style>';?>    
<?php elseif(get_theme_mod( 'Blog_Breadcrumb_alignment','option 2' )=='option 2'):?>
<?php echo '<style> div#bc.blogbreadcrumb {text-align:left; }</style>';?>
<?php endif ?>






<?php

//Blog sidebars settings

if( get_theme_mod( 'Blogsidebar_Text_alignment','option 1' )=='option 1'):?>
<?php echo '<style> #leftsbB.col-sm-3 li,
#leftsbB.col-sm-3 a,
#rightsbB.col-sm-3 li,
#rightsbB.col-sm-3 a 
{text-align:left }</style>';?>    
<?php elseif(get_theme_mod( 'Blogsidebar_Text_alignment','option 1' )=='option 2'):?>
<?php echo '<style> 
#leftsbB.col-sm-3 a,
#rightsbB.col-sm-3 li,
#rightsbB.col-sm-3 a
{text-align:center}</style>';?>

<?php endif ?>


<?php if( get_theme_mod( 'Blogsidebar_Heading_alignment','option 1' )=='option 1'):?>
<?php echo '<style>
    #leftsbB.col-sm-3 h1,
    #leftsbB.col-sm-3 h2,
    #leftsbB.col-sm-3 h3,
    #leftsbB.col-sm-3 h4,
    #leftsbB.col-sm-3 h5,
    #leftsbB.col-sm-3 h6,
    #rightsbB.col-sm-3 h1,
   #rightsbB.col-sm-3 h2,
   #rightsbB.col-sm-3 h3,
   #rightsbB.col-sm-3 h4,
   #rightsbB.col-sm-3 h5,
   #rightsbB.col-sm-3 h6 
 {text-align:left }</style>';?>    
<?php elseif(get_theme_mod( 'Blogsidebar_Heading_alignment','option 1' )=='option 2'):?>
<?php echo '<style> 
    #leftsbB.col-sm-3 h1,
    #leftsbB.col-sm-3 h2,
    #leftsbB.col-sm-3 h3,
    #leftsbB.col-sm-3 h4,
    #leftsbB.col-sm-3 h5,
    #leftsbB.col-sm-3 h6,
   #rightsbB.col-sm-3 h1,
   #rightsbB.col-sm-3 h2,
   #rightsbB.col-sm-3 h3,
   #rightsbB.col-sm-3 h4,
   #rightsbB.col-sm-3 h5,
   #rightsbB.col-sm-3 h6 {text-align:center }</style>';?>

<?php endif ?>


<?php if( get_theme_mod( 'Blog_sidebars_toggle','option 4' )=='option 1'):?>
<?php echo '<style> #leftsbB.col-sm-3
{Display:none }</style>';?>    
<?php elseif(get_theme_mod( 'Blog_sidebars_toggle','option 4' )=='option 2'):?>
<?php echo '<style> #rightsbB.col-sm-3 {Display:none}</style>';?>
<?php elseif(get_theme_mod( 'Blog_sidebars_toggle','option 4' )=='option 4'):?>
<?php echo '<style> #rightsbB.col-sm-3,
 #leftsbB.col-sm-3
 {Display:none} </style>';?>

<?php endif ?>
 

<?php
//comments alignment
if( get_theme_mod( 'Comments_alignment','option 2' )=='option 1'):?>
<?php echo '<style> 
ol.commentlist 
{
display:inline-block;
margin: 0 auto;
color:rgb(198, 222, 12);
font-size:18px;
margin-top: 3rem;
margin-left:30px;
}

#comments{
	text-align:left
}


</style>';?>    
<?php elseif(get_theme_mod( 'Comments_alignment','option 2' )=='option 2'):?>
<?php echo '<style> ol.commentlist 
{
display:table;
margin: 0 auto;
color:rgb(198, 222, 12);
font-size:18px;
margin-top: 3rem;
}
#comments{
	text-align:center
}

</style>';?>
<?php endif ?>


<?php 

//comments area toggle options
if( get_theme_mod( 'Comments_toggle','option 4' )=='option 1'):?>
    <?php echo '<style> 
.comment-form{
	display:none}
.comment-reply-title{
	
        display:none
    }
    
</style>';?>
    <?php elseif(get_theme_mod( 'Comments_toggle','option 4' )=='option 2'):?>
    <?php echo '<style> 
    ol.commentlist 
    {Display:none}
    h3#comments{
        display:none
    }
    
    </style>';?>
    <?php elseif(get_theme_mod( 'Comments_toggle','option 4' )=='option 3'):?>
    <?php echo '<style> .customcomment{Display:none} </style>';?>
    <?php elseif(get_theme_mod( 'Comments_toggle','option 4' )=='option 4'):?>
    <?php echo '<style> </style>';?>
    
    <?php endif ?>