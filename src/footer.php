		</div>
		<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<section class="azul">
					<div class="wrapper">
						<ul id="mapaSite">

							<li id="menuInstitucional" class="footerMenu institucional">
								<a href="<?php echo home_url(); ?>/institucional/epc/"><h4>Institucional</h4></a>
								<ul>
									<li><a href="<?php echo get_permalink('23'); ?>">Quem Somos</a></li>
									<li><a href="<?php echo get_permalink('56'); ?>">Prêmios e Certificações</a></li>
									<li><a href="<?php echo get_permalink('54'); ?>">Pessoas</a></li>
									<li><a href="<?php echo get_permalink('31'); ?>">Inovação e Sustentabilidade</a></li>
									<li><a href="<?php echo site_url("/noticias/"); ?>">Noticias</a></li>
									<li><a href="<?php echo get_post_type_archive_link( downloads ); ?>">Videos e Downloads</a></li>
								</ul>
							</li>

							<li id="menuPreFabricados" class="footerMenu preFabricados">
								<a href="#_"><h4>Pré-fabricados de concreto</h4></a>
								<ul>
									<li><a href="#_">Soluções Construtivas</a></li>
									<li><a href="#_">Vantagens</a></li>
									<li><a href="#_">Obras Realizadas</a></li>
								</ul>
							</li>

							<li id="menuMeuPrecon" class="footerMenu meuPrecon">
								<a href="<?php echo home_url(); ?>/institucional/epc/"><h4>Venda de Imóveis</h4></a>
								<ul>
									<li><a target="_blank" href="http://www.meuprecon.com.br/categoria/imoveis-a-venda/">Imóveis a venda</a></li>
									<li><a target="_blank" href="http://www.meuprecon.com.br/nossa-planta/">Nossa planta</a></li>
									<li><a target="_blank" href="http://www.meuprecon.com.br/nosso-produto/">Nosso produto</a></li>
									<li><a target="_blank" href="http://www.meuprecon.com.br/entrega-garantida/">Entrega garantida</a></li>
								</ul>
							</li>

							<li id="menuFaleConosco" class="footerMenu faleConosco">
								<a href="<?php echo get_permalink('61'); ?>"><h4>Fale Conosco</h4></a>
								<ul>
									<li><a href="<?php echo home_url(); ?>/contato/">Geral</a></li>
									<li><a target="_blank" href="http://www.meuprecon.com.br/contato/">Venda de Imóveis</a></li>
									<li><a target="_blank" href="http://www.meuprecon.com.br/areadocliente/">Atendimento ao cliente</a></li>
								</ul>
							</li>
						</ul>

						<div class="telefone">
							<h3>
								<span>(31)</span>
								<?php if (kirki_get_option( 'telefone' )) { echo kirki_get_option( 'telefone' );} ?>
							</h3>
							<!-- <a class="email" href="mailto:comunicacao@preconengenharia.com.br" target="_blank">comunicacao@preconengenharia.com.br</p> -->
							<a class="faleConosco" href="<?php echo home_url() . '/contato'; ?>">Fale Conosco</a>
							<p>Acompanhe a Precon nas redes sociais</p>
							<div class="redesSociais">
								<a class="cadaRede facebook" target="_blank" href="https://www.facebook.com/preconengenharia?ref=ts&fref=ts"><?php echo get_template_part( 'img/icons/social', 'facebook.svg' ); ?></a>
								<a class="cadaRede linkedin" target="_blank" href="https://www.linkedin.com/company/119936?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A119936%2Cidx%3A2-3-6%2CtarId%3A1438349438452%2Ctas%3Aprecon"><?php echo get_template_part( 'img/icons/social', 'linkedin.svg' ); ?></a>
								<a class="cadaRede instagram" target="_blank" href="https://instagram.com/preconengenharia/"><?php echo get_template_part( 'img/icons/social', 'instagram.svg' ); ?></a>
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
