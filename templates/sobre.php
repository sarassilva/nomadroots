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

	<section class="videoSobre">
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
			    				<div class="scroll">
									<h4><?php the_sub_field('titulo') ?></h4>
									<p><?php the_sub_field('texo') ?></p>
								</div>
			    			</div>
			    		<?php endwhile; ?>
			    	<?php endif; ?>				    	
			    </div>
			    <button class="glider-prev nc">&lsaquo;</button>
			    <button class="glider-next nc">&rsaquo;</button>
			</div>
		</div>
	</section>

	<section class="nomadTeam">
		<div class="container">
			<h2><?php the_field('titulo_time') ?> </h2>
			<h3><?php the_field('subtitulo_time') ?> </h3>

			<div class="glider-contain">
		    	<div class="tCarousel">
			    	<?php if( have_rows('time_nomad') ): ?>
			    		<?php while( have_rows('time_nomad') ): the_row(); ?>
			    			<div class="content">
			    				<div class="content">
			    					<div class="image">
			    						<img src="<?php the_sub_field('imagem') ?>" />
			    					</div>
			    					<div class="hold">			    						
										<div class="name"><?php the_sub_field('nome') ?></div>
										<div class="cargo"><?php the_sub_field('cargo') ?></div>
										<div class="bio"><?php the_sub_field('descricao') ?></div>
									</div>
								</div>
			    			</div>
			    		<?php endwhile; ?>
			    	<?php endif; ?>				    	
			    </div>
			    <button class="glider-prev tN">&lsaquo;</button>
			    <button class="glider-next tN">&rsaquo;</button>
			</div>
		</div>
	</section>

	<section class="houseNomad" style="background-image: url('<?php the_field('imagem_casanomad') ?>')">
		<div class="container">
			<h3><?php the_field('titulo_casanomad') ?></h3>
			<div class="texto">
				<?php the_field('texto_casanomad') ?>
			</div>
		</div>
	</section>

	<section class="midia">
		<div class="container">
			<h3><?php the_field('titulo_midia') ?></h3>

			<div class="glider-contain">
		    	<div class="mCarousel">
			    	<?php if( have_rows('materias') ): ?>
			    		<?php while( have_rows('materias') ): the_row(); ?>
			    			<div class="content">
			    				<div class="content">
			    					<div class="image">
			    						<img src="<?php the_sub_field('imagem') ?>" />
			    					</div>
										<a href="<?php the_sub_field('link') ?>" title='<?php the_sub_field('titulo_da_materia') ?>'><?php the_sub_field('titulo_da_materia') ?></a>
								</div>
			    			</div>
			    		<?php endwhile; ?>
			    	<?php endif; ?>				    	
			    </div>
			    <button class="glider-prev mN">&lsaquo;</button>
			    <button class="glider-next mN">&rsaquo;</button>
			</div>
		</div>
	</section>

	<section class="partners">
		<div class="container">
			<h4><?php the_field('titulo_partnes') ?></h4>
			<div class="texto"><?php the_field('texto_partnes') ?></div>
			<?php if(is_active_sidebar('wdg2')){ dynamic_sidebar('wdg2'); } ?>
		</div>
	</section>

	<section class="vagas">
		<div class="container">
			<h3><?php the_field('titulo_timeN') ?></h3>
			<h4><?php the_field('titulo_2_timeN') ?></h4>
			<p><?php the_field('chamada_timeN') ?></p>
			<a href="<?php the_field('chamada_timeN') ?>">Nossas vagas</a>
		</div>
	</section>

	<section class="contact">
		<div class="container">	
	        <div class="content">
	        	<h3><?php the_field('titulo_ct') ?></h3>
		        <p><?php the_field('texto') ?></p>
		        <a href="<?php the_field('botao') ?>" title="" target="_blank" class="btn">Fale com a gente</a>
		    </div>
		    <div class="image">
        		<img src="<?php the_field('imagem_ct') ?>" alt="NomadRoots" />
        	</div>
		</div>
	</section>
</main>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/glider.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/glider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sobre.js"></script>

<?php get_footer(); ?>
