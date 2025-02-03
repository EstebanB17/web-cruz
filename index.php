<main>
    <?php
        get_header();
    ?>
    <section class="cont-img-main">
        <div id="slider"><?php echo do_shortcode('[smartslider3 slider="4"]');?></div>
    </section>
    
    <h2>Nuestros Servicios</h2>
    <?php mostrar_servicios_por_categoria('servicios'); ?>


    <h2>Últimas Noticias</h2>
    <section class="contenedor-np"> 
        <?php mostrar_tres_ultimas_noticias(); ?>
        <?php mostrar_preguntas_frecuentes(); ?>
    </section>

    <h2>Ultimas Campañas</h2>
    <?php mostrar_campanas(); ?>

    <section class="yt-seccion">
        <div id="cont-video">
            <div id="video">
            </div>
        </div>
        <div id="desc-video">
            <h3>Nuestro canal de Youtube</h3>
            <p>En nuestro canal en YouTube podrás
                encontrar videos sobre nuestras acciones
                humanitarias, además de algunas
                capacitaciones que de seguro serán muy
                utiles para ti.</p>

            <a href="https://www.youtube.com/@cruzrojacolombianacaqueta" target="_blank">
            <button id="sub-boton">Suscribirme</button>
            </a>
            
        </div>
    </section>

    <h2>Historias de vida</h2>
    <section class="hist-vida">
    <?php mostrar_historias_de_vida(); ?>

    </section><br><br>
    
    <h2>Donde nos Encuentras </h2>
    <section class="ubicacion">
        <figure class="mapa">
            <img src="https://motor.elpais.com/wp-content/uploads/2022/01/google-maps-22.jpg" alt="">
        </figure>
        <?php mostrar_ubicaciones(); ?>
        <br>
    </section>
    <?php
    get_footer();
    ?>
</main>