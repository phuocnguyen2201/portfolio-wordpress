<?php
/*
Template Name: Homepage
*/
?>

<?php get_header("header.php")?>
<div class="content-white">
   
</div>
<div class="container-lg">
    <div class="row"> 
        <?php get_template_part('includes/section','content');?>
    </div>
    <div class="row">
        
    </div>
</div>
<div class="content">
    <?php
        
        $hero_title = the_field('hero_title');

        include_once 'includes/section-hero.php';
        get_template_part('includes/section','hero');
    ?>
</div>
<div class="content-black">
    <?php get_template_part('includes/section','carousel');?>
</div>
<div class="content-orange">
    <?php get_template_part('includes/section','contact');?>
</div>
<?php get_footer("footer.php")?>