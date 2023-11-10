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
		            		<span class="status"><?php the_field('tipo_de_viagem') ?></span>

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
					        	<a href="<?php the_sub_field('comprar_viagem-se') ?>" title="" class="btn">Comprar viagem</a>
					        	<button class="verRoteiro btn outline">Ver roteiro completo</button>
					        </div>
					        <div class="roteiro">
					        	<button class="close">Fechar</button>
				            	<div class="texto">
				            		<h4>Roteiro completo</h4>
						        	<?php the_field('roteiro'); ?>
						        	<br />
						        	<a href="<?php the_sub_field('comprar_viagem-se') ?>" title="" class="btn">Comprar viagem</a>
						        </div>
					        </div>					        
		            	</div>		            	
		            </div>		            
		        </li>
		
	            <?php endwhile; else: endif;?>
				<?php wp_reset_query(); ?>
			</ul>

			<div class="btn-trips">
				<a class="btn" href="#">Ver todas as viagens</a>
			</div>
		</div>
	</section>

	<section class="previousTrips">
		<div class="container">
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
			    		<div class="img"></div>
			    		<div class="content">
			    			<span class="status">
<?php   // Get terms for post
 $terms = get_the_terms( $post->ID , 'status-da-viagem' );
 // Loop over each item since it's an array
 if ( $terms != null ){
 foreach( $terms as $term ) {
 // Print the name method from $term which is an OBJECT
 print $term->slug ;
 // Get rid of the other data stored in the object, since it's not needed
 unset($term);
} } ?>
														</span>
			    			<h5><?php the_title(); ?></h5>
			    			<div class="information">
		            			<p><?php the_field('local') ?></p>
		            			<span><?php the_field('data') ?></span>
		            		</div>
		            		<div class="description">
		            			<p><?php the_field('mini_descricao') ?></p>
		            		</div>
			    		</div>
			    	</li>
			    <?php endwhile; else: endif;?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</section>

	<section class="testimonials">
		<div class="container">
			<h3>Quem leu o mundo com a gente</h3>

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

	<section class="contact">
		<div class="container">
	        <div class="content">
	        	<h3><?php the_field('titulo_ct') ?></h3>
		        <a href="<?php the_field('botao') ?>" title="" target="_blank" class="btn">Fale com a gente</a>
		    </div>
		    <div class="image">
        		<img src="<?php the_field('imagem') ?>" alt="NomadRoots" />
        	</div>
		</div>
	</section>

</main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/grupo.js"></script>

<?php get_footer(); ?>