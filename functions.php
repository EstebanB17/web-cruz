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


// En tu archivo functions.php o plantilla
function mostrar_servicios() {
    // Query para obtener las entradas o páginas que deseas mostrar
    $args = array(
        'post_type'      => 'post', // Cambia 'post' por el tipo de post que quieres mostrar
        'posts_per_page' => -1, // Mostrar todas las entradas
        'category_name'  => 'servicios' // Si quieres filtrar por categoría
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
        echo '<section class="servicios">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <div class="cont-servicios">
                <div id="serv-img"><?php the_post_thumbnail(); ?></div>
                <p><?php the_title(); ?></p>
            </div>
            <?php
        }
        echo '</section>';
        /* Restaura la query principal */
        wp_reset_postdata();
    } else {
        // Si no hay entradas, muestra un mensaje
        echo 'No hay servicios disponibles.';
    }
}

// Llama a la función en tu plantilla
add_action( 'your_action_hook', 'mostrar_servicios' );


/*function hbp_assets(){
    wp_register_style('google-pre', "https://fonts.googleapis.com", array(),false,'all');
    wp_register_style('google-pre1', "https://fonts.gstatic.com", array(),false,'all');

    wp_register_style('google-font', "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", array(),false,'all');
    
    wp_enqueue_style("estilos", get_stylesheet_directory_uri()."/assets/styles/estilos.css", array('google-pre','google-pre1','google-font'));

    wp_enqueue_script("hbp-js", get_stylesheet_directory_uri()."/assets/js/scripthbp.js");
}
add_action("wp_enqueue_scripts", "hbp_assets");

function hbp_them_supports(){
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo", array(
        "width" => 286,
        "height" => 112,
        "flex-width" => true,
        "flex-height" => true
    ));
}
add_action("after_setup_theme", "hbp_them_supports");

function hbp_add_menus(){
    register_nav_menus(
        array(
            'menu_principal' => "Menu Principal",
            'menu_app' => "Menu App",
            'menu_footer' => "Menu Footer",
            'menu_footer_derechos' => "Menu Footer Derechos",
            'menu_movil' => "Menu Movil"
        )
    );
}
add_action("after_setup_theme", "hbp_add_menus");
function hbp_add_sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de página',
            'id' => 'pie-pagina',
            'before_widget' => '',
            'after_widget' => '',
        )
        );
}
add_action('widgets_init', 'hbp_add_sidebar');
function hbp_modify_logo( $html ) {
    // Agregar clase personalizada
    $html = str_replace( 'custom-logo', 'custom-logo logo', $html );
    // Agregar un ID personalizado
    $html = str_replace( '<img', '<img id="logo"', $html );
    return $html;
}
add_filter( 'get_custom_logo', 'hbp_modify_logo' );

function agregar_metabox_ocultar_titulo() {
    add_meta_box(
        'ocultar_titulo_metabox',           // ID del metabox
        'Opciones de Visibilidad',          // Título del metabox
        'mostrar_metabox_ocultar_titulo',   // Callback que muestra el HTML del metabox
        array('post', 'page'),              // Tipos de post (post y page)
        'side',                             // Ubicación en el editor
        'default'                           // Prioridad
    );
}
add_action( 'add_meta_boxes', 'agregar_metabox_ocultar_titulo' );

function mostrar_metabox_ocultar_titulo( $post ) {
    // Obtener el valor guardado del checkbox
    $ocultar_titulo = get_post_meta( $post->ID, '_ocultar_titulo', true );
    
    // Renderizar el checkbox
    ?>
    <label for="ocultar_titulo">
        <input type="checkbox" name="ocultar_titulo" id="ocultar_titulo" value="1" <?php checked( $ocultar_titulo, '1' ); ?> />
        Ocultar el título
    </label>
    <?php
}

function guardar_meta_ocultar_titulo( $post_id ) {
    // Verificar si se envía el checkbox y guardarlo como meta dato
    if ( isset( $_POST['ocultar_titulo'] ) ) {
        update_post_meta( $post_id, '_ocultar_titulo', '1' );
    } else {
        delete_post_meta( $post_id, '_ocultar_titulo' );
    }
}
add_action( 'save_post', 'guardar_meta_ocultar_titulo' );*/