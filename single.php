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
                <div class="mapa">
                    <img src="<?php the_field('mapa') ?>" alt="mapa" />
                </div>
            </div>
        </section>

        <?php 
		if( get_field('ativar_sessao_1') == 'true' ) { ?>		
            <section class="guias">
                <div class="container">
                    <h3><?php the_field('titulo_da_sessao') ?></h3>

                    <div class="glider-contain">
                        <div class="guiaCarousel">
                            <?php if( have_rows('guias') ): ?>
                                <?php while( have_rows('guias') ): the_row(); ?>
                                    <div class="guia">
                                        <div class="image">
                                            <img src="<?php the_sub_field('imagem') ?>" />
                                        </div>
                                        <div class="content">			    						
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
        <?php }?>

        <?php 
		if( get_field('ativar_sessao_2') == 'true' ) { ?>	
            <section class="viagemLeitura">
                <div class="container">
                    <h3><?php the_field('titulo_da_sessao_2') ?></h3>
                    <div class="itens">
                        <?php if( have_rows('itens') ): ?>
                            <?php while( have_rows('itens') ): the_row(); ?>
                            <div class="item">
                                <div class="image">
                                    <img src="<?php the_sub_field('imagem') ?>" />
                                </div>
                                <div class="content">			    						
                                    <?php the_sub_field('mini_texto') ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>	
                    </div>
                </div>
            </section>
        <?php }?>

        <?php 
		if( get_field('ativar_sessao_3') == 'true' ) { ?>		
            <section class="livroEAutor">
                <div class="container">
                <h3><?php the_field('titulo_da_sessao') ?></h3>

                    <div class="livroSessao">
                        <h4><?php the_field('segundo_titulo') ?></h4>
                        <div class="glider-contain">
                            <div class="livroItem">
                                <?php if( have_rows('livros') ): ?>
                                    <?php while( have_rows('livros') ): the_row(); ?>
                                        <div class="livro">
                                            <div class="image">
                                                <img src="<?php the_sub_field('capa') ?>" />
                                            </div>
                                            <div class="content">			    						
                                                <div class="name"><?php the_sub_field('nome_do_livro') ?></div>
                                                <div class="bio"><?php the_sub_field('sinopse') ?></div>
                                                <p><a href="<?php the_sub_field('link_de_compra') ?>" title="compre esse livro">Compre o seu aqui</a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>				    	
                            </div>
                            <button class="glider-next lC">&rsaquo;</button>
                        </div>
                    </div>

                    <div class="autorSessao">
                        <h4><?php the_field('terceiro_titulo') ?></h4>
                        <div class="glider-contain">
                            <div class="autorItem">
                                <?php if( have_rows('autores') ): ?>
                                    <?php while( have_rows('autores') ): the_row(); ?>
                                        <div class="autor">
                                            <div class="image">
                                                <img src="<?php the_sub_field('imagem') ?>" />
                                            </div>
                                            <div class="content">			    						
                                                <div class="name"><?php the_sub_field('nome') ?></div>
                                                <div class="bio"><?php the_sub_field('descricao') ?></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>				    	
                            </div>
                            <button class="glider-next aC">&rsaquo;</button>
                        </div>
                    </div>
                </div>
            </section>
        <?php }?>

        <section class="roteiro">
            <div class="container">
                <h3><?php the_field('titulo_roteiro') ?></h3>
                <div class="data"><span><?php the_field('dias') ?></span></div>
                                   
                <div class="glider-contain">
                    <div class="roteiroCarousel">
                        <?php if( have_rows('roteiro') ): ?>
                            <?php while( have_rows('roteiro') ): the_row(); ?>
                                <div class="content">
                                    <div class="imagem">
                                        <img src="<?php the_sub_field('imagem') ?>" />
                                    </div>
                                    <div class="roteiroTexto">
                                        <?php the_sub_field('texto') ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>	
                    </div>
                    <button class="glider-next rC">&rsaquo;</button>
                </div>

                <a href="#" class="btn">Garanta sua vaga</a>
            </div>
        </section>  
        
        <section class="testimonials">
		<div class="container">
			<h3>Quem leu o mundo em grupo com a gente</h3>

			<div class="glider-contain">
		        <div class="testimonial">
		        	<?php
				    $new_loop = new WP_Query( array(
				    'post_type' => 'depoimento',
				    'posts_per_page' => 10,
				    'tax_query' => array(
			            array(
			                'taxonomy' => 'area-do-depoimento',
			                'field' => 'slug',
			                'terms' => array( 'home' ),
			            ),
			        ),
				    ) ); ?>

				    <?php if ( $new_loop->have_posts() ) : ?>
				    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

		            <div>
		            	<div class="aspas"></div>
		            	<?php the_content(); ?>
	            		<div class="name"><?php the_title(); ?></div> 
		            </div>
	
		            <?php endwhile; else: endif;?>
					<?php wp_reset_query(); ?>
		        </div>
		        <button class="glider-prev ttm">&lsaquo;</button>
		        <button class="glider-next ttm">&rsaquo;</button>
		    </div>
		</div>
	</section>

    <section class="buy">
    <?php
global $product;

?>
<?php echo $product->get_price_html(); ?>

<table class="woocommerce-product-attributes shop_attributes">
	<?php foreach ( $product_attributes as $product_attribute_key => $product_attribute ) : ?>
		<tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php echo esc_attr( $product_attribute_key ); ?>">
			<th class="woocommerce-product-attributes-item__label"><?php echo wp_kses_post( $product_attribute['label'] ); ?></th>
			<td class="woocommerce-product-attributes-item__value"><?php echo wp_kses_post( $product_attribute['value'] ); ?></td>
		</tr>
	<?php endforeach; ?>
</table>
<a href="<?php get_permalink( $post->ID ); ?>">Add to cart</a>
    </section>

    </main>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/single.js"></script>
 
<?php get_footer(); ?>