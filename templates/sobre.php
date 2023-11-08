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

</main>

<?php get_footer(); ?>
