<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>

    <script>
      (function(d) {
        var config = {
          kitId: 'fug8vxk',
          scriptTimeout: 3000
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

	</head>
	<body <?php body_class(); ?>>


			<!-- header -->
			<header class="header clear <?php if (wp_is_mobile()) { echo 'menuAberto'; } elseif (!is_page('home')) { echo 'menorNasInternas'; } ?>" role="banner">
				<!-- <?php if (shortcode_exists( 'simple-slider' )) : do_shortcode( '[simple-slider]' ); endif; ?> -->
				<div id="mast-head">
					<?php
					if( have_rows('imagens', 'option') ):
					    while ( have_rows('imagens', 'option') ) : the_row();
							echo '<div class="umSlide" style="background-image:url('. get_sub_field('slide') .')"></div>';
					    endwhile;
					endif;
					?>
				</div>

				<div class="wrapper">
					<div class="barraDeCima">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->
						<!-- menu para escolher portal -->
						<ul class="qualPortal">
							<li><a class="current" href="http://ingage.guiharrison.com/precon2">Institucional</a></li>
							<li><a href="http://ingage.guiharrison.com/precon1">Pré-fabricado de concreto</a></li>
							<li><a href="http://www.meuprecon.com.br">Venda de imóveis</a></li>
						</ul>
						<!-- /menu para escolher portal -->

						<!-- telefone -->
						<div id="telefoneHead"><h2><span>(31)</span> <?php if (kirki_get_option( 'telefone' )) { echo kirki_get_option( 'telefone' );} ?></h2></div>

					</div>
				</div>

				<div class="header__menu">
				  <a id="header__button" class="hamburger" href="#">
				    <div class="hamburger__inner"></div>
				  </a>
				</div>

				<div class="<?php if (wp_is_mobile()) { echo 'menuMobile'; } else { echo 'barraDeBaixo'; } ?>">

					<ul id="menuPrincipal">

						<li class="boxPreto">
							<a href="<?php echo home_url(); ?>/institucional/quem-somos" class="cadaItem" id="itemMenu1">
								<span class="icone menu1"></span>
								<span class="iconeA menuAzul1"></span>
								<h3 class="menuTitulo">Institucional</h3>
									<hr>
								<p class="menuDesc">Quem somos e a nossa história.</p>
								<span class="saibaMais">SAIBA MAIS</span>
								<span class="setinhaDireita"></span>
							</a>
						</li>

						<li class="boxPreto">
							<a href="<?php echo home_url(); ?>/institucional/pessoas" class="cadaItem" id="itemMenu3">
								<span class="icone menu2"></span>
								<span class="iconeA menuAzul2"></span>
								<h3 class="menuTitulo">Pessoas</h3>
									<hr>
								<p class="menuDesc">Materiais ricos criados para você.</p>
								<span class="saibaMais">SAIBA MAIS</span>
								<span class="setinhaDireita"></span>
							</a>
						</li>

						<li class="boxPreto">
							<a href="<?php echo get_permalink( '31' ); ?>" class="cadaItem" id="itemMenu3">
								<span class="icone menu3"></span>
								<span class="iconeA menuAzul3"></span>
								<h3 class="menuTitulo">Inovação e Sustentabilidade</h3>
									<hr>
								<p class="menuDesc">Materiais ricos criados para você.</p>
								<span class="saibaMais">SAIBA MAIS</span>
								<span class="setinhaDireita"></span>
							</a>
						</li>

						<li class="boxPreto">
							<a href="<?php echo site_url("/noticias/"); ?>" class="cadaItem" id="itemMenu2">
								<span class="icone menu4"></span>
								<span class="iconeA menuAzul4"></span>
								<h3 class="menuTitulo">Notícias</h3>
									<hr>
								<p class="menuDesc">Fique por dentro das novidades.</p>
								<span class="saibaMais">SAIBA MAIS</span>
								<span class="setinhaDireita"></span>
							</a>
						</li>

						<li class="boxPreto">
							<a href="<?php echo get_post_type_archive_link( downloads ); ?>" class="cadaItem" id="itemMenu3">
								<span class="icone menu5"></span>
								<span class="iconeA menuAzul5"></span>
								<h3 class="menuTitulo">Downloads & Vídeos</h3>
									<hr>
								<p class="menuDesc">Materiais ricos criados para você.</p>
								<span class="saibaMais">SAIBA MAIS</span>
								<span class="setinhaDireita"></span>
							</a>
						</li>

					</ul>

				</div>

			</header>
			<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">
