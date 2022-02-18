<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richard</title>

    <?php wp_head(); ?>
    

</head>
<body>
    <main class="page">
        <header class="header" id="header">
            <div class="container">
                <div class="row justify-content-between align-items-center responsiveMenuParent">
                    <div class="col-xl-6 col-lg-6 col-md-5 col-sm-4 logo">
                        <?php the_custom_logo( ); ?>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 col-sm-8">
                        <nav>
                            <ul id="mainMenu" class="mainMenu">
                                <li class="itemMenu"><a href="#about">About</a></li>
                                <li class="itemMenu"><a href="#features">Features</a></li>
                                <li class="itemMenu"><a href="#howToUse">How to Use</a></li>
                                <li class="itemMenu"><a href="#registration">Download</a></li>
                            </ul>
                            <a href="#" class="responsiveMenuIcon" id="responsiveMenuIcon" onclick="showMenu()"><i class="fas fa-bars"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>