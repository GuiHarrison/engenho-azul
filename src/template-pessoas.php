<?php /* Template Name: Pessoas */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

		<?php if ( is_page( '59' || '54' || '145' ) ) { echo get_template_part('escolhaPessoas'); } else { echo get_template_part('escolhaInstitucional'); }  ?>

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
						<!-- <a href="javascript: window.history.go(-1)" id="voltar">Voltar</a> -->		
				</div>

				<a href="http://www.vagas.com.br/vagas-de-precon" target="_blank" id="trabalheConosco">
						<div class="trabalheR cadaTrabalhe">
								<p>Se identificou?! Então venha fazer parte do nosso time!</p>
								<div class="botaoLaranja">Vagas</div>
						</div>
				</a>

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


<?php get_footer(); ?>
