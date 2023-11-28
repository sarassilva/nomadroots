<?php get_header(); ?>


        <main class="singleGroup">
            <section class="main-banner" style="background-image: url('<?php the_field('imagem_destaque') ?>')">
                <div class="content">
                    <h1><?php the_title(); ?></h1>
                    <div class="data"><?php the_field('data') ?></div>
                    <a href="<?php the_field('comprar_viagem') ?>" title="" class="btn">Comprar viagem</a>
                </div>
            </section>
        </main>


 
<?php get_footer(); ?>