<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exploring your future wonderful highly skilled freelancer.">
    <?php wp_head();?>
    <title><?php the_title();?></title>
    
    <link rel="icon" type="image/x-icon" href="image/favicon_io/favicon.ico">

    <script src="js/validation.js"></script>
    <script src="https://kit.fontawesome.com/192e3b220b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
        <div class="header">        
            <div class="container-lg pt-3">
                <div class="row"> 
                    <nav class="menu">
                        <div class="logo">
                            <a href="home.php"><img class="header-logo" alt="G6 Portfolio Logo" src="<?php echo get_template_directory_uri() ?>/image/favicon_io/header-favicon-32x32.png"?></a>
                        </div>
                        <input type="checkbox" id="check">
                        <label for="check" class="checkbtn">
                            <i class="fa-solid fa-bars"></i>
                        </label>
                        <ul role="menubar" class="nav-list">
                            <hr class="divider">
                                <li role="menuitem" class="has-children">
                                    <a href="home.php">Home</a>
                                </li>
                                <li role="menuitem" class="has-children">
                                    <a href="about.php">About</a>
                                </li>
                                <li role="menuitem" class="has-children">
                                    <a href="team.php">Team</a>
                                </li>
                                <li role="menuitem" class="has-children">
                                    <a href="contact.php">Contact</a>
                                </li>

                                <?php
                                    if(isset($_COOKIE['user'])){
                                        echo "
                                        <li role='menuitem' aria-haspopup='true' class='has-children'>
                                            <a href='#'>Hi! ".$_COOKIE['user']."</a>
                                            <div class='dropdown-content'>
                                                <ul class='sub-menu' role='menu' aria-expanded='true'>
                                                    <li role='menuitem'> <a class='dropdown-item' href='manage.php'>Manage</a></li>
                                                    <li role='menuitem'> <a class='dropdown-item' href='logout.php'>Logout</a></li>
                                                </ul>
                                        </div>
                                    </li>";
                                    }
                                    else{   
                                        echo "<li role='menuitem' class='has-children'>
                                        <a href='login.php'>Login</a>
                                    </li>";
                                    }
                                ?>
                            <hr class="divider">
                        </ul>
                    </nav>
                    
                </div>
        </div>
    </div>
    <div class="content">   
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
    </div></div>