<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


			<?php if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

			<?php echo get_template_part('escolhaPessoas'); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php

				// check if the repeater field has rows of data
				if( have_rows('repeatDep') ):
				 	// loop through the rows of data
				    while ( have_rows('repeatDep') ) : the_row();

						$lightbox = (!wp_is_mobile()) ? 'rel="wp-video-lightbox"' : '';

						echo
						'<a '. $lightbox .' href="'. get_sub_field('videoDep') .'" class="cadaDepoimento">'.
							'<div class="thumbVideo" style="background-image:url('. get_sub_field('thumbDep') .');"></div>'.
							'<h4>'. get_sub_field('tituloDep') .'</h4>'.
							'<p>'. get_sub_field('descDep') .'</p>'.
						'</a>';

				        // display a sub field value

				    endwhile;
				else :

				    // no rows found

				endif;
				?>

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
