<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="pageCabecalho" style="background-image:url(
					<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
							$url = $thumb['0'];

							if(has_post_thumbnail()) {echo $url;}
					?>
				)">
					<h1><?php the_title(); ?></h1>
				</div>

				<div class="pageConteudo">
						<?php the_content(); ?>
				</div>

			</article>

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
