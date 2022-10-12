<div id ='pag' class='pagination'>
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query->max_num_pages,
  'next_text' => 'Next',
  'prev_text' => 'Previous'
) );
?>
</div>

<?php wp_link_pages();?>



<style>

#pag.pagination a
{
    /* post-pagination settings*/
color:<?php echo get_theme_mod('pagination_fontcolor','black') ?>;
font-size:<?php echo get_theme_mod('pagination_fontsize','15px') ?>;

}

#pag.pagination 
{
    /* post-pagination settings*/
color:<?php echo get_theme_mod('pagination_fontcolor','black') ?>;
font-size:<?php echo get_theme_mod('pagination_fontsize','15px') ?>;


}
#pag.pagination a:hover
{
    /* post-pagination settings*/
color:<?php echo get_theme_mod('pagination_button_textcolor_hover','black') ?>;



}
a.next.page-numbers,
a.prev.page-numbers{
    background-color:<?php echo get_theme_mod('pagination_button_bgcolor','white') ?>;
    border:<?php echo get_theme_mod('pagination_button_border','1px solid red') ?>;
    padding:<?php echo get_theme_mod('pagination_button_padding','1px solid black') ?>;
    border-radius:<?php echo get_theme_mod('pagination_button_radius','5px') ?>;

}

.next.page-numbers:hover,
.prev.page-numbers:hover{
    background-color:<?php echo get_theme_mod('pagination_button_bgcolor_hover','white') ?>;
  

}


.post-nav-links
{
    /* page-pagination settings*/
color:<?php echo get_theme_mod('page_pagination_fontcolor','black') ?>;
background-color:<?php echo get_theme_mod('page_pagination_bgcolor','white') ?>;
font-size:<?php echo get_theme_mod('page_pagination_fontsize','15px') ?>;

}


.post-nav-links a
{
color:<?php echo get_theme_mod('page_pagination_fontcolor','black') ?>;
font-size:<?php echo get_theme_mod('page_pagination_fontsize','15px') ?>;

}
.post-nav-links a:hover{

    color:<?php echo get_theme_mod('page_pagination_font_hover','red') ?>;
}


</style>

<?php 
//post-pagination alignment
if( get_theme_mod( 'pagination_alignment','option 2' )=='option 1'):?>
<?php echo '<style> 
#pag.pagination{text-align:left;}
</style>';?>    
<?php elseif(get_theme_mod( 'pagination_alignment','option 2' )=='option 2'):?>
<?php echo '<style>  #pag.pagination{text-align:center; }</style>';?>
<?php endif ?>


<?php 
//page-pagination alignment
if( get_theme_mod( 'page_pagination_alignment','option 2' )=='option 1'):?>
<?php echo '<style> 
 .post-nav-links{text-align:left;}
</style>';?>    
<?php elseif(get_theme_mod( 'pagination_alignment','option 2' )=='option 2'):?>
<?php echo '<style>.post-nav-links {text-align:center; }</style>';?>
<?php endif ?>