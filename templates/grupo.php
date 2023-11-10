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
			    'post_type' => 'roteiro',
			    'posts_per_page' => 2,
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
			    	<li>
			    		<h4><?php the_title(); ?></h4>
			    	</li>
			    <?php endwhile; else: endif;?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</section>
</main>

<?php get_footer(); ?>