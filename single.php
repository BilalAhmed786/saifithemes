<?php get_header();?>

<div id ='contain' class = 'container'>
<?php get_template_part( '/Blog/breadcrumb' ); ?>

<?php get_template_part( '/pagetitle/page-customize' ); ?>
<?php get_template_part( '/img/featuredimg' ); ?>
<div class = 'row'>
<?php if ( have_posts() ):while( have_posts() ):the_post();
?>
<div id='leftsbB' class = 'col-sm-3' >
<?php get_template_part( '/Blog/blogsidebar1'); ?>
</div>
<div id='scrolist' class ='col' >
<?php the_content();
?>
</div>
<div id='rightsbB' class = 'col-sm-3' >
<?php get_template_part( '/Blog/blogsidebar2'); ?>
</div>
</div>

<?php endwhile;
endif;
?>
<?php get_template_part( '/pagination/pagination' );
?>
</div>
<div id ='commentsarea' class='customcomment'>
<?php comments_template();?>
</div>

<?php get_footer();
?>