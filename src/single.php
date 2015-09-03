<?php get_header(); ?>

	<main role="main">

	<!-- section -->
	<section>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php the_breadcrumb(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			</a>
		<?php endif; ?>
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

		
		<aside class="sidebar sideNoticias" role="complementary">

		<button id="btVolta" class="ctrl"><span class="volta"></span></button>
		<div id="sidebarNoticias">
			<ul class="maisNoticias">

				<?php
						$attr = array(
							'posts_per_page' => -1
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
				?>

			</ul>
		</div>
		<button id="btVai" class="ctrl"><span class="vai"></span></button>

		</aside>

	</section>
	<!-- /section -->

	</main>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
