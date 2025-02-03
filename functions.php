<?php
function cargar_estilos_footer() {
    wp_enqueue_style('mis-estilos', get_template_directory_uri() . '/estilos.css', array(), null, 'all');
}
add_action('wp_footer', 'cargar_estilos_footer');


function hbp_register_menus() {
    register_nav_menus(
        array(
            'menu_principal' => 'Menú Principal',
            'menu_secundario' => 'Menú Secundario',
            'menu_acciones' => 'Menú Acciones',
        
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
        'post_type'      => 'post',  // Obtener entradas (posts)
        'post_status'    => 'publish', // Solo entradas publicadas
        'orderby'        => 'date',   // Ordenar por fecha de publicación
        'order'          => 'DESC'    // Mostrar las más recientes primero
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="noticias-container">';
        while ($query->have_posts()) {
            $query->the_post();
            $imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Obtener imagen destacada
            $titulo = get_the_title(); // Obtener título
            $contenido = get_the_excerpt(); // Obtener extracto de la entrada
            $fecha = get_the_date('d M Y'); // Obtener fecha de publicación
            $enlace = get_permalink(); // Obtener enlace de la entrada

            // Estructura HTML respetando la original
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

function mostrar_tres_ultimas_noticias() {
    $args = array(
        'post_type'      => 'post', // Tipo de contenido: Entradas
        'posts_per_page' => 3, // Obtener las 3 últimas entradas
        'orderby'        => 'date', // Ordenar por fecha de publicación
        'order'          => 'DESC' // Mostrar las más recientes primero
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $contador = 0;

        echo '<div class="noticias">';

        while ($query->have_posts()) {
            $query->the_post();
            $imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $titulo = get_the_title();
            $contenido = get_the_excerpt();
            $enlace = get_permalink();

            if ($contador == 0) {
                echo '<div class="ultima-noticia">';
                echo '<a href="'.esc_url($enlace).'">';
                echo '<div id="not-img-nueva">';
                echo '<img src="'.esc_url($imagen_destacada).'" alt="'.esc_attr($titulo).'">';
                echo '</div>';
                echo '</a>';
                echo '<h3><a href="'.esc_url($enlace).'">'.esc_html($titulo).'</a></h3>';
                echo '<p>'.esc_html($contenido).'</p>';
                echo '</div>';
                echo '<div class="cont-noticias">';
            } else {
                // Otras noticias
                echo '<div class="li-noticias">';
                echo '<a href="'.esc_url($enlace).'">';
                echo '<div id="not-img">';
                echo '<img src="'.esc_url($imagen_destacada).'" alt="'.esc_attr($titulo).'">';
                echo '</div>';
                echo '</a>';
                echo '<h3><a href="'.esc_url($enlace).'">'.esc_html($titulo).'</a></h3>';
                echo '</div>';
            }

            $contador++;
        }

        echo '</div>'; // Cierre de .cont-noticias
        echo '</div>'; // Cierre de .noticias
        wp_reset_postdata();
    } else {
        echo '<p>No hay noticias disponibles.</p>';
    }
}


function mostrar_preguntas_frecuentes() {
    $args = array(
        'post_type'      => 'page', 
        'posts_per_page' => -1, 
        'tax_query'      => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => 'preguntas-frecuentes', 
            ),
        ),
        'orderby'        => 'title', 
        'order'          => 'ASC' 
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="preguntas">';
        echo '<h3>Preguntas Frecuentes</h3>';
        echo '<ul>';

        while ($query->have_posts()) {
            $query->the_post();
            $titulo = get_the_title();
            $enlace = get_permalink();

            echo '<li><a href="'.esc_url($enlace).'">'.esc_html($titulo).'</a></li>';
        }

        echo '</ul>';
        echo '</div>';

        wp_reset_postdata();
    } else {
        echo '<p>No hay preguntas frecuentes disponibles.</p>';
    }
}

function mostrar_historias_de_vida() {
    $args = array(
        'post_type'      => 'page', 
        'posts_per_page' => 2,
        'tax_query'      => array(
            array(
                'taxonomy' => 'category', 
                'field'    => 'slug',
                'terms'    => 'historias-de-vida', 
            ),
        ),
        'orderby'        => 'date', 
        'order'          => 'DESC' 
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $titulo = get_the_title();
            $contenido = get_the_excerpt();
            $enlace = get_permalink();

            echo '<div class="historia">';
            echo '<figure>';
            echo '<img src="'.esc_url($imagen_destacada).'" alt="'.esc_attr($titulo).'">';
            echo '</figure>';
            echo '<section class="contenido">';
            echo '<article>';
            echo '<h2><a href="'.esc_url($enlace).'">'.esc_html($titulo).'</a></h2>';
            echo '<p>'.esc_html($contenido).'</p>';
            echo '</article>';
            echo '</section>';
            echo '</div>';
        }
        wp_reset_postdata();
    } else {
        echo '<p>No hay historias de vida disponibles.</p>';
    }
}

function mostrar_ubicaciones() {
    $args = array(
        'post_type'      => 'page', // Tipo de contenido: Páginas
        'posts_per_page' => 2, // Obtener máximo 2 páginas
        'tax_query'      => array(
            array(
                'taxonomy' => 'category', // Filtrar por categoría
                'field'    => 'slug',
                'terms'    => 'ubicaciones', // Categoría "ubicaciones"
            ),
        ),
        'orderby'        => 'date', // Ordenar por fecha de publicación
        'order'          => 'DESC' // Mostrar las más recientes primero
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $titulo = get_the_title();
            $contenido = get_the_content(); // Obtener el contenido completo de la página

            // Dividir el contenido en párrafos usando la función wpautop()
            $contenido_dividido = wpautop($contenido); // wpautop agrega <p> a los párrafos automáticamente

            // Mostrar la estructura HTML respetando los párrafos
            echo '<div class="direccion">';
            echo '<div id="dir">';
            echo '<h3>'.esc_html($titulo).'</h3>';

            // Mostrar los párrafos individualmente
            echo $contenido_dividido;

            echo '</div>';
            echo '</div>';
        }
        wp_reset_postdata();
    } else {
        echo '<p>No hay ubicaciones disponibles.</p>';
    }
}
