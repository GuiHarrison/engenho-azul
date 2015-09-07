<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<?php the_breadcrumb(); ?>

			<?php echo get_template_part('escolhaInstitucional'); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1>Certificações</h1>

					<div class="grupoPremios">

							<?php
							// check if the repeater field has rows of data
							if( have_rows('cert') ):
							 	// loop through the rows of data
							    while ( have_rows('cert') ) : the_row();
									$logoCert = get_sub_field('logo');

									echo '<div class="cadaPremio">';

							        // display a sub field value
							        echo '<h4>';
												the_sub_field('titulo');
											echo '</h4>';

											echo '<div class="contemLogo"><span class="helper"></span><img src="' . $logoCert . '" alt=""></div>';

									echo '</div>';
							    endwhile;
							endif;
							?>

					</div>

					<div class="certificacaoMor">
						<h4><?php the_field('titulo_destaque'); ?></h4>
						<div class="logoEtexto">
							<img src="<?php the_field('selo_destaque'); ?>" alt="">
							<p><?php the_field('descricao_destaque'); ?></p>
						</div>
					</div>

				<h1>Premiações e reconhecimentos</h1>

				<div class="grupoPremios">

				<?php
				// check if the repeater field has rows of data
				if( have_rows('prem') ):
				 	// loop through the rows of data
				    while ( have_rows('prem') ) : the_row();
						$logoProm = get_sub_field('logo');
						?>

						<div class="certificacaoMor">
							<h4><?php the_sub_field('titulo'); ?></h4>
							<div class="logoEtexto">
								<img src="<?php the_sub_field('logo'); ?>" alt="">
								<p><?php the_sub_field('descricao_destaque'); ?></p>
							</div>
						</div>

						<?php
				    endwhile;
				endif;
				?>

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
