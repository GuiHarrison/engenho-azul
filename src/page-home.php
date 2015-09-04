<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="chamadasHome">

			<div id="noticias">
				<h2>Últimas notícias</h2>
				<?php
					$attr = array(
						'posts_per_page' => 3
					);

					$wp_query = new WP_Query($attr);

					if ( $wp_query->have_posts() ) {

						$c=0;

						while ($wp_query->have_posts()) : $wp_query->the_post();

						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'noticiaG' );
						$url = $thumb['0'];

						$c++;
						if ($c == 1) {

							echo '<div class="primeiraNoticia">';
								echo '<a href="' . post_permalink() . '" style="background: url(';
									if ($url != '') { echo $url; }
								echo ') 50% 50% no-repeat" class="fotoNoticiaG">';
									the_title( '<h3>', '</h3>');
								echo '</a>';
							echo '</div>';

						} elseif ($c == 2) {
							echo
							'<div class="noticiasSecundarias">'.
								'<div class="cadaNoticiaMenor" style="' . $thumbnail . '">'.
									'<a href="' . post_permalink() . '" style="background: url(';
										if ($url != '') { echo $url; }
									echo ') 50% 50% no-repeat" class="fotoNoticiaP">';
										the_title( '<h3>', '</h3>');
									echo '</a>'.
								'</div>';

						} else {
							echo
							'<div class="cadaNoticiaMenor" style="' . $thumbnail . '">'.
								'<a href="' . post_permalink() . '" style="background: url(';
									if ($url != '') { echo $url; }
								echo ')" class="fotoNoticiaP">';
									the_title( '<h3>', '</h3>');
								echo '</a>'.
							'</div></div>';
						}

						endwhile;

					} else {
						echo '<h2>Sem posts por aqui</h2>';
					}
					wp_reset_postdata();
				?>
			</div>

			<div id="videos">
				<h2>Vídeos</h2>
				<div class="video">
					<?php echo do_shortcode( "[auto_last_youtube_video user='Preconmaterial' width='291' height='152'][/auto_last_youtube_video]" ); ?>
				</div>

				<?php
					$queryDownloads = new WP_Query( array(
						'post_type' => 'downloads',
						'posts_per_page' => 1
					) );

					if ( $queryDownloads->have_posts() )
						{
							while ($queryDownloads->have_posts()) : $queryDownloads->the_post();
								echo '<a class="verMais" href="' . post_permalink() . '">'. 'Ver mais' .'</a>';
							endwhile;
						}
					wp_reset_postdata();
				?>

			</div>

			<div id="downloads">
				<h2>Downloads</h2>
				<a href="" class="cta">
					<?php
						$queryDownloads = new WP_Query( array(
							'post_type' => 'downloads',
							'posts_per_page' => 1
						) );

						if ( $queryDownloads->have_posts() )
							{
								while ($queryDownloads->have_posts()) : $queryDownloads->the_post();
									echo '<a href="' . post_permalink() . '">';
										if ( has_post_thumbnail() ) {
											the_post_thumbnail('downloads');
										}
									echo '</a>';
								endwhile;
							} else {
								echo '<h5>Nenhum download ainda</h5>';
							}
						wp_reset_postdata();
					?>
				</a>
			</div>

			<div id="contato">
				<h2>Contato</h2>
				<a href="" class="contatoGeral">
					<img src="<?php echo get_template_directory_uri(); ?>/img/contatoGeral.jpg" alt="Contato Geral">
				</a>
				<a href="" class="contatoMeuPrecon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/contatoMeuPrecon.jpg" alt="Contato Meu Precon">
				</a>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
