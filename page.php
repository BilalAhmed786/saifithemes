<?php get_header();
?>
<div id ='contain' class = 'container'>
<?php get_template_part( '/breadcrumb/breadcrumb-customize' ); ?>

<?php get_template_part( '/pagetitle/page-customize' ); ?>
<?php get_template_part( '/img/featuredimg' ); ?>
<div class = 'row'>
<?php if ( have_posts() ):while( have_posts() ):the_post();
?>
<div id='leftsbp' class = 'col-sm-3' >
<?php get_template_part( '/sidebar/left-sidebar' );
?>
</div>
<div id='scrolist' class ='col' >
<?php the_content();
?>
</div>
<div id='rightsbp' class = 'col-sm-3' >
<?php get_template_part( '/sidebar/right-sidebar' );
?>
</div>
</div>

<?php endwhile;
endif;
?>
<?php get_template_part( '/pagination/pagination' );
?>
</div>
<?php get_footer();
?>