<?php 
/* Template Name: Grupos Nomad */ 
?>

<?php get_header(); ?>

<main class="groupNomad">
	<section class="main-banner" style="background-image: url('<?php the_field('imagem_destacada') ?>')">
		<div class="content">
			<img src="<?php the_field('logo') ?>" alt="Nomad Roots" />
			<h1><?php the_field('titulo_h1') ?></h1>
			<a href="<?php the_field('link') ?>" target="_blank" title="<?php the_field('texto_do_botao') ?>"><?php the_field('texto_do_botao') ?></a>
		</div>
	</section>

	<section class="nomads">
		<div class="container">
			<?php the_field('descricao') ?>      		
		</div>
	</section>
</main>

<?php get_footer(); ?>