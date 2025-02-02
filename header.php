<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'menu_principal',
                                'container' => false, 
                                'menu_class' => '', 
                                'items_wrap' => '%3$s',
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </header>
    </header>