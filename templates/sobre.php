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
								<h4><?php the_sub_field('titulo') ?></h4>
								<p><?php the_sub_field('texo') ?></p>
			    			</div>
			    		<?php endwhile; ?>
			    	<?php endif; ?>				    	
			    </div>
			    <button class="glider-prev nc">&lsaquo;</button>
			    <button class="glider-next nc">&rsaquo;</button>
			</div>

		</div>
	</section>


</main>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sobre.js"></script>

<?php get_footer(); ?>
