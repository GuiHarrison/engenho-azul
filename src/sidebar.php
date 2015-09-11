<!-- sidebar -->
<aside class="sidebar sideNoticias" role="complementary">

	<?php
		if (is_single()) {
		?>

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

								echo
								'<li class="itemNoticias">'.
								'<hr />'.
									'<a href="'. post_permalink() .'">'.
										'<h3>';
											the_title();
										echo '</h3>'.
										'<h4>'. get_field('subtitulo') .'</h4>'.
									'</a>'.
								'</li>';

								endwhile;
							}
					?>

				</ul>
			</div>
			<button id="btVai" class="ctrl"><span class="vai"></span></button>

		<?php
		}
	 ?>

</aside>
<!-- /sidebar -->
