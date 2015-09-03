<?php get_header(); ?>

	<main role="main">

	<section class="sectionDownloads">

	<?php get_sidebar(); 

			$attr = array(
				'posts_per_page' => 1,
				'post_type' => 'downloads'
			);

			$wp_query = new WP_Query($attr);

			if ( $wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

				</article>

				<?php endwhile; ?>
				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>
		</section>
		 
		<?php
		/* Restore original Post Data */
		wp_reset_postdata();
		?>

	</main>


<?php get_footer(); ?>
