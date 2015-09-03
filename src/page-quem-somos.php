<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<?php if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

			<ul id="menuInstitucional">
				<li class="botaoTopo"><a href="<?php echo home_url(); ?>/institucional/quem-somos">Quem Somos</a></li>
				<li class="botaoTopo"><a href="<?php echo home_url(); ?>/institucional/pessoas">Pessoas</a></li>
				<li class="botaoTopo"><a href="<?php echo home_url(); ?>/institucional/premios-e-certificados">Prêmios e Certificações</a></li>
				<li class="botaoTopo"><a href="<?php echo home_url(); ?>/institucional/governanca">Governança</a></li>
				<li class="botaoTopo"><a href="<?php echo home_url(); ?>/institucional/sustentabilidade-e-inovacao">Sustentabilidade e inovação</a></li>
			</ul>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="cadaSomos">
						
						<div class="<?php if( !wp_is_mobile()) {echo 'imagemQuemSomos';} else {echo 'flamula';} ?>">
							<h2>DNA Precon</h2>
						</div>
						<div class="texto">
							<?php the_field('dna_precon'); ?>
						</div>

					</div>

					<div class="cadaSomos">
						
						<div class="<?php if( !wp_is_mobile()) {echo 'imagemQuemSomos';} else {echo 'flamula';} ?>">
							<h2>Precon Engenharia</h2>
						</div>
						<div class="texto">
							<?php the_field('precon_engenharia'); ?>
						</div>

					</div>

					<div class="cadaSomos">
						
						<div class="<?php if( !wp_is_mobile()) {echo 'imagemQuemSomos';} else {echo 'flamula';} ?>">
							<h2>Pré-Fabricados de Concreto</h2>
						</div>
						<div class="texto">
							<?php the_field('estrutura_pre-fabricada'); ?>
						</div>

					</div>

					<div class="cadaSomos">
						
						<div class="<?php if( !wp_is_mobile()) {echo 'imagemQuemSomos';} else {echo 'flamula';} ?>">
							<h2>Solução Habitacional</h2>
						</div>
						<div class="texto">
							<?php the_field('habitação_habitacional'); ?>
						</div>

					</div>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
