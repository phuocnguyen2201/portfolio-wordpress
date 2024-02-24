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
        get_template_part('includes/section','hero',    
            array( 
            'class'          => 'hero',
            'arbitrary_data' => array(
                'hero_title' => the_field('hero_title'),
                'description' => the_field('description'),
                'hero_image' => get_field('hero_image'),
                'alt' => the_field('alt'),
                'is_button_needed' => the_field('is_button_needed'),
                'button_name' => the_field('button_name'),
                'hero_button_link' => the_field('hero_button_link'),
            ),
        ));
    ?>
</div>
<div class="content-black">
    <?php get_template_part('includes/section','carousel');?>
</div>
<div class="content-orange">
    <?php get_template_part('includes/section','contact');?>
</div>
<?php get_footer("footer.php")?>