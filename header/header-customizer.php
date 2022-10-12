<style>
    /*  header settings*/
    .customnav
     {  
background-color: <?php echo get_theme_mod('font_color_before','green'); ?>;

}

{  
background-color: <?php echo get_theme_mod('font_color_before','green'); ?>;

}

.fixed-top{
background-color: <?php echo get_theme_mod('font_color_after','yellow'); ?>; 
}
/*Ttile settings*/
.logosize {

width:<?php echo get_theme_mod('title_logo_width','6rem'); ?>; 
}
@media(max-width:760px){
    .logosize {
    width:<?php echo get_theme_mod('title_logo_width','6rem'); ?>; 
}
}
.textlogo h1 {

font-size:<?php echo get_theme_mod('title_width','40px'); ?>; 
 }

 .textlogo a{
    color:<?php echo get_theme_mod('title_font_color','black'); ?>;

 }

.textlogo p {

font-size:<?php echo get_theme_mod('site_description_width','15px'); ?>;
color:<?php echo get_theme_mod('description_color','black'); ?>;  

}

/*searchbar settings*/

.fa.fa-search {
    color:<?php echo get_theme_mod('search_icon_color','red'); ?>; 
}

/*navemenu desktop and mobile view settings*/

#headercontain.customnav
{
    height: <?php echo get_theme_mod('custom_header_width','9rem'); ?>;
    border-bottom: <?php echo get_theme_mod('custom_header_border','1px solid black'); ?>;
}

.navbar-nav a{
   
   font-size:<?php echo get_theme_mod('Nav_font_size','25px'); ?>;
  

}

@media(max-width:760px){
.navbar-nav a{
   
   font-size:<?php echo get_theme_mod('mobilemenu_font_size','25px'); ?>;
padding-bottom:<?php echo get_theme_mod('mobilemenu_padding','7px'); ?>;

  }
}
.nav-link span,
.nav-link:after{
    color:<?php echo get_theme_mod('Nav_font_color','black'); ?>;
}
.nav-link span{

    padding-left:<?php echo get_theme_mod('Navmenu_padding','10px'); ?>;
}
@media(max-width:760px){
.nav-link span{

padding-left:<?php echo get_theme_mod('mobilemenu_padding','10px'); ?>;
color:<?php echo get_theme_mod('mobilemenu_font_color','black'); ?>;

}
}

.nav-link span:hover{
    color:<?php echo get_theme_mod('Nav_font_hover','orange'); ?>;
   

}

@media(max-width:760px){
.nav-link span:hover{
color:<?php echo get_theme_mod('Mobilemenu_font_hover','black'); ?>
}
}
.navbar-nav a:hover{
    
    background-color:<?php echo get_theme_mod('Nav_font_bg_hover','white'); ?>;
   
}
@media(max-width:760px){
.navbar-nav a:hover{
    background-color:<?php echo get_theme_mod('mobilemenu_font_bg_hover','white'); ?>
}
}
.navbar-nav {
    background-color:<?php echo get_theme_mod('Nav_bg_color','gray'); ?>;
    

}
ul.dropdown-menu{
    background-color:<?php echo get_theme_mod('Nav_dropdown_bg','gray'); ?>;
    
}
@media(max-width:760px){
ul.dropdown-menu{
background-color:<?php echo get_theme_mod('Mobiledropdown_bg_color','gray'); ?>;
}
}
@media(max-width:760px){
    ul.nav.navbar-nav
{
    background-color:<?php echo get_theme_mod('Mobilemenu_bg_color','gray'); ?>;
    margin-top: <?php echo get_theme_mod('mobileheader_menu_width','5px'); ?>;
}
}



</style>

<?php 
/* haeader style settings */
if( get_theme_mod( 'custom_header_style','option 1' )=='option 1'):?>
<?php echo '<style> 

.customnav{
    z-index:9999
}
.fixed-top{

    z-index:9999
}

</style>';?>	

<?php 
elseif( get_theme_mod( 'custom_header_style','option 1' )=='option 2'):?>
<?php echo '<style> 
.fixed-top{

    display:none;
    
    }

    .customnav{
        z-index:9999
    }
    

</style>';?>

<?php 
elseif( get_theme_mod( 'custom_header_style','option 1' )=='option 3'):?>
<?php echo '<style> 

.customnav{
	
position:fixed;
width:100%;
z-index:9999

  
}

.fixed-top{


margin-top:0px ;
z-index:9999

}
#contain.container{
    padding-top:200px
    }



</style>';?>

<?php endif ;?>




<?php 
/* Mobile header layout  */
if( get_theme_mod( 'Mobile_header_layout','option 1' )=='option 1'):?>
<?php echo '<style>

@media(max-width:760px){
        .logosize {
        float: none;
        margin-top:40px;
      position: absolute;
    top: 10%;
    left: 48%;
    transform: translate(-50%, -50%);
        
            
        }                                                                                   
     
    .navbar-toggler{
          float: none;
     margin-top:8rem;
     outline: none;
     box-shadow: none;
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -50%);
         }
     
      .collapse.show{
    margin-top:11rem;
    margin-left: -5px;
    z-index: 9999;
    
            
        }
        div.navbar-collapse {
            padding-left: 0%;
        }
 
    
    .customnav {
    height: 12rem !important;
    z-index:9999
    }
    
    .textlogo h1{
        float: none;
        margin-top:2rem;
        outline: none;
        box-shadow: none;
       position: absolute;
       top: 10%;
       left: 50%;
       transform: translate(-50%, -50%);


    }
    .textlogo p {
        float: none;
        margin-top:90px;
        outline: none;
        box-shadow: none;
       position: absolute;
       top: 10%;
       left: 50%;
       transform: translate(-50%, -50%);



    }

    
    }

</style>';?>

<?php 
elseif( get_theme_mod( 'Mobile_header_layout','option 1' )=='option 2'):?>
<?php echo '<style> 
@media(max-width:760px){
    .logosize {
        float: right ;
        display: block;
        position: absolute;
        left: 0px;
        top:10px;
        margin-bottom: 5rem;
             

          }
          .navbar-toggler{
              float: right;
              display: block;
              position: absolute;
              right: 10px;
              top: 50px;

             }

          div.navbar-collapse {
            padding-left: 0%;
        }

       .customnav {
        height: 8rem;
        }
        .collapse.show{
            margin-top:7.2rem;
            z-index: 9999;
            
                    
                }
                .textlogo h1{
                    float: right ;
                    display: block;
                    position: absolute;
                    left: 20px;
                    top: 1rem;
                    
                   }
                .textlogo p {
                    float: right ;
                    display: block;
                    position: absolute;
                    left: 15px;
                    top: 5rem;
                    
                    
            
            
            
                }
            
            
            
            }



</style>';?>

<?php 
elseif( get_theme_mod( 'Mobile_header_layout','option 1' )=='option 3'):?>
<?php echo '<style> 
@media(max-width:760px){

    @media(max-width:760px){
        .logosize {
            float: right ;
            display: block;
            position: absolute;
            right: 10px;
            top: 10px;
            margin-bottom: 5rem;
            
        }
     
    .navbar-toggler{
    
        float: right ;
        display: block;
        position: absolute;
        left: 10px;
        top: 50px;
        width:3rem;
        margin-bottom: 5rem;
          
            
        }
        div.navbar-collapse {
            padding-left: 0%;
        }
     
      .collapse.show{
    margin-top:7rem;
    z-index: 9999;
    
            
        }
     
    .customnav {
        width: 100%;
        height: 8rem;
        }
        .navbar-collapse {
            padding-left: 0%;
        }


        .textlogo h1{
       
            float: right ;
            display: block;
            position: absolute;
            right: 20px;
            top: 1rem;
            
           
    
    
        }
        .textlogo p {
            float: right ;
            display: block;
            position: absolute;
            right: 15px;
            top: 5rem;
            
            
    
    
    
        }
    
    }

</style>';?>

<?php endif ;?>



<?php 
/* Title text style */


if( get_theme_mod( 'title_text_style','option 1' )=='option 1'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:Gabriola }</style>';?>    
<?php elseif(get_theme_mod( 'title_text_style','option 1' )=='option 2'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:times new roman }</style>';?>
<?php  elseif(get_theme_mod( 'title_text_style','option 1' )=='option 3'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:Brush Script MT }</style>' ;?>
<?php elseif( get_theme_mod( 'title_text_style','option 1 ' )=='option 4'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:Comic Sans MS }</style>';?>    
<?php elseif(get_theme_mod( 'title_text_style','option 1 ' )=='option 5'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:Courier }</style>';?>
<?php  elseif(get_theme_mod( 'title_text_style','option 1' )=='option 6'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:Ink Free }</style>' ;?>
<?php elseif( get_theme_mod( 'title_text_style','option 1' )=='option 7'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:Lucida Handwriting }</style>';?>    
<?php elseif(get_theme_mod( 'title_text_style','option 1' )=='option 8'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:Verdana }</style>';?>
<?php  elseif(get_theme_mod( 'title_text_style','option 1' )=='option 9'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:MV Boli }</style>' ;?>
<?php elseif( get_theme_mod( 'title_text_style','option 1' )=='option 10'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-famliy:papyrus }</style>';?>    
<?php elseif(get_theme_mod( 'title_text_style','option 1' )=='option 11'):?>
<?php echo '<style> .textlogo h1,.textlogo p{font-family:Segoe Script }</style>';?>

<?php endif ?>



<?php 
/* navmenu text style */
if( get_theme_mod( 'navmenu_text_style','option 1' )=='option 1'):?>
<?php echo '<style> .navbar-nav a{font-family:Gabriola }</style>';?>    
<?php elseif(get_theme_mod( 'navmenu_text_style','option 1' )=='option 2'):?>
<?php echo '<style> .navbar-nav a{font-family:Times new roman }</style>';?>
<?php  elseif(get_theme_mod( 'navmenu_text_style','option 1' )=='option 3'):?>
<?php echo '<style> .navbar-nav a{font-family:Brush Script MT }</style>' ;?>
<?php elseif( get_theme_mod( 'navmenu_text_style','option 1 ' )=='option 4'):?>
<?php echo '<style> .navbar-nav a{font-family:Comic Sans MS }</style>';?>    
<?php elseif(get_theme_mod( 'navmenu_text_style','option 1 ' )=='option 5'):?>
<?php echo '<style> .navbar-nav a{font-family:Courier }</style>';?>
<?php  elseif(get_theme_mod( 'navmenu_text_style','option 1' )=='option 6'):?>
<?php echo '<style> .navbar-nav a{font-family:Ink Free }</style>' ;?>
<?php elseif( get_theme_mod( 'navmenu_text_style','option 1' )=='option 7'):?>
<?php echo '<style> .navbar-nav a{font-family:Lucida Handwriting }</style>';?>    
<?php elseif(get_theme_mod( 'navmenu_text_style','option 1' )=='option 8'):?>
<?php echo '<style> .navbar-nav a{font-family:Verdana }</style>';?>
<?php  elseif(get_theme_mod( 'navmenu_text_style','option 1' )=='option 9'):?>
<?php echo '<style> .navbar-nav a{font-family:MV Boli }</style>' ;?>
<?php elseif( get_theme_mod( 'navmenu_text_style','option 1' )=='option 10'):?>
<?php echo '<style> .navbar-nav a{font-famliy:papyrus }</style>';?>    
<?php elseif(get_theme_mod( 'navmenu_text_style','option 1' )=='option 11'):?>
<?php echo '<style> .navbar-nav a{font-family:Segoe Script }</style>';?>

<?php endif ?>


<?php 
/* navmenu text style */

if( get_theme_mod( 'Nav_text_align','option 2' )=='option 2'):?>
<?php echo '<style> .navbar-collapse{padding-left:20%}</style>';?>    
<?php elseif(get_theme_mod( 'Nav_text_align','option 2' )=='option 1'):?>
<?php echo '<style> .navbar-collapse{ padding-left:4%}</style>';?>

<?php endif ?>



<?php 
/* mobilemenu text style */
if( get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 1'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:Gabriola }}</style>';?>    
<?php elseif(get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 2'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:Times new roman }}</style>';?>
<?php  elseif(get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 3'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:Brush Script MT }}</style>' ;?>
<?php elseif( get_theme_mod( 'mobilemenu_text_style','option 1 ' )=='option 4'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:Comic Sans MS }}</style>';?>    
<?php elseif(get_theme_mod( 'mobilemenu_text_style','option 1 ' )=='option 5'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:Courier }}</style>';?>
<?php  elseif(get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 6'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:Ink Free }}</style>' ;?>
<?php elseif( get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 7'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:Lucida Handwriting }}</style>';?>    
<?php elseif(get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 8'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:Verdana }}</style>';?>
<?php  elseif(get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 9'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-family:MV Boli }}</style>' ;?>
<?php elseif( get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 10'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{font-famliy:papyrus }}</style>';?>    
<?php elseif(get_theme_mod( 'mobilemenu_text_style','option 1' )=='option 11'):?>
<?php echo '<style>@media(max-width:760px){.navbar-nav a{font-family:Segoe Script}}</style>';?>

<?php endif ?>


<?php 
/* navmenu text style */

if( get_theme_mod( 'mobile_text_align','option 2' )=='option 1'):?>
<?php echo '<style> @media(max-width:760px){.navbar-nav a{text-align:left}}</style>';?>    
<?php elseif(get_theme_mod( 'mobile_text_align','option 2' )=='option 2'):?>
<?php echo '<style>@media(max-width:760px){.navbar-nav a{text-align:center}}</style>';?>

<?php endif ?>  