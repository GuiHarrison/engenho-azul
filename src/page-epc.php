<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<img src="<?php echo get_template_directory_uri(); ?>/img/concretos.jpg" alt="Concretos" class="imagemIlustrativa">

				<a href="<?php
					$queryCat4 = new WP_Query( array(
						'post_type' => 'pre-fabricados',
						'category__in' => array( 2,3,4,5 ),
						'posts_per_page' => 1
					) );

					if ( $queryCat4->have_posts() )
						{
							while ($queryCat4->have_posts()) : $queryCat4->the_post();
								echo post_permalink();
							endwhile;
							wp_reset_query();
						}
				?>" class="resp-tab-item item-diferente">Pré-fabric.</a>

				<?php the_content(); ?>

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
