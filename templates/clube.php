<?php 
/* Template Name: Clube Nomad */ 
?>

<?php get_header(); ?>

<main class="clubeNomad">
	<?php if( have_rows('banner') ):
        while( have_rows('banner') ) : the_row();
    ?>
		<section class="main-banner">
			<video autoplay loop playsinline muted src="<?php the_sub_field('video_mp4') ?>"></video>
			<div class="content">
				<img src="<?php the_sub_field('logo') ?>" alt="Clube Nomad" />
				<a class="btn blue" target="_blank" href="<?php the_sub_field('botao') ?>" title="Inscreva-se no Clube Nomad">Inscreva-se</a>
			</div>
		</section>
	<?php endwhile; else : endif; ?>

	<section class="differences">
		<div class="container">
			<h1>O <span>clube de leitura</span> da NomadRoots</h1>

			<?php if( have_rows('diferenciais') ):
		        while( have_rows('diferenciais') ) : the_row();
		    ?>
		    	<div class="glider-contain">
			    	<div class="glider">
				    	<?php if( have_rows('topicos') ): ?>
				    		<?php while( have_rows('topicos') ): the_row(); ?>
				    			<div>
				    				<h3><?php the_sub_field('titulo'); ?></h3>
				    				<?php the_sub_field('descricao'); ?>
				    			</div>
				    		<?php endwhile; ?>
				    	<?php endif; ?>				    	
				    </div>
				    <button class="glider-prev">&lsaquo;</button>
			        <button class="glider-next">&rsaquo;</button>

			        <a class="btn" target="_blank" href="<?php the_sub_field('botao') ?>" title="Comece seu percurso aqui">Comece seu percurso aqui</a>
				</div>
			<?php endwhile; else : endif; ?>

		</div>
	</section>

	<section class="steps">
		<div class="container">
			<?php if( have_rows('como_funciona') ):
		        while( have_rows('como_funciona') ) : the_row();
		    ?>

		    <h2><?php the_sub_field('titulo'); ?></h2>

		    	<div class="glider-contain">
			    	<div class="stps">
				    	<?php if( have_rows('topicos') ): ?>
				    		<?php while( have_rows('topicos') ): the_row(); ?>
				    			<div>
				    				<div class="img" style="background-image: url('<?php the_sub_field('simbolos'); ?>')"></div>

				    				<div class="content">
				    					<h3><span><?php the_sub_field('titulo'); ?></span></h3>
					    				<?php the_sub_field('descricao'); ?>
					    			</div>
				    			</div>
				    		<?php endwhile; ?>
				    	<?php endif; ?>				    	
				    </div>
				    <button class="glider-prev stprev">&lsaquo;</button>
			        <button class="glider-next stpnext">&rsaquo;</button>
				</div>
			<?php endwhile; else : endif; ?>
		</div>		
	</section>

	<section class="places">
		<div class="container">
			<?php if( have_rows('para_onde_ja_fomos') ):
		        while( have_rows('para_onde_ja_fomos') ) : the_row();
		    ?>
				<div class="content">
					<h2><span><?php the_sub_field('titulo'); ?></span></h2>
					<?php the_sub_field('texto'); ?>
					<a class="btn" target="_blank" href="<?php the_sub_field('botao') ?>" title="Inscreva-se no Clube Nomad">Inscreva-se</a>
				</div>
				<div class="image">
					<div class="glider-contain">
				    	<div class="where">
					    	<?php if( have_rows('carousel') ): ?>
					    		<?php while( have_rows('carousel') ): the_row(); ?>
					    			<div>
										<div class="img"><img src="<?php the_sub_field('imagem') ?>"/></div>
										<div class="legend"><?php the_sub_field('legenda_da_imagem'); ?></div>
									</div>
					    		<?php endwhile; ?>
					    	<?php endif; ?>				    	
					    </div>
					    <button class="glider-prev whr">&lsaquo;</button>
				        <button class="glider-next whr">&rsaquo;</button>
					</div>
				</div>
			<?php endwhile; else : endif; ?>
		</div>
	</section>

	<section class="mediador">
		<div class="container">
			<?php if( have_rows('mediador') ):
		        while( have_rows('mediador') ) : the_row();
		    ?>
		    	<h2><?php the_sub_field('titulo'); ?></h2>
				<h3><?php the_sub_field('subtitulo'); ?></h3>

				<div class="content">
					<div class="image">
						<img src="<?php the_sub_field('imagem') ?>"/>
					</div>
					<div class="text">
						<div class="selo"></div>
						<?php the_sub_field('descricao'); ?>
					</div>			
				</div>
			<?php endwhile; else : endif; ?>
		</div>
	</section>

	<section class="next-books">
		<div class="container">
			<?php if( have_rows('proximos_destinos') ):
		        while( have_rows('proximos_destinos') ) : the_row();
		    ?>

		    <h2><span><?php the_sub_field('titulo'); ?></span></h2>
		    <p><?php the_sub_field('subtitulo'); ?></p>
		    	<div class="flex">
			    	<div class="glider-contain">
				    	<div class="books">
					    	<?php if( have_rows('livros') ): ?>
					    		<?php while( have_rows('livros') ): the_row(); ?>
					    			<div>
										<p class="center"><?php the_sub_field('data'); ?></p>
										<div class="image">
											<img src="<?php the_sub_field('capa') ?>"/>
										</div>
										<?php the_sub_field('informacoes'); ?>
					    			</div>
					    		<?php endwhile; ?>
					    	<?php endif; ?>				    	
					    </div>
					    <button class="glider-prev nB">&lsaquo;</button>
			        	<button class="glider-next nB">&rsaquo;</button>
					</div>

					<div class="newsletter">
						<h3><?php the_sub_field('titulo_mailchimp'); ?></h3>
						<?php echo do_shortcode(get_sub_field('mailchimp')); ?>
					</div>
				</div>
			<?php endwhile; else : endif; ?>
		</div>		
	</section>

	<section class="clubeN">
		<div class="container">
			<?php if( have_rows('clube_nomad') ):
		        while( have_rows('clube_nomad') ) : the_row();
		    ?>
		    	<div class="content">
		    		<h2><?php the_sub_field('titulo'); ?></h2>
					<?php the_sub_field('mini_texto'); ?>
		    	</div>

				<div class="price">
					<div class="value">
						<span>R$<?php the_sub_field('valor'); ?></span> /por mês
					</div>
					<a class="btn" target="_blank" href="<?php the_sub_field('botao') ?>" title="Inscreva-se no Clube Nomad">Inscreva-se</a>	
				</div>
			<?php endwhile; else : endif; ?>
		</div>
	</section>

	<section class="testimonials">
		<div class="container">
			<h3>Quem já deu a volta ao mundo diz:</h3>

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
			                'terms' => array( 'clube' ),
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

	<section class="turmas">
		<div class="container">
			<?php if( have_rows('turma_presencial') ):
		        while( have_rows('turma_presencial') ) : the_row();
		        ?>
		        <div class="image">
	        		<img src="<?php the_sub_field('imagem') ?>" />
	        	</div>
	        	<div class="content">
			        <h3><span><?php the_sub_field('titulo') ?></span></h3>
			        <?php the_sub_field('texto') ?>
			        <div class="btns">
			        	<button onclick="popup()" class="btn outline">Saiba mais</button>
			        	<a href="<?php the_sub_field('botao_inscreva-se') ?>" title="" class="btn">Inscreva-se</a>
			        </div>

			        <div class="turmaPopup">
				    	<button onclick="popup()" class="close">Fechar</button>
				    	<?php the_sub_field('saiba_mais') ?>
				    </div>
			    </div>
		    <?php endwhile; else : endif; ?>
		</div>
	</section>

	<section class="faq">
		<div class="container">
			<?php if( have_rows('faq') ):
		        while( have_rows('faq') ) : the_row();
		    ?>			    
	        	<div class="flex">
	        		<div class="content">
				        <h3><?php the_sub_field('titulo') ?></h3>
				        <p><?php the_sub_field('texto') ?></p>

				        <button class="down" onclick="faq()">Ver perguntas</button>
				    </div>
				    <div class="image">
		        		<img src="<?php the_sub_field('icone') ?>" />
		        	</div>
	        	</div>
			<?php endwhile; else : endif; ?>
			<div class="faqBox">
				<?php echo do_shortcode('[sp_easyaccordion id="2112"]'); ?>
			</div>
		</div>		
	</section>

	<?php if( have_rows('encontros_nomad') ):
	    while( have_rows('encontros_nomad') ) : the_row();
	?>
		<?php 
		if( get_sub_field('ativo') == 'true' ) { ?>
		<section class="meetNomad">
			<div class="container">
				<div class="title">
					<h2>Próximas <span>viagens literárias</span></h2>
					<p><?php the_sub_field('descricao') ?></p>
				</div>

				<div class="glider-contain">
			        <div class="meets">
			        	<?php
					    $new_loop = new WP_Query( array(
					    'post_type' => 'encontro-nomad',
					    'posts_per_page' => 6,
					    'tax_query' => array(
				            array(
				                'taxonomy' => 'sessao-do-encontro',
				                'field' => 'slug',
				                'terms' => array( 'clube' ),
				            ),
				        ),
					    ) ); ?>

					    <?php if ( $new_loop->have_posts() ) : ?>
					    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

			            <div>
			            	<div class="image">
			            		<a target="_blank" href="<?php the_field('link') ?>"><?php  if ( has_post_thumbnail() ) {
									    the_post_thumbnail();
									} ?></a>
								</div>
			            	<a target="_blank"  class="content" href="<?php the_field('link') ?>">
			            		<h4><span><?php the_title(); ?></span></h4> 
			            		<div class="date">- <?php the_field('data') ?></div>
			            	</a>
			            </div>
		
			            <?php endwhile; else: endif;?>
						<?php wp_reset_query(); ?>
			        </div>
			        <button class="glider-prev meet">&lsaquo;</button>
			        <button class="glider-next meet">&rsaquo;</button>
			    </div>
			</div>
		</section>
		<?php } ?>
	<?php endwhile; else : endif; ?>

	<section class="duvidas">
		<div class="container">
			<?php if( have_rows('duvidas') ):
		        while( have_rows('duvidas') ) : the_row();
		        ?>
		        <div class="image">
	        		<img src="<?php the_sub_field('imagem') ?>" />
	        	</div>
	        	<div class="content">
			        <h3><?php the_sub_field('titulo') ?></h3>
			        <p><?php the_sub_field('texto') ?></p>

			        <a href="<?php the_sub_field('botao-se') ?>" target="_blank" class="btn">Fale com a gente</a>
			    </div>
		    <?php endwhile; else : endif; ?>
		</div>
	</section>
</main>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/clube.js"></script>


<?php get_footer(); ?>