<?php 
/* Template Name: Grupos Nomad */ 
?>

<?php get_header(); ?>

<main class="groupNomad">
	<section class="main-banner" style="background-image: url('<?php the_field('imagem_destacada') ?>')">
		<div class="content">
			<div class="groupName"><span>Grupo</span>Nomad</div>
			<h1><?php the_field('titulo_h1') ?></h1>
			<a href="<?php the_field('link') ?>" class="btn" target="_blank" title="<?php the_field('texto_do_botao') ?>"><?php the_field('texto_do_botao') ?></a>
		</div>
	</section>

	<section class="nomads">
		<div class="container">
			<?php the_field('descricao') ?>      		
		</div>
	</section>

	<section class="nextTrips">
		<div class="container">
			<h2>Próximas viagens</h2>

			<ul>
				<?php
			    $new_loop = new WP_Query( array(
			    'post_type' => 'grupo-nomad',
			    'posts_per_page' => 2,
			    'tax_query' => array(
		            array(
		                'taxonomy' => 'status-da-viagem',
		                'field' => 'slug',
		                'terms' => array( 'proximas-viagens' ),
		            ),
		        ),
			    ) ); ?>

			    <?php if ( $new_loop->have_posts() ) : ?>
			    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

		            <li>
		            	<div class="flex">
		            	<div class="carousel">
		            		<span><?php the_field('tipo_de_viagem') ?></span>

		            		<div class="glider-contain">
						    	<div class="glider">
							    	<?php if( have_rows('carousel') ): ?>
							    		<?php while( have_rows('carousel') ): the_row(); ?>
												<div>
													<div class="img"><img src="<?php the_sub_field('imagem') ?>"/></div>
												</div>
							    		<?php endwhile; ?>
							    	<?php endif; ?>				    	
							    </div>
							    <button class="glider-prev">&lsaquo;</button>
						        <button class="glider-next">&rsaquo;</button>
							</div>

		            	</div>
		            	<div class="content">
		            		<h3><?php the_title(); ?></h3>
		            		<div class="information">
		            			<p><?php the_field('local') ?></p>
		            			<span><?php the_field('data') ?></span>
		            		</div>
		            		<div class="description">
		            			<p><?php the_field('mini_descricao') ?></p>
		            		</div>
		            		<div class="btns">
					        	<button onclick="popup()" class="btn outline popup">Ver roteiro completo</button>
					        	<a href="<?php the_sub_field('comprar_viagem-se') ?>" title="" class="btn">Comprar viagem</a>
					        </div>					        
		            	</div>		            	
		            </div>
		            <div class="roteiro">
		            	<h4>Roteiro completo</h4>
			        	<?php the_field('roteiro'); ?>
			        </div>
		        </li>
		
	            <?php endwhile; else: endif;?>
				<?php wp_reset_query(); ?>
			</ul>

		</div>
	</section>

</main>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/grupo.js"></script>

<?php get_footer(); ?>