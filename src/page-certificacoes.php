<?php /* Template Name: Produtos */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php the_breadcrumb(); ?>

			<?php echo get_template_part('escolhaInstitucional'); ?>


			<!-- <h1><?php the_title(); ?></h1> -->
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<br class="clear">

				<?php
					$args = array('taxonomy' => 'tipo');
					$tax_tipos = get_categories( $args );
				?>

				<h1>Certificações</h1>
					<div class="grupoPremios">

							<?php
							// check if the repeater field has rows of data
							if( have_rows('cert') ):
							 	// loop through the rows of data
							    while ( have_rows('cert') ) : the_row();
									$logoCert = get_sub_field('logo');

									echo '<div class="cadaPremio">';

											echo
											'<div class="contemLogo">
												<span class="helper"></span>
												<img src="' . $logoCert . '" alt="'. get_sub_field('titulo') .'">'.
											'</div>';

											echo '<div class="inTitulo"><p>'. get_sub_field('titulo') .'</p></div>';

									echo '</div>';
							    endwhile;
							endif;
							?>

					</div>


				<h1>Premiações e reconhecimentos</h1>

				<div class="certificacaoMor">
					<h4><?php the_field('titulo_destaque'); ?></h4>
					<div class="logoEtexto">
						<img src="<?php the_field('selo_destaque'); ?>" alt="<?php the_field('titulo_destaque'); ?>">
						<p><?php the_field('descricao_destaque'); ?></p>
					</div>
				</div>

				<div class="grupoPremios">

						<?php
						// check if the repeater field has rows of data
						if( have_rows('prem') ):
							// loop through the rows of data
								while ( have_rows('prem') ) : the_row();
								$logoPrem = get_sub_field('logo');

								echo '<div class="cadaPremio">';

																		echo
																		'<div class="contemLogo">
								<span class="helper"></span>
								<img src="' . $logoPrem . '" alt="'. get_sub_field('titulo') .'">'.
																		'</div>';

																		echo '<div class="inTitulo"><p>'. get_sub_field('titulo') .'</p></div>';

																echo '</div>';
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
