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
					the_content();
				?>

				<div id="trabalheConosco">
				<div class="trabalheL cadaTrabalhe">
					<h4>Um reconhecimento recente que comprova o sucesso desta cultura foi o prêmio concedido pelo Great Place to Work como a 4ª MELHOR EMPRESA PARA SE TRABALHAR EM MINAS GERAIS.</h4>
				</div>
				<div class="trabalheR cadaTrabalhe">
					<p>Se identificou?! Então venha fazer parte do nosso time!</p>
					<a href="http://www.vagas.com.br/vagas-de-precon" target="_blank" class="verMais">Vagas</a>
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
