<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <!-- ======= FAVICONSS ======= -->
        <link href="<?php global $ounce; echo $ounce['favicon-upload']['url']; ?>" rel="icon">
        <link href="<?php global $ounce; echo $ounce['apple-favicon-upload']['url']; ?>" rel="apple-touch-icon">
        <!-- ======= GOOGLE FONTS ======= -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">



        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- ======= TOP BAR ======= -->
        <section id="topbar" class="d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php global $ounce; echo $ounce['topbar-mail']; ?>" class="email-id"><?php global $ounce; echo $ounce['topbar-mail']; ?></a></i>
                    <div class="mobile-info">
                        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:<?php global $ounce; echo $ounce['topbar-phone']; ?>"><?php global $ounce; echo $ounce['topbar-phone']; ?></a></i>
                    </div>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="<?php global $ounce; echo $ounce['twitterid']; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="<?php global $ounce; echo $ounce['fbid']; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="<?php global $ounce; echo $ounce['instaid']; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="<?php global $ounce; echo $ounce['linkedinid']; ?>" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>
            </div>
        </section>

        <!-- ======= TOP BAR ======= -->
        <!-- ======= HEADER ======= -->
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <!-- FOR IMAGE LOGO -->
                <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php global $ounce; echo $ounce['logo-upload']['url']; ?>" alt=""><span class="logo-text"><?php global $ounce; echo $ounce['logo-text']; ?></span></a>
                <!-- NAVBAR -->
                <nav id="navbar" class="navbar">
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location'    => 'main-menu',
                                        'container'         => 'ul',
                                        'menu_class'        => '',
                                        'order'             => 'ASC',
                                    ));
                                ?>

                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- NAVBAR -->
            </div>
        </header>
        <!-- ======= HEADER ======= -->