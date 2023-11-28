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
                    <a href="<?php the_field('comprar_viagem') ?>" title="Comprar viagem" class="btn">Garanta sua vaga</a>
                </div>
            <?php endwhile; else : endif; ?>
            </div>
        </section>

        <section class="description">
            <div class="container">
                <div class="metade">
                    <?php the_field('descricao') ?>
            </div>
            </div>
        </section>

        <section class="guia">
            <div class="container">
                <h3><?php the_field('titulo_da_sessao') ?></h3>

                <div class="glider-contain">
                    <div class="guiaCarousel">
                        <?php if( have_rows('guias') ): ?>
                            <?php while( have_rows('guias') ): the_row(); ?>
                                <div class="content">
                                    <div class="image">
                                        <img src="<?php the_sub_field('imagem') ?>" />
                                    </div>
                                    <div class="hold">			    						
                                        <div class="name"><?php the_sub_field('nome') ?></div>
                                        <div class="bio"><?php the_sub_field('mini_descricao') ?></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>				    	
                    </div>
                    <button class="glider-prev gC">&lsaquo;</button>
                    <button class="glider-next gC">&rsaquo;</button>
                </div>
            </div>
        </section>
    </main>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/single.js"></script>
 
<?php get_footer(); ?>