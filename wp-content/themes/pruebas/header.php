<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php if(wp_title("", false)){ echo " | "; } ?><?php wp_title(''); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!--Favicon.ico-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?> /favicon.ico">

    <!--Etiquetas movil App IOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-titile" content="pruebas">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?> /apple-touch-icon.jpg">

    <!--Etiquetas movil App Android-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">
    <meta name="aplication-name" content="pruebas">
    <link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?> /icono.png">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid bg-color-container">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <?php
                            if( function_exists('the_custom_logo') ){
                                the_custom_logo();
                            }
                        ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'  => 'menu_principal',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav'
                        ));
                    ?>
                </div>
            </nav>
        </div>
    </div>