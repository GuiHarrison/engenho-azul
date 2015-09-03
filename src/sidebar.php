<!-- sidebar -->
<aside class="sidebar sideDownloads" role="complementary">

	<?php
		if (is_singular( 'downloads' )) {
		?>

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
								
								echo '<li>';

									echo '<hr>';
									echo '<a href="' . post_permalink() . '">';

										echo '<h3>';
											the_title();
										echo '</h3>';
										echo '<h4>' . get_field('subtitulo') . '</h4>';

									echo '</a>';
								echo '</li>';
									
								endwhile;
							}

							wp_reset_postdata();
					?>

				</ul>
			</div>
			<button id="btVai" class="ctrl"><span class="vai"></span></button>

		<?php
		}
	 ?>
	
</aside>
<!-- /sidebar -->
