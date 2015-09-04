<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<?php if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

			<ul id="emPessoas">
				<li class="botaoTopo"><a href="<?php echo home_url(); ?>/institucional/quem-somos">Quem Somos</a></li>
				<li class="botaoTopo"><a href="<?php echo home_url(); ?>/institucional/premios-e-certificados">Prêmios e Certificações</a></li>
				<li class="botaoTopo"><a href="<?php echo home_url(); ?>/institucional/governanca">Governança</a></li>
			</ul>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div id="videoPessoas"></div>

				<a href="<?php echo get_permalink('99'); ?>" class="boxPessoas" id="box1">
					<h2>Precon <br> Engenharia</h2>
				</a>
				<a href="<?php echo get_permalink('105'); ?>" class="boxPessoas" id="box2">
					<h2>Pré-Fabricados <br> de Concreto</h2>
				</a>
				<a href="<?php echo get_permalink('107'); ?>" class="boxPessoas" id="box3">
					<h2>Linha <br> Habitacional</h2>
				</a>
				<a href="<?php echo get_permalink('109'); ?>" class="boxPessoas" id="box4">
					<h2>DNA <br> Precon</h2>
				</a>

				<!-- <div id="trabalheConosco">
				<div class="trabalheL cadaTrabalhe">
					<h4>Um reconhecimento recente que comprova o sucesso desta cultura foi o prêmio concedido pelo Great Place to Work como a 4ª MELHOR EMPRESA PARA SE TRABALHAR EM MINAS GERAIS.</h4>
				</div>
				<div class="trabalheR cadaTrabalhe">
					<p>Se identificou?! Então venha fazer parte do nosso time!</p>
					<a href="http://www.vagas.com.br/vagas-de-precon" target="_blank" class="verMais">Vagas</a>
				</div>
				</div> -->

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
