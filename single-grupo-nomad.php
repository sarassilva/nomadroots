<?php get_header(); ?>


        <main class="singleGroup">
            <section class="main-banner" style="background-image: url('<?php the_field('imagem_destacada') ?>')">
                <div class="content">
                    <h1><?php the_title(); ?></h1>
                    <a href="<?php the_field('comprar_viagem') ?>" title="" class="btn">Comprar viagem</a>
                </div>
            </section>
        </main>


 
<?php get_footer(); ?>