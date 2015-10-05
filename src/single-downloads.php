<?php get_header(); ?>

	<main role="main">

		<!-- section -->
		<section id="singleDownloads">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php the_breadcrumb(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="downloadSingle">
				<h1><?php the_title(); ?></h1>
			</div>

				<!-- post thumbnail -->
				<?php
					$image = get_field('imagem');
					$tamanho = 'downloads';
					// $banner = $image['sizes'][$tamanho];

					echo '<img src="' . $image . '" class="foto">';
				?>
				<!-- /post thumbnail -->

				<?php the_content(); // Dynamic Content ?>

				<?php
				echo '<a class="verMais" href="';
					the_field("download");
				echo '">Download</a>';
				?>

				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

		<!-- aside -->
		<aside class="sidebar sideDownloads" role="complementary">

		<button id="btVolta" class="ctrl"><span class="volta"></span></button>
		<div id="sidebarDownloads">
			<ul class="maisDownloads">

				<?php
						$attr = array(
							'posts_per_page' => -1,
							'post_type' => 'downloads'
						);

						$wp_query = new WP_Query($attr);

						if ( $wp_query->have_posts() ) {
							while ($wp_query->have_posts()) : $wp_query->the_post();

							echo '<li class="itemLateral">';

								echo '<a href="' . post_permalink() . '">';
										the_title();
								echo '</a>';

							echo '</li>';

							endwhile;
						}

						wp_reset_postdata();
				?>

			</ul>
		</div>
		<button id="btVai" class="ctrl"><span class="vai"></span></button>

		</aside>
		<!-- /aside -->

		</section>
		<!-- /section -->

	</main>

<?php get_footer(); ?>
