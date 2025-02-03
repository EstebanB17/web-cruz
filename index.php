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
        <div class="mapa">
            <img src="" alt="">
        </div>
        <div class="direccion">
            <div id="dir">
                <h3>Sede Principal</h3>
                <p>Cra. 16 #15-70, Florencia, Caquetá</p>
                <p>608 433 8330</p>
                <p>educacion@cruzrojacaqueta.org</p> 
            </div>
            <div id="dir">
                <h3>Instución Educativa</h3>
                <p>Cra. 16 #15-70, Florencia, Caquetá</p>
                <p>608 433 8330</p>
                <p>educacion@cruzrojacaqueta.org</p>
            </div>
        </div>
        <br>
    </section>
    <?php
    get_footer();
    ?>
</main>