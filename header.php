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
                    <div class="menu">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'menu_secundario',
                                'container' => false, 
                                'menu_class' => '', 
                                'items_wrap' => '%3$s',
                            ));
                            ?>
                    </div>
                            
                    <input placeholder="Buscar" id="bar-busqueda" type="search">
                </div>

                <div class="navbar">
                    <div class="logo-cruz">
                        <a href="<?php echo home_url()?>">
                            <img src="https://pbs.twimg.com/ext_tw_video_thumb/1851645659331330049/pu/img/Ar1R7XEgbKCVxvn9?format=jpg&name=large" alt="Logo">
                        </a>
                    </div>
                    <div class="menu-container">
                        <button id="btn-donar"><?php wp_nav_menu(array(
                                'theme_location' => 'menu_acciones',
                                'container' => false, 
                                'menu_class' => '', 
                                'items_wrap' => '%3$s',
                            ));
                            ?></button>
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