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

				<?php
				if (have_rows('membro')) {
					while (have_rows('membro')) : the_row(); ?>
					
						<div class="cadaMembro">
							<?php
								$image = get_sub_field('foto');
								$tamanho = 'pessoas';
								$pessoa = $image['sizes'][$tamanho];

								echo '<div class="miniBio">';
									the_sub_field('mini-bio');
								echo '</div>';
								
								echo '<img src="' . $pessoa . '" class="foto">';
							?>
						</div>
						<?php
					endwhile;
				}
				?>

				<div id="trabalheConosco">
					<h2>Trabalhe Conosco</h2>
					<a href="http://www.vagas.com.br/vagas-de-precon" target="_blank" class="verMais">Vagas</a>
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
