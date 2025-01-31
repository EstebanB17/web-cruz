<?php get_header(); ?>

<main>
    <h1><?php the_title(); ?></h1>

    <section class="pg-noticia">
        <div class="noticias-container">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <div class="noti">
                <figure>
                    <?php
                        // Verifica si hay una imagen destacada y la muestra
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                            echo '<img src="" alt="Imagen predeterminada">';
                        }
                    ?>
                </figure>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                <span><?php the_date(); ?></span>
            </div>
            <?php endwhile; else : ?>
                <p>No se encontraron noticias.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
