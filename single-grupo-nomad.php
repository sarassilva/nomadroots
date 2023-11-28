<?php get_header(); ?>

    <main class="singleGroup">
        <section class="main-banner" style="background-image: url('<?php the_field('imagem_destaque') ?>')">
            <div class="content">
                <h1><?php the_title(); ?></h1>
                <div class="data"><?php the_field('data') ?></div>
                <a href="<?php the_field('comprar_viagem') ?>" title="" class="btn">Compre agora</a>
            </div>
        </section>

        <section class="hold">
            <div class="container">
            <?php if( have_rows('caixa_principal') ):
		        while( have_rows('caixa_principal') ) : the_row();
		        ?>
                <div class="esquerda">
                    <?php the_sub_field('esquerda') ?>
                </div>
                <div class="direita">
                    <?php the_sub_field('direita') ?>
                </div>
            <?php endwhile; else : endif; ?>
            </div>
        </section>

        <section class="description">
            <div class="container">
            <?php the_field('descricao') ?>
            </div>
        </section>
    </main>


 
<?php get_footer(); ?>