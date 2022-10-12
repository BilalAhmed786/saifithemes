
<div id ='footercontain' class='row'>
    <div id='footer1' class='col-sm'>
<?php
if(is_active_sidebar('footer_1')){
dynamic_sidebar('footer_1');
}
?>
</div>

<div id='footer2' class='col-sm'>
<?php
if(is_active_sidebar('footer_2')){
dynamic_sidebar('footer_2');
}
?>
</div>

<div id='footer3' class='col-sm'>
<?php
if(is_active_sidebar('footer_3')){
dynamic_sidebar('footer_3');
}
?>
</div>
<div id='footer4' class='col-sm'>
<?php
if(is_active_sidebar('footer_4')){
dynamic_sidebar('footer_4');
}
?>
</div>
</div>
<div class='buttonscroll'>
<button class="button-top"> <?php echo get_theme_mod('saifi_scroll_to_top_edit','<i class="fa fa-arrow-circle-up"></i>') ?> </button> 
</div>
<div id='copyrightarea'  class='copyrite'>
<?php echo get_theme_mod('footer_copyright_Edit','Ⓒsaifithemes 2022') ?>
</div>

<?php  
//template parts

get_template_part( '/footer/footer-customizer'); ?>