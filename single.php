<main>
    <?php get_header(); ?>
    <section class="cont-img-main-not">
        <div id="main-img-not">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
        </div>
    </section>

    <section class="noticia-individual">
        <h2><?php the_title(); ?></h2>
        <span><?php echo get_the_date('d \d\e F \d\e Y'); ?></span>
        <div class="not-contenido">
            <?php the_content(); ?>
        </div>
    </section>
    <?php get_footer(); ?>
</main>