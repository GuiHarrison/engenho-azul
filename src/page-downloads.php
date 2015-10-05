<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php
					$attr = array(
						'posts_per_page' => -1
					);

					$wp_query = new WP_Query($attr);

					if ( $wp_query->have_posts() ) {

			if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

					<div>
						<ul class="todasNoticias">

							<?php

										while ($wp_query->have_posts()) : $wp_query->the_post();

											echo
											'<li class="outrasNoticias">'.
												'<a class="linkImagemOutrasNoticias" href="'. post_permalink() .'">';

													if ( has_post_thumbnail() ) {
														the_post_thumbnail('medium');
													};
													echo
													'</a>'.

													'<a class="linkPostOutrasNoticias" href="'. post_permalink() .'">'.
													'<h3>';
														the_title();
													echo
													'</h3>';

													if( get_field('subtitulo') ):
														echo '<h4>' . get_field('subtitulo') . '</h4>';
													endif;

												echo
												'</a>'.
											'</li>';

										endwhile;
									}
							?>

						</ul>
					</div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
