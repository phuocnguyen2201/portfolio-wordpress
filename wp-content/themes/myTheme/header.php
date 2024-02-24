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
  