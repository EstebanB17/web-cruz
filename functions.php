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

function mi_tema_soporte() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mi_tema_soporte' );


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