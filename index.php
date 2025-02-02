<main>
    <?php
        get_header();
    ?>
    <section class="cont-img-main">
        <div id="main-img"><?php echo do_shortcode('[smartslider3 slider="4"]');?></div>
    </section>
    
    <h2>Nuestros Servicios</h2>
    <?php mostrar_servicios_por_categoria('servicios'); ?>


    <h2>Últimas Noticias</h2>
    <section class="contenedor-np"> 
            <div class="noticias">
            <div class="ultima-noticia">
                <div id="not-img-nueva"></div>
                <h3>Noticia Nueva!</h3>
                <p>Lorem ipsum dolor sit amet...</p>
            </div>
            <div class="cont-noticias">
                <div class="li-noticias">
                    <div id="not-img"></div>
                    <h3>Noticia 1</h3>
                </div>
                <div class="li-noticias">
                    <div id="not-img"></div>
                    <h3>Noticia 2</h3>
                </div>
            </div>
        </div>
        <div class="preguntas">
            <h3>Preguntas Frecuentes</h3>
            <ul>
                <li><a href="">¿Cómo puedo ser voluntario?</a></li>
                <li><a href="">¿Cuáles son los horarios y líneas
                    de atención?</a></li>
                <li><a href="">¿Dónde se encuentran ubicados?</a></li>
                <li><a href="">¿Cómo me puedo inscribir a los
                    programas educativos?</a></li>
                <li><a href="">¿A donde me puedo comunicar
                    para tener atención en un evento?</a></li>
                <li><a href="">¿Hacen acampamientos a
                    simulacros?</a></li>
            </ul>
        </div>
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
            <button id="sub-boton">Suscribirme</button>
        </div>
    </section>

    <h2>Historias de vida</h2>
    <section class="hist-vida">
        <div class="historia">
            <figure>
                <img src="" alt="">
            </figure>
            <section class="contenido">
                <article>
                    <p>Historia</p>
                </article>
            </section>
        </div>

        <div class="historia">
            <figure>
                <img src="" alt="">
            </figure>
            <section class="contenido">
                <article>
                    <p>Historia</p>
                </article>
            </section>
        </div>
    </section>
    
    <h2>Donde nos Encuentras </h2>
    <section class="ubicacion">
        <div class="mapa">
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



