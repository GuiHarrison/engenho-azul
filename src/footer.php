		</div>
		<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<section class="azul">
					<div class="wrapper">
						<ul id="menuInstitucional" class="institucional footerMenu">
							<h4>Institucional</h4>
							<?php
								$queryInst = new WP_Query( array(
									'post_parent' => 21,
									'post_type' => 'page'
								) );

								if ( $queryInst->have_posts() ) {
									
									while ($queryInst->have_posts()) : $queryInst->the_post();
										echo
										'<li><a href="' . post_permalink() . '">';
											the_title();
										echo '</a></li>';
									endwhile;

								} else {
									echo "<h2>Post não encontrado</h2>";
								}
							?>
						</ul>
						<ul id="menuNoticias" class="contato footerMenu">
							<h4>Notícias</h4>
							<?php
								$queryInst = new WP_Query( array(
									'post_per_page' => 4
								) );

								if ( $queryInst->have_posts() ) {
									
									while ($queryInst->have_posts()) : $queryInst->the_post();
										echo
										'<li><a href="' . post_permalink() . '">';
											the_title();
										echo '</a></li>';
									endwhile;

								} else {
									echo "<h2>Post não encontrado</h2>";
								}
							?>
						</ul>
						<ul id="menuDownloads" class="contato footerMenu">
							<h4>Downloads</h4>
							<?php
								$queryInst = new WP_Query( array(
									'post_type' => 'downloads',
									'post_per_page' => 4
								) );

								if ( $queryInst->have_posts() ) {
									
									while ($queryInst->have_posts()) : $queryInst->the_post();
										echo
										'<li><a href="' . post_permalink() . '">';
											the_title();
										echo '</a></li>';
									endwhile;

								} else {
									echo "<h2>Post não encontrado</h2>";
								}
							?>
						</ul>
						<div class="telefone">
							<h3>
								<span>(31)</span>
								<?php if (kirki_get_option( 'telefone' )) { echo kirki_get_option( 'telefone' );} ?>
							</h3>
							
							<p>Acompanhe a Precon nas redes sociais</p>
							<div class="redesSociais">
								<a class="cadaRede facebook" target="_blank" href="https://www.facebook.com/preconengenharia?ref=ts&fref=ts"><?php echo get_template_part( 'img/icons/social', 'facebook.svg' ); ?></a>
								<a class="cadaRede linkedin" target="_blank" href="https://www.linkedin.com/company/119936?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A119936%2Cidx%3A2-3-6%2CtarId%3A1438349438452%2Ctas%3Aprecon"><?php echo get_template_part( 'img/icons/social', 'linkedin.svg' ); ?></a>
								<a class="cadaRede instagram" target="_blank" href="https://instagram.com/preconengenharia/"><?php echo get_template_part( 'img/icons/social', 'instagram.svg' ); ?></a>
								<a class="cadaRede youtube" target="_blank" href="https://www.youtube.com/user/Preconmaterial"><?php echo get_template_part( 'img/icons/social', 'youtube.svg' ); ?></a>
							</div>
						</div>
					</div>
				</section>
				<section class="preto">
					<div class="wrapper">
						<!-- copyright -->
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
							<a href="//ingagedigital.com.br" target="_blank" title="Ingage Digital">Ingage Digital</a>.
						</p>
						<!-- /copyright -->
					</div>
				</section>


			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>


		<!-- analytics -->
<!-- 		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script> -->

	</body>
</html>
