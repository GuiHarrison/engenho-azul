<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<?php if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

			<?php echo get_template_part('escolhaInstitucional'); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div id="videoPessoas"></div>

				<div class="cadaQuemSomos" id="boxPE">
					<a href="<?php echo '#_'; //echo get_permalink('99'); ?>" class="boxPessoas" id="box1">
						<h2>Precon <br> Engenharia</h2>
					</a>
					<div class="bgCinza">
						<?php the_field('pe'); ?>
					</div>
				</div>

				<div class="cadaQuemSomos" id="boxPFC">
					<a href="<?php echo '#_'; //echo get_permalink('105'); ?>" class="boxPessoas" id="box2">
						<h2>Pré-Fabricados <br> de Concreto</h2>
					</a>
					<div class="bgCinza">
						<?php the_field('pfc'); ?>
					</div>
				</div>

				<div class="cadaQuemSomos" id="boxLH">
					<a href="<?php echo '#_'; //echo get_permalink('107'); ?>" class="boxPessoas" id="box3">
						<h2>Linha <br> Habitacional</h2>
					</a>
					<div class="bgCinza">
						<?php the_field('lh'); ?>
					</div>
				</div>

				<div class="cadaQuemSomos" id="boxDGP">
					<a href="<?php echo '#_'; //echo get_permalink('109'); ?>" class="boxPessoas" id="box4">
						<h2>DNA Grupo<br> Precon</h2>
					</a>
					<div class="bgCinza">
						<?php the_field('dna'); ?>
					</div>
				</div>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
