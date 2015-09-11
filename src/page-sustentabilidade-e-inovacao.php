<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<?php if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="cadaQuemSomos" id="boxPE">
					<a href="#_" class="boxPessoas" id="sus1">
						<h2>Incentivo <br> à inovação</h2>
					</a>
					<div class="bgCinza">
						<?php the_field('iai'); ?>
					</div>
				</div>

				<div class="cadaQuemSomos" id="boxPE">
					<a href="#_" class="boxPessoas" id="sus2">
						<h2>Incentivo <br> à sustentabilidade</h2>
					</a>
					<div class="bgCinza">
						<?php the_field('ias'); ?>
					</div>
				</div>

				<div class="cadaQuemSomos" id="boxPE">
					<a href="#_" class="boxPessoas" id="sus3">
						<h2>Desenvolvimento humano <br> ações socioculturais</h2>
					</a>
					<div class="bgCinza">
						<?php the_field('dhas'); ?>
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
