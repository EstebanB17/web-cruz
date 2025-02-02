<?php
function cargar_estilos_footer() {
    wp_enqueue_style('mis-estilos', get_template_directory_uri() . '/estilos.css', array(), null, 'all');
}
add_action('wp_footer', 'cargar_estilos_footer');


function hbp_register_menus() {
    register_nav_menus(
        array(
            'menu_principal' => 'Menú Principal',
        )
    );
}
add_action('after_setup_theme', 'hbp_register_menus');

function mostrar_servicios_por_categoria($categoria_slug) {
    $args = array(
        'post_type' => 'page', // Filtra por páginas
        'posts_per_page' => -1, // Obtener todas las páginas de la categoría
        'tax_query' => array(
            array(
                'taxonomy' => 'category', // Taxonomía de categorías
                'field'    => 'slug',
                'terms'    => $categoria_slug, // Categoría específica
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<section class="servicios">';
        while ($query->have_posts()) {
            $query->the_post();
            $imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $titulo = get_the_title();
            $enlace = get_permalink();
            
            echo '<div class="cont-servicios" id="serv-'.get_the_ID().'">';
            echo '<figure id="serv-img">
                    <img src="'.esc_url($imagen_destacada).'">
                </figure>';
            echo '<h3><a href="'.esc_url($enlace).'">'.esc_html($titulo).'</a></h3>';
            echo '</div>';
        }
        echo '</section>';
        wp_reset_postdata();
    } else {
        echo '<p>No hay servicios disponibles en esta categoría.</p>';
    }
}

function mostrar_campanas() {
    $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1, 
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => 'campanas', 
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<section class="campanas">';
        while ($query->have_posts()) {
            $query->the_post();
            $imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $enlace = get_permalink();

            echo '<div class="cont-campanas">';
            echo '<a href="'.esc_url($enlace).'">';
            echo '<figure id="camp-img">';
            echo '<img src="'.esc_url($imagen_destacada).'" alt="'.esc_attr(get_the_title()).'">';
            echo '</figure>';
            echo '</a>';
            echo '</div>';
        }
        echo '</section><br>';
        wp_reset_postdata();
    } else {
        echo '<p>No hay campañas disponibles.</p>';
    }
}

function mostrar_noticias() {
    $args = array(
        'post_type'      => 'post', 
        'posts_per_page' => -1, 
        'tax_query'      => array(
            array(
                'taxonomy' => 'category', 
                'field'    => 'slug',
                'terms'    => 'noticias',
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="noticias-container">';
        while ($query->have_posts()) {
            $query->the_post();
            $imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $titulo = get_the_title();
            $contenido = get_the_excerpt(); 
            $fecha = get_the_date('d M Y'); 
            $enlace = get_permalink();

            
            echo '<div class="noti">';
            echo '<a href="'.esc_url($enlace).'">'; // Enlace que rodea toda la tarjeta
            echo '<figure><img src="'.esc_url($imagen_destacada).'" alt="'.esc_attr($titulo).'"/></figure>';
            echo '<h2>'.esc_html($titulo).'</h2>';
            echo '<p>'.esc_html($contenido).'</p>';
            echo '<span>'.esc_html($fecha).'</span>';
            echo '</a>'; // Cierre del enlace
            echo '</div>';
        }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>No hay noticias disponibles.</p>';
    }
}




