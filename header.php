<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">-->
    <?php wp_head(); ?>
</head>
<?php
$id_pagina = get_queried_object_id();
?>

<body class="<?= "pag-{$id_pagina}" ?>">
    <?php 
    wp_body_open();
    ?>
    <header>
        <section class="nav-head">
                <div class="info-busqueda">
                    <p>Email: caqueta@cruzrojacolombiana.org</p>
                    <p>Teléfonos: 608 435 2929 - 323 266 4736</p>
                    <input placeholder="Buscar" id="bar-busqueda" type="search">
                </div>

                <div class="navbar">
                    <div class="logo-cruz">
                        <img src="https://pbs.twimg.com/ext_tw_video_thumb/1851645659331330049/pu/img/Ar1R7XEgbKCVxvn9?format=jpg&name=large">
                    </div>
                    <div class="menu-container">
                        <button id="btn-donar">Donar</button>
                        <div class="menu">
                            <a href="#">Conócenos</a>
                            <a href="#">Nuestros Servicios</a>
                            <a href="#">Voluntariado</a>
                            <a href="#">Biblioteca</a>
                            <a href="#">Noticias</a>
                            <a href="#">Contacto</a>
                        </div>
                    </div>
                </div>
        </section>
        <?php the_custom_logo(); ?>
        <?php
        /*wp_nav_menu(
            array(
                "theme_location" => "menu_principal",
                "menu_id" => "menuPrincipal",
                "container" => "nav",
                "container_class" => "menus",
            )
        );
        ?>
        <?php 
        wp_nav_menu(
            array(
                "theme_location" => "menu_app",
                "container_class" => "onlyDesktop menus",
                "menu_id" => "menuSecundario"
            )
        );*/
        ?>
        <!-- Este es un comentario en HTML <label for="menuMovil" class="btnMenuMovil">
            <span></span><span></span><span></span>
        </label>
        <input type="checkbox" id="menuMovil"> -->
    </header>