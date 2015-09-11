<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php echo get_template_part('escolhaPessoas'); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="pageCabecalho" style="background-image:url(
					<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
							$url = $thumb['0'];

							if(has_post_thumbnail()) {echo $url;}
					?>
				)">
					<h1><?php the_title(); ?></h1>
				</div>

				<div class="pageConteudo">
					<?php the_content(); ?>
					<a href="javascript: window.history.go(-1)" id="voltar">Voltar</a>
				</div>

				<div id="trabalheConosco">
					<h4>Um reconhecimento recente que comprova o sucesso da nossa cultura foi o prêmio concedido pelo Great Place to Work a Precon Engenharia como a</h4>
					<h4>4ª MELHOR EMPRESA PARA SE TRABALHAR EM MINAS GERAIS.</h4>
					<div class="seloEbotao">
						<img class="selo" src="<?php echo get_template_directory_uri(); ?>/img/greatPlace.png" alt="Great Place to Work">
						<a class="botaoLaranja" href="http://www.vagas.com.br/vagas-de-precon" target="_blank">Vagas</a>
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
