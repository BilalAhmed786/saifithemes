<?php get_header();?>

<div id= 'contain' class = 'container'>

<?php get_template_part( '/Blog/breadcrumb' ); ?>
<div id='customizetitle' class='blogtitle'>
<?php single_cat_title();?>
</div>
<div class='row'>
<div id='leftsbB' class = 'col-sm-3' >
<?php get_template_part( '/Blog/blogsidebar1'); ?>
</div>
<div class=col>
<div class= 'row'>
<?php if ( have_posts() ) : while( have_posts() ):the_post();?>
<div id ='post' class='col'>
<div class ='card mb-4'>
<div class = 'card-body'>
<?php get_template_part( '/pagetitle/page-customize' ); ?>
<p>written by <?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?></p>
<p> published on: <?php the_time('m/j/y g:i A') ?></p>
<?php get_template_part( '/img/featuredimg' ); ?>
<div class='excerpt'>
<?php the_excerpt();?>
</div>
<div id="buttoncustom" class= "buttonblog">
<a href = '<?php the_permalink();?>' class = "btn btn-primary"><?php echo get_theme_mod('Blog_button edit','Read more') ?></a>
</div>
</div>
</div>  
</div>
<?php endwhile;endif;?>
</div>
</div>
<div id='rightsbB' class = 'col-sm-3' >
<?php get_template_part( '/Blog/blogsidebar2'); ?>
</div>
</div>
<?php get_template_part( '/pagination/pagination' );
?>
</div>
<?php get_footer();?>


