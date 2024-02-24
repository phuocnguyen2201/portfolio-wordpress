 <div class="container-lg py-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mt-5">
            <h1 class="title">
                <?php echo isset($hero_title)?$hero_title: "No Title"?>
            </h1>
            <p>
                <?php echo isset($description)? $description: "No Description"?>
            </p>
            <?php 
                if(isset($isNeedButton))
                {
                    echo "<a href='$button_path'><button type='button' class='btn-normal'>$button_name</button></a>";
                }
            ?>
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
            <img class="img-thumbnail" alt="<?php echo isset($img_desc)?$img_desc:"No image"?>" src="<?php echo $img_url?>">
        </div>
    </div>
</div>