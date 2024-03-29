<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css" type="text/css" media="screen" />


    <main class="singleGroup">
        <section class="main-banner" style="background-image: url('<?php the_field('imagem_destaque') ?>')">
            <div class="content">
                <h1><?php the_title(); ?></h1>
                <div class="data"><?php the_field('data') ?></div>
                <a href="<?php the_permalink();?>#comprar" title="" class="btn">Compre agora</a>
            </div>
        </section>

        <section class="hold">
            <div class="container">
            <?php if( have_rows('caixa_principal') ):
		        while( have_rows('caixa_principal') ) : the_row();
		        ?>
                <div class="esquerda">
                    <div>
                        <h2><?php the_sub_field('titulo') ?></h2>
                        <h3><?php the_sub_field('subtitulo') ?></h3>
                    </div>
                    <div>
                        <div class="title2"><?php the_sub_field('data') ?></div>
                        <p><?php the_sub_field('saida') ?></p>
                    </div>
                </div>
                <div class="direita">
                    <div>
                        <div class="title2"><?php the_sub_field('dias') ?></div>
                        <p><?php the_sub_field('frase') ?></p>                        
                    </div>
                    <?php the_sub_field('quartos_e_valores') ?>
                    <a href="<?php the_permalink();?>#comprar" title="" class="btn">Garanta sua vaga</a>
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

                    <?php 
		            if( get_field('numero_de_guias') == '3+' ) { ?>	
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
                    <?php }?>

                    <?php 
		            if( get_field('numero_de_guias') == '1 a 2' ) { ?>	
                            <div class="guiaCarousel2">
                                <?php if( have_rows('guias_pequeno') ): ?>
                                    <?php while( have_rows('guias_pequeno') ): the_row(); ?>
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
                    <?php }?>
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
                    <a href="<?php the_permalink();?>#comprar" title="" class="btn"><?php the_field('botao') ?></a>
                </div>
            </section>
        <?php }?>

        <?php 
		if( get_field('ativar_sessao_3') == 'true' ) { ?>

            <section class="livroEAutor">
                <div class="container">
                <h3><?php the_field('titulo_da_sessao_3') ?></h3>

                <?php if( get_field('livros_em_carousel') == 'Sim' ) { ?>	
                    <div class="livroSessao">
                        <h4><?php the_field('segundo_titulo') ?></h4>
                        <div class="glider-contain">
                            <div class="livroItem LivroCarousel">
                                <?php if( have_rows('livros') ): ?>
                                    <?php while( have_rows('livros') ): the_row(); ?>
                                        <div class="livro">
                                            <div class="image">
                                                <img src="<?php the_sub_field('capa') ?>" />
                                            </div>
                                            <div class="content">			    						
                                                <div class="name"><?php the_sub_field('nome_do_livro') ?></div>
                                                <div class="bio"><?php the_sub_field('sinopse') ?></div>
                                                <p><a target="_blank" href="<?php the_sub_field('link_de_compra') ?>" title="compre esse livro">Compre o seu aqui</a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>				    	
                            </div>
                            <button class="glider-next lC">&rsaquo;</button>
                        </div>
                    </div>
                <?php }?>

                <?php if( get_field('livros_em_carousel') == 'Não' ) { ?>	
                    <div class="livroSessao">
                        <h4><?php the_field('segundo_titulo') ?></h4>
                            <div class="livroItem">
                                <?php if( have_rows('livro_unico') ): ?>
                                    <?php while( have_rows('livro_unico') ): the_row(); ?>
                                        <div class="livro">
                                            <div class="image">
                                                <img src="<?php the_sub_field('capa') ?>" />
                                            </div>
                                            <div class="content">			    						
                                                <div class="name"><?php the_sub_field('nome_do_livro') ?></div>
                                                <div class="bio"><?php the_sub_field('sinopse') ?></div>
                                                <p><a target="_blank" href="<?php the_sub_field('link_de_compra') ?>" title="compre esse livro">Compre o seu aqui</a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>				    	
                            </div>
                    </div>
                <?php }?>
                
                <?php if( get_field('autor_em_carousel') == 'Sim' ) { ?>	
                    <div class="autorSessao">
                        <h4><?php the_field('terceiro_titulo') ?></h4>
                        <div class="glider-contain">
                            <div class="autorItem autorCarousel">
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
                <?php }?>

                <?php if( get_field('autor_em_carousel') == 'Não' ) { ?>	
                    <div class="autorSessao">
                        <h4><?php the_field('terceiro_titulo') ?></h4>
                        <div class="autorItem ">
                            <?php if( have_rows('autor_unico') ): ?>
                                <?php while( have_rows('autor_unico') ): the_row(); ?>
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
                    </div>
                <?php }?>
                </div>
            </section>
        <?php }?>

        <?php 
		if( get_field('ativar_sessao_4') == 'true' ) { ?>	
        <section class="playlist">
            <div class="container">
                <?php the_field('playlist'); ?>
            </div>
        </section>
        <?php }?>

        <section class="roteiro">
            <div class="container">
                <h3><?php the_field('titulo_roteiro') ?></h3>                
                                   
                <div class="glider-contain">

                <div class="flex-dots-arrow">
                    <button class="glider-prev rC">&lsaquo;</button>
                    <div id="dots" class=""></div>
                    <button class="glider-next rC">&rsaquo;</button>
                </div>
                    
                    <div class="roteiroCarousel">
                        <?php if( have_rows('roteiro') ): ?>
                            <?php while( have_rows('roteiro') ): the_row(); ?>    
                                <div>
                                    <div class="content">                                
                                        <div class="imagem">
                                            <img src="<?php the_sub_field('imagem') ?>" />
                                        </div>
                                        <div class="roteiroTexto">
                                            <?php the_sub_field('texto') ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>	
                    </div>                    
                </div>

                <a href="<?php the_permalink();?>#comprar" title="" class="btn"><?php the_field('botao') ?></a>
            </div>
        </section>  

        <?php 
		if( get_field('ativar_sessao_6') == 'true' ) { ?>	
        <div class="hotel">
            <section class="container">
                <h3><?php the_field('titulo_hotel') ?></h3>

                <div class="glider-contain">
                    <div class="hotelCarousel">
                        <?php if( have_rows('hotel') ): ?>
                            <?php while( have_rows('hotel') ): the_row(); ?>
                                <div class="content">                                    
                                    <div class="texto">
                                        <h4><?php the_sub_field('nome') ?></h4>
                                        <p><?php the_sub_field('mini_descricao') ?></p>

                                        <?php if( get_sub_field('link') ): ?>
                                            <a href="<?php the_sub_field('link'); ?>" class="linkbtn">Ver mais fotos</a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="imagem">
                                        <img src="<?php the_sub_field('imagem') ?>" />
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>	
                    </div>
                    <button class="glider-prev hC">&lsaquo;</button>
                    <button class="glider-next hC">&rsaquo;</button>
                </div>
            </section>
        </div>
        <?php }?>
        
        <section class="testimonials">
            <h3>Quem leu o mundo em grupo com a gente</h3>

            <div class="glider-contain">
                <div class="galeria">
                    <?php if( have_rows('galeria') ): ?>
                        <?php while( have_rows('galeria') ): the_row(); ?>
                            <div class="imagem">
                                <img src="<?php the_sub_field('imagem') ?>" />
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>				    	
                </div>
                <button aria-label="Previous" class="glider-prev g">&lsaquo;</button>
                <button aria-label="Next" class="glider-next g">&rsaquo;</button>
            </div>

            <div class="container">		

                <div class="testimonial">
                    <?php if( have_rows('depoimentos') ): ?>
                        <?php while( have_rows('depoimentos') ): the_row(); ?>
                            <div class="item">
                                <div class="aspas"></div>
                               <p> <?php the_sub_field('texto') ?></p>
                                <div class="name"><?php the_sub_field('nome') ?></div> 
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>	
                </div>
            </div>		
	</section>

    <?php while ( have_posts() ) : ?>
    <?php the_post(); ?>
        <div id="comprar" class="buy" style="background-image: url('<?php the_field('imagem_destaque') ?>')">
            <div class="black">
                <div class="container">
                        <h2><?php the_field('titulo_compra') ?></h2>
                        <?php the_field('informacoes') ?>  
                            <p class="preco <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
                        <div class="relative">                       
                            <?php do_action( 'woocommerce_single_product_summary' ); ?>  
                        </div>
                                      
                </div>
            </div>
        </div>

        <?php 
		if( get_field('ativar_sessao_8') == 'true' ) { ?>
        <section class="faq">
            <div class="container">                			    
                    <div class="flex">
                        <div class="content">
                            <h3><?php the_field('titulo_faq') ?></h3>
                            <p><?php the_field('mini_texto_faq') ?></p>

                            <button class="down" onclick="faq()">Ver perguntas</button>
                        </div>
                        <div class="image">
                            <img src="<?php the_field('simbolo_faq') ?>" />
                        </div>
                    </div>                

                    <div class="faqBox">
                        <?php if( have_rows('perguntas') ): ?>
                            <?php while( have_rows('perguntas') ): the_row(); ?>
                                <div class="duvida">
                                    <div class="question"><?php the_sub_field('duvida') ?></div>
                                    <div class="answer"><?php the_sub_field('resposta') ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>	
                    </div>
            </div>		
        </section>
        <?php }?>

        <div class="relateds">
            <section class="container">
                <?php do_action( 'woocommerce_after_single_product_summary'); ?>  
            </section>
        </div>
    <?php endwhile;  ?>
   

    </main>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(function () {
    $(".question").click(function () {
        var perguntaAtual = $(this);
        var respostaAtual = perguntaAtual.next('.answer');
        
        respostaAtual.slideToggle();

        var todasPerguntas = $(".question").not(perguntaAtual);
        todasPerguntas.removeClass('aberta');
        
        var respostasVisiveis = $('.answer:visible').not(respostaAtual);

        if (respostasVisiveis.length > 0) {
            respostasVisiveis.slideUp();
        }

        perguntaAtual.toggleClass('aberta');
    });
});

</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/single.js"></script>
 
<?php get_footer(); ?>