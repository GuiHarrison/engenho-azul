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

		<div class="downloadSingle">
			<h1><?php the_title(); ?></h1>
			<h2><?php echo get_field('subtitulo') ?></h2>
		</div>

			<?php the_content(); // Dynamic Content ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>

		<?php endwhile; ?>
		<?php else: ?>
			<!-- article -->
			<article> <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1> </article>
			<!-- /article -->
		<?php endif; ?>

	</section>
	<!-- /section -->

	</main>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
