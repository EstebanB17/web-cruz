<?php
get_header();
?>
<main>
    <section class="cont-img-main">
        <div id="main-img">img</div>
    </section>    
    <h2>Nuestros Servicios</h2>
    <section class="servicios">
        <div class="cont-servicios" id="serv-1">
            <div id="serv-img"></div>
            <p>Educación</p> 
        </div>
        <div class="cont-servicios" id="serv-2">
            <div id="serv-img"></div>
            <p>IPS</p>  
        </div>
        <div class="cont-servicios" id="serv-3">
            <div id="serv-img"></div>
            <p>Apoyo a Empresas y Entidades</p>
        </div>
        <div class="cont-servicios" id="serv-4">
            <div id="serv-img"></div>
            <p>Servicios Humanitarios</p>  
        </div>
    </section><br>

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
    <section class="campanas">
        <div class="cont-campanas" id="campana-1">
            
        </div>
        <div class="cont-campanas" id="campana-2">
            
        </div>
        <div class="cont-campanas" id="campana-3">
           
        </div>
    </section><br>

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
    if (have_posts()) : 
        while (have_posts()) : the_post();
            $ocultar_titulo = get_post_meta( get_the_ID(), '_ocultar_titulo', true );
            // Mostrar el título solo si el checkbox no está marcado
            $sClassOcultarTitle = '';
            if ($ocultar_titulo) {
                $sClassOcultarTitle = 'oculto';
            }
            echo '<h1 class="'.$sClassOcultarTitle.'">' . get_the_title() . '</h1>'; // Muestra el título de la página o entrada

            if (has_post_thumbnail()) { 
                the_post_thumbnail('large'); // Muestra la imagen destacada en tamaño 'large'
            }
            
            the_content(); // Muestra el contenido de la página o entrada actual
        endwhile;
    endif;
?>
</main>
<?php
get_footer();
?>

