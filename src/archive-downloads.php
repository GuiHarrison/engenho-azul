<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php
					$attr = array(
						'posts_per_page' => -1,
						'post_type'=> 'downloads'
					);

					$wp_query = new WP_Query($attr);

					if ( $wp_query->have_posts() ) {

			if (!is_home() && !is_page('home')) { the_breadcrumb(); } ?>

					<div>
						<ul class="todasNoticias">

							<?php

										while ($wp_query->have_posts()) : $wp_query->the_post();
											$link = (get_field('download')) ? get_field('download') : get_field('video');

											echo '<li class="outrasNoticias">'.
												'<a class="linkImagemOutrasNoticias" target="_blank" href="'. $link .'">';

													if ( has_post_thumbnail() ) {
														the_post_thumbnail('downloads');
													};
													echo
													'</a>'.

													'<a class="linkPostOutrasNoticias" target="_blank" href="'. $link .'">'.
													'<h3>';
														the_title();
													echo
													'</h3>';

													if( get_field('subtitulo') ):
														echo '<p>' . wp_trim_words( get_the_content(), 15 ) . '</p>';
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
