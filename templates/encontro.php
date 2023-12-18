<?php 
/* Template Name: Encontros Nomad */ 
?>

<?php get_header(); ?>

<main class="encontroNomad">
	<section class="main-banner" style="background-image: url('<?php the_field('imagem_principal') ?>')">
		<div class="content">
			<h1><?php the_field('titulo') ?></h1>
			<h2><?php the_field('subtitulo') ?></h2>
			<a class="btn" href="<?php echo get_home_url(); ?>/encontros/#nomads" title="COMECE SUA EXPERIÊNCIA">Descubra os encontros</a>
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
			<div class="encontrosItens">
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

                    <div class="image">
                        <?php  if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?>
                        <div class="title">
                            <h4><?php the_title(); ?></h4>
                            <p class="subtitle"><?php the_field('subtitulo') ?>  </p>
                        </div>
                    </div>

                <?php endwhile; else: endif;?>
                <?php wp_reset_query(); ?>
            </div>
		</div>
	</section>

	

	<section class="testimonials">
		<div class="container">
			<h3>Quem leu o mundo com a gente através dos encontros</h3>

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