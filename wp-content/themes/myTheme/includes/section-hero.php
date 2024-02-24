 <?php 
        $args = wp_parse_args(
            $args,
            array(
                'class'          => 'hero',
                'arbitrary_data' => array(
                    'hero_title' => the_field('hero_title'),
                    'description' => the_field('description'),
                    'hero_image' => the_field('hero_image'),
                    'alt' => the_field('alt'),
                    'is_button_needed' => the_field('is_button_needed'),
                    'button_name' => the_field('button_name'),
                    'hero_button_link' => the_field('hero_button_link'),
                ),
            )
        );
        if((isset($args['arbitrary_data']['hero_title']) && !empty($args['arbitrary_data']['hero_title'])) ||
            (isset($args['arbitrary_data']['description']) && !empty($args['arbitrary_data']['description'])) ||
            (isset($args['arbitrary_data']['hero_image']['url']) && !empty($args['arbitrary_data']['hero_image']['url']))):
?>
 
 <div class="container-lg py-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mt-5">
            <h1 class="title">
                <?php
                    echo esc_html($args['arbitrary_data']['hero_title']);
                ?>
            </h1>
            <p>
                <?php echo $args['arbitrary_data']['description']?>
            </p>
            <?php if((isset($args['arbitrary_data']['is_button_needed']) && !empty($args['arbitrary_data']['is_button_needed'])) == 1):?>
                
                    <a href='<?php echo isset($args['arbitrary_data']['hero_button_link'])? $args['arbitrary_data']['hero_button_link']: "#";?>'><button type='button' class='btn-normal'><?php echo $args['arbitrary_data']['button_name']?></button></a>
                
            <?php endif;?>
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
            <?php if(isset($args['arbitrary_data']['hero_image']['url'])):?>
                <img class="img-thumbnail" alt="<?php echo isset($args['arbitrary_data']['hero_image']['alt'])? $args['arbitrary_data']['hero_image']['alt']:"No image"?>" src="<?php echo $args['arbitrary_data']['hero_image']['url'];?>">
            <?php endif;?>
        </div>
    </div>
</div>

<?php endif;?>