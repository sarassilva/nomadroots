<?php 
/* Template Name: Roteiros Nomad */ 
?>

<?php get_header(); ?>

<main class="roteirosNomad">
	<section class="main-banner" style="background-image: url('<?php the_field('imagem_principal') ?>')">
		<div class="content">
			<h1><?php the_field('titulo') ?></h1>
			<h2><?php the_field('subtitulo') ?></h2>
			<a class="btn" href="<?php echo get_home_url(); ?>/roteiros/#nomads" title="COMECE SUA EXPERIÊNCIA">COMECE SUA EXPERIÊNCIA</a>
		</div>
	</section>

	<section class="nomads" id="nomads">
		<div class="container">
			<?php the_field('descricao') ?>      		
		</div>
	</section>

	<section class="destinos">
		<div class="container">
			<h2><?php the_field('titulo_destinos') ?></h2>

			<div class="roteiros-hold">
				<h3><span><?php the_field('titulo_roteiro_um') ?></span></h3>

				<div class="glider-contain">
		        <div class="roteiro1">
		        	<?php
				    $new_loop = new WP_Query( array(
				    'post_type' => 'roteiro',
				    'posts_per_page' => 10,
				    'tax_query' => array(
			            array(
			                'taxonomy' => 'destino',
			                'field' => 'slug',
			                'terms' => array( 'roteiro-1' ),
			            ),
			        ),
				    ) ); ?>

				    <?php if ( $new_loop->have_posts() ) : ?>
				    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

		            <div>
		            	<div class="image">
		            		<?php  if ( has_post_thumbnail() ) {
							    the_post_thumbnail();
							} ?>
			            	<div class="title">
			            		<h4><?php the_title(); ?></h4>
			            		<p class="subtitle"><?php the_field('subtitulo') ?>  </p>
			            	</div>
		            	</div>
		            </div>
	
		            <?php endwhile; else: endif;?>
					<?php wp_reset_query(); ?>
		        </div>
		        <button class="glider-prev roteiro-um">&lsaquo;</button>
		        <button class="glider-next roteiro-um">&rsaquo;</button>
		    </div>
			</div>

			<div class="roteiros-hold">
				<h3><span><?php the_field('titulo_roteiro_dois') ?></span></h3>

				<div class="glider-contain">
		        <div class="roteiro2">
		        	<?php
				    $new_loop = new WP_Query( array(
				    'post_type' => 'roteiro',
				    'posts_per_page' => 10,
				    'tax_query' => array(
			            array(
			                'taxonomy' => 'destino',
			                'field' => 'slug',
			                'terms' => array( 'roteiro-2' ),
			            ),
			        ),
				    ) ); ?>

				    <?php if ( $new_loop->have_posts() ) : ?>
				    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

		            <div>
		            	<div class="image">
		            		<?php  if ( has_post_thumbnail() ) {
							    the_post_thumbnail();
							} ?>
			            	<div class="title">
			            		<h4><?php the_title(); ?></h4>
			            		<p class="subtitle"><?php the_field('subtitulo') ?>  </p>
			            	</div>
		            	</div>
		            </div>
	
		            <?php endwhile; else: endif;?>
					<?php wp_reset_query(); ?>
		        </div>
		        <button class="glider-prev roteiro-dois">&lsaquo;</button>
		        <button class="glider-next roteiro-dois">&rsaquo;</button>
		    </div>
			</div>

			<div class="roteiros-hold">
				<h3><span><?php the_field('titulo_roteiro_tres') ?></span></h3>

				<div class="glider-contain">
		        <div class="roteiro3">
		        	<?php
				    $new_loop = new WP_Query( array(
				    'post_type' => 'roteiro',
				    'posts_per_page' => 10,
				    'tax_query' => array(
			            array(
			                'taxonomy' => 'destino',
			                'field' => 'slug',
			                'terms' => array( 'roteiro-3' ),
			            ),
			        ),
				    ) ); ?>

				    <?php if ( $new_loop->have_posts() ) : ?>
				    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

		             <div>
		            	<div class="image">
		            		<?php  if ( has_post_thumbnail() ) {
							    the_post_thumbnail();
							} ?>
			            	<div class="title">
			            		<h4><?php the_title(); ?></h4>
			            		<p class="subtitle"><?php the_field('subtitulo') ?>  </p>
			            	</div>
		            	</div>
		            </div>
	
		            <?php endwhile; else: endif;?>
					<?php wp_reset_query(); ?>
		        </div>
		        <button class="glider-prev roteiro-tres">&lsaquo;</button>
		        <button class="glider-next roteiro-tres">&rsaquo;</button>
		    </div>
			</div>

			<div class="roteiros-hold">
				<h3><span><?php the_field('titulo_roteiro_quatro') ?></span></h3>

				<div class="glider-contain">
		        <div class="roteiro4">
		        	<?php
				    $new_loop = new WP_Query( array(
				    'post_type' => 'roteiro',
				    'posts_per_page' => 10,
				    'tax_query' => array(
			            array(
			                'taxonomy' => 'destino',
			                'field' => 'slug',
			                'terms' => array( 'roteiro-4' ),
			            ),
			        ),
				    ) ); ?>

				    <?php if ( $new_loop->have_posts() ) : ?>
				    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

		            <div>
		            	<div class="image">
		            		<?php  if ( has_post_thumbnail() ) {
							    the_post_thumbnail();
							} ?>
			            	<div class="title">
			            		<h4><?php the_title(); ?></h4>
			            		<p class="subtitle"><?php the_field('subtitulo') ?>  </p>
			            	</div>
		            	</div>
		            </div>
	
		            <?php endwhile; else: endif;?>
					<?php wp_reset_query(); ?>
		        </div>
		        <button class="glider-prev roteiro-quatro">&lsaquo;</button>
		        <button class="glider-next roteiro-quatro">&rsaquo;</button>
		    </div>
			</div>
		</div>
	</section>

	<section class="steps">
		<div class="container">
			<div class="titles">
				<h2><?php the_field('titulo_passo') ?></h2>
				<p class="subtitle"><?php the_field('mini_texto_passo') ?></p>
			</div>

			<div class="stps">
		    	<?php if( have_rows('passo_a_passo') ): ?>
		    		<?php while( have_rows('passo_a_passo') ): the_row(); ?>

		    			<div class="hold">  			
							
		    				<button class="number">
	    						<span><?php the_sub_field('numero'); ?>. <?php the_sub_field('titulo'); ?></span>
	    					</button>

	    					<div class="contnt">
	    						<div class="image">
		    						<img src="<?php the_sub_field('imagem'); ?>" />
		    					</div>
		    					<div class="texto">
			    					<?php the_sub_field('texto'); ?>
			    				</div>
		    				</div>
		    			</div>

		    		<?php endwhile; ?>
		    	<?php endif; ?>				    	
		    </div>
		</div>
	</section>

	<section class="testimonials">
		<div class="container">
			<h3>Com a palavra, nossos viajantes-leitores.</h3>

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
			                'terms' => array( 'roteiros' ),
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
		        <a target="_blank" href="<?php the_field('botao_ct') ?>" title="" class="btn">Fale com a gente</a>
		    </div>
		    <div class="image">
        		<img src="<?php the_field('imagem_ct') ?>" alt="NomadRoots" />
        	</div>
		</div>
	</section>
</main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/roteiros.js"></script>


<?php get_footer(); ?>