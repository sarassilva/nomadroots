<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <main class="singleGroup">
            <section class="main-banner" style="background-image: url('<?php the_field('imagem_destacada') ?>')">
                <div class="content">
                    <h1><?php the_field('titulo_h1') ?></h1>
                    <a href="<?php the_sub_field('comprar_viagem') ?>" title="" class="btn">Comprar viagem</a>
                </div>
            </section>
        </main>

    <?php endwhile;  ?>

 
<?php get_footer(); ?>