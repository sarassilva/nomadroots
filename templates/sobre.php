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
		<video controls="controls" id="video">
			<source src="<?php the_field('video') ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
		</video>
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
