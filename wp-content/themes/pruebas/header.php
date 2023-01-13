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

<body>
    <div class="container-fluid bg-color-container">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#">Features</a>
                            <a class="nav-link" href="#">Pricing</a>
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>