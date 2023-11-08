<?php 
/* Template Name: Sobre Nós */ 
?>

<?php get_header(); ?>

<main class="aboutNomad">

	<section class="main-banner" style="background-image: url('<?php the_field('imagem_destacada') ?>')">
		<div class="content">
			<img src="<?php the_field('logo') ?>" alt="Nomad Roots" />
			<h1><?php the_field('titulo_h1') ?></h1>
		</div>
	</section>

	<section class="nomads">
		<div class="container">
			<?php the_field('descricao') ?>      		
		</div>
	</section>

	<section class="video">
		<?php
			// Load value.
			$iframe = get_field('video');

			// Use preg_match to find iframe src.
			preg_match('/src="(.+?)"/', $iframe, $matches);
			$src = $matches[1];

			// Add extra parameters to src and replace HTML.
			$params = array(
			    'controls'  => 0,
			    'hd'        => 1,
			    'autohide'  => 1
			);
			$new_src = add_query_arg($params, $src);
			$iframe = str_replace($src, $new_src, $iframe);

			// Add extra attributes to iframe HTML.
			$attributes = 'frameborder="0"';
			$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

			// Display customized HTML.
			echo $iframe;
			?>
	</section>

	<section class="nomadCarousel">
		<div class="container">
			<h2><?php the_field('titulo_h2') ?> </h2>
			<h3><?php the_field('subtitulo') ?> </h3>

			<div class="glider-contain">
		    	<div class="nCarousel">
			    	<?php if( have_rows('carousel_nomad') ): ?>
			    		<?php while( have_rows('carousel_nomad') ): the_row(); ?>
			    			<div class="content">
								<h4><?php the_field('titulo') ?></h4>
								<p><?php the_field('texo') ?></p>
			    			</div>
			    		<?php endwhile; ?>
			    	<?php endif; ?>				    	
			    </div>
			</div>

		</div>
	</section>


</main>

<?php get_footer(); ?>
