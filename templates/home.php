<?php 
/* Template Name: Home */ 
?>

<?php get_header(); ?>


<main>

	<section class="video">
		<?php depicter(28); ?>
	</section>

	<section class="nomads">
		<div class="container">
			<?php the_field('nomadroots') ?></h2>        		
		</div>
	</section>

	<section class="roteiros">
		<div class="container">
			<?php if( have_rows('roteiros_nomad') ):
		        while( have_rows('roteiros_nomad') ) : the_row();
		        ?>
		        <div class="content">
		        	<h2><span>Roteiros</span>Nomad</h2>
		        	<h3><?php the_sub_field('subtitulo') ?></h3>

		        	<div class="image mobile">
		        		<div class="glider-contain">
						    <div class="roteiroGliderMobile">
						    	<?php
							    $new_loop = new WP_Query( array(
							    'post_type' => 'roteiro',
							    'posts_per_page' => 10,
							    'tax_query' => array(
						            array(
						                'taxonomy' => 'destino',
						                'field' => 'slug',
						                'terms' => array( 'destaque' ),
						            ),
						        ),
							    ) ); ?>

							    <?php if ( $new_loop->have_posts() ) : ?>
							    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

						        <div>
						        	<a class="interno">
						        		<div class="img">
						            			<?php  if ( has_post_thumbnail() ) {
											    the_post_thumbnail();
											} ?>
										</div>
						            	<div class="legend">
						            		<?php the_field('titulo_longo') ?>			            			
						            	</div>
						        	</a>
						        </div>

						        <?php endwhile; else: endif;?>
								<?php wp_reset_query(); ?>
						    </div>
						    <button class="glider-prev roteiroMobPrev">&lsaquo;</button>
						    <button class="glider-next roteiroMobNext">&rsaquo;</button>
						</div>
		        	</div>

		        	<p><?php the_sub_field('mini_texto') ?></p>
		        	<a href="<?php the_sub_field('descubra') ?>" target="_blank" class="btn">Descubra</a>
				</div>

				<div class="image desktop">
					<div class="glider-contain">
					    <div class="roteiroGlider">
					    	<?php
						    $new_loop = new WP_Query( array(
						    'post_type' => 'roteiro',
						    'posts_per_page' => 10,
						    ) ); ?>

						    <?php if ( $new_loop->have_posts() ) : ?>
						    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

					        <div>
					        	<a class="interno">
					        		<div class="img">
					            			<?php  if ( has_post_thumbnail() ) {
										    the_post_thumbnail();
										} ?>
									</div>
					            	<div class="legend">
					            		<?php the_field('titulo_longo') ?>			            			
					            	</div>
					        	</a>
					        </div>

					        <?php endwhile; else: endif;?>
							<?php wp_reset_query(); ?>
					    </div>
					    <button class="glider-prev roteiroPrev">&lsaquo;</button>
					    <button class="glider-next roteiroNext">&rsaquo;</button>
					</div>
				</div>        
		    <?php endwhile; else : endif; ?>
		</div>
	</section>

	<section class="clube">
		<div class="container">
			<?php if( have_rows('clube_nomad') ):
		        while( have_rows('clube_nomad') ) : the_row();
		        ?>
		        <div class="content">
		        	<h2><span>Clube</span>Nomad</h2>
		        	<h3><?php the_sub_field('subtitulo') ?></h3>

		        	<div class="image mobile">
		        		<div class="img">
		        			<img src="<?php the_sub_field('imagem') ?>" alt="<?php the_sub_field('alt') ?>" />
		        		</div>
		        		<div class="legenda"><?php the_sub_field('legenda') ?></div>
		        	</div>

		        	<p><?php the_sub_field('mini_texto') ?></p>
		        	<a href="<?php the_sub_field('descubra') ?>" target="_blank" class="btn">Descubra</a>
				</div>

				<div class="image desktop">
					<div class="img">
		        		<img src="<?php the_sub_field('imagem') ?>" alt="<?php the_sub_field('alt') ?>" />
		        	</div>
		        	<div class="legenda"><?php the_sub_field('legenda') ?></div>
				</div>        
		    <?php endwhile; else : endif; ?>
		</div>
	</section>

	<section class="group">
		<div class="container">
			<?php if( have_rows('grupos_nomad') ):
		        while( have_rows('grupos_nomad') ) : the_row();
		        ?>
		        <div class="content">
		        	<h2><span>Grupos</span>Nomad</h2>
		        	<h3><?php the_sub_field('subtitulo') ?></h3>

		        	<div class="image mobile">
		        		<div class="glider-contain">
					    <div class="grupoGliderMobile">
					    	<?php
						    $new_loop = new WP_Query( array(
						    'post_type' => 'encontro-nomad',
						    'posts_per_page' => 10,
						    ) ); ?>

						    <?php if ( $new_loop->have_posts() ) : ?>
						    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

					        <div>
					        	<a class="interno">
					        		<div class="img">
					            			<?php  if ( has_post_thumbnail() ) {
										    the_post_thumbnail();
										} ?>
									</div>
					            	<div class="legend">
					            		<strong><?php the_title(); ?></strong>
				            			<span class="subtitle"><?php the_field('data') ?>  </span>		            			
					            	</div>
					        	</a>
					        </div>

					        <?php endwhile; else: endif;?>
							<?php wp_reset_query(); ?>
					    </div>
					    <button class="glider-prev grupoMobPrev">&lsaquo;</button>
					    <button class="glider-next grupoMobNext">&rsaquo;</button>
					</div>
		        	</div>

		        	<p><?php the_sub_field('mini_texto') ?></p>
		        	<a href="<?php the_sub_field('descubra') ?>" target="_blank" class="btn">Descubra</a>
				</div>

				<div class="image desktop">
					<div class="glider-contain">
					    <div class="grupoGlider">
					    	<?php
						    $new_loop = new WP_Query( array(
						    'post_type' => 'encontro-nomad',
						    'posts_per_page' => 10,
						    ) ); ?>

						    <?php if ( $new_loop->have_posts() ) : ?>
						    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

					        <div>
					        	<a class="interno">
					        		<div class="img">
					            			<?php  if ( has_post_thumbnail() ) {
										    the_post_thumbnail();
										} ?>
									</div>
					            	<div class="legend">
					            		<strong><?php the_title(); ?></strong>
				            			<span class="subtitle"><?php the_field('data') ?>  </span>		            			
					            	</div>
					        	</a>
					        </div>

					        <?php endwhile; else: endif;?>
							<?php wp_reset_query(); ?>
					    </div>
					    <button class="glider-prev grupoPrev">&lsaquo;</button>
					    <button class="glider-next grupoNext">&rsaquo;</button>
					</div>
				</div>        
		    <?php endwhile; else : endif; ?>
		</div>
	</section>

	<?php if( have_rows('encontros') ):
        while( have_rows('encontros') ) : the_row();
       ?>
		<?php 
		if( get_sub_field('encontros_nomad') == 'true' ) { ?>
		<section class="meetNomad">
			<div class="container">
				<div class="title">
					<h2><?php the_sub_field('titulo') ?></h2>
					<h3><?php the_sub_field('subtitulo_1') ?></h3>
				</div>
				<p><?php the_sub_field('subtitulo_2') ?></p>

				<div class="glider-contain">
			        <div class="meetGlider">
			        	<?php
					    $new_loop = new WP_Query( array(
					    'post_type' => 'encontro-nomad',
					    'posts_per_page' => 6,
					    ) ); ?>

					    <?php if ( $new_loop->have_posts() ) : ?>
					    <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

			            <div>
			            	<div class="image">
			            		<a href="<?php echo get_permalink(); ?>"><?php  if ( has_post_thumbnail() ) {
									    the_post_thumbnail();
									} ?></a>
								</div>
			            	<a class="content" href="<?php echo get_permalink(); ?>">
			            		<h4><span><?php the_title(); ?></span></h4> 
			            		<div class="date">- <?php the_field('data') ?></div>
			            	</a>
			            </div>
		
			            <?php endwhile; else: endif;?>
						<?php wp_reset_query(); ?>
			        </div>
			        <button class="glider-prev meetPrev">&lsaquo;</button>
			        <button class="glider-next meetNext">&rsaquo;</button>
			    </div>
			</div>
		</section>
		<?php } ?>
	<?php endwhile; else : endif; ?>

	<section class="contact">
		<div class="container">
			<?php if( have_rows('contato') ):
		        while( have_rows('contato') ) : the_row();
		        ?>
		        <div class="content">
		        	<h3><?php the_sub_field('titulo') ?></h3>
			        <p><?php the_sub_field('mini_texto') ?></p>
			        <a href="<?php the_sub_field('link') ?>" title="" target="_blank" class="btn"><?php the_sub_field('botao') ?></a>
			    </div>
			    <div class="image">
	        		<img src="<?php the_sub_field('imagem') ?>" alt="NomadRoots" />
	        	</div>
		    <?php endwhile; else : endif; ?>
		</div>
	</section>

	<section class="newsletter">
		<div class="container">
			<?php if( have_rows('newsletter') ):
		        while( have_rows('newsletter') ) : the_row();
		        ?>
		        <div class="image">
	        		<img src="<?php the_sub_field('imagem') ?>" alt="<?php the_sub_field('alt') ?>" />
	        	</div>
	        	<div class="content">
			        <h3><?php the_sub_field('titulo') ?></h3>
			        <?php the_sub_field('texto') ?>
			        <?php echo do_shortcode(get_sub_field('mailchimp')); ?>
			    </div>
		    <?php endwhile; else : endif; ?>
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

</main>
   
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>

<?php get_footer(); ?>