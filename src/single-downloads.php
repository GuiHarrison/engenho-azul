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
				<h2><?php echo get_field('subtitulo') ?></h2>
			</div>

				<!-- post thumbnail -->
				<?php
					$image = get_field('imagem');
					$tamanho = 'downloads';
					$banner = $image['sizes'][$tamanho];

					echo '<img src="' . $banner . '" class="foto">';
				?>
				<!-- /post thumbnail -->

				
				<?php the_content(); // Dynamic Content ?>
				<?php

				echo '<a class="verMais" href="';
					the_field("download");
				echo '">Download</a>'; ?>
				
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

		<?php get_sidebar(); ?>

		</section>
		<!-- /section -->

	</main>

<?php get_footer(); ?>
