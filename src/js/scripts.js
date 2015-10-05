(function( root, $, undefined ) {
	'use strict';

	$(function () {

		var $headerButton = $('#header__button'),
				$mM = $('.menuMobile'),
				$bgC = $('.bgCinza'),
				$cqs = $('.cadaQuemSomos'),
				$header = $('.header');
				// $mastheadChildren = $('#mast-head .umSlide');

		$('#mast-head .umSlide:gt(0)').hide();
		setInterval(function(){
			$('#mast-head :first-child').fadeOut(500)
				.next('.umSlide').fadeIn(500)
				.end().appendTo('#mast-head');
		}, 3000);


		$headerButton.removeClass('hamburger--open');
		$mM.removeClass('menuMobileAberto');
		$header.removeClass('headerMenuAberto');

		$headerButton.on('click', function(e) {
			e.preventDefault();

			$(this).toggleClass('hamburger--open');
			$mM.toggleClass('menuMobileAberto');
			$header.toggleClass('headerMenuAberto');
		});

		$('.maisDownloads').slick({
			slidesToShow : 4,
			slidesToScrow : 4,
			vertical : true,
			prevArrow : '#btVolta',
			nextArrow : '#btVai'
		 });

		$('.maisNoticias').slick({
			slidesToShow : 4,
			slidesToScrow : 1,
			vertical : true,
			prevArrow : '#btVolta',
			nextArrow : '#btVai'
		 });

			jQuery.fn.animateAuto = function(prop, speed, callback){
			    var elem, height, width;
			    return this.each(function(i, el){
			        el = jQuery(el), elem = el.clone().css({'height':'auto','width':'auto'}).appendTo(el.parent());
			        height = elem.css('height'),
			        width = elem.css('width'),
			        elem.remove();

			        if(prop === 'height') {
			            el.animate({'height':height}, speed, callback);
			        } else if(prop === 'width') {
			            el.animate({'width':width}, speed, callback);
			        } else if(prop === 'both') {
			            el.animate({'width':width,'height':height}, speed, callback);
							}
			    });
			};

		 $bgC.each(function() {
				$(this).animate({height: 0, 'padding-top': 0, 'padding-bottom': 0, margin: 0}, 400);
		 });



		 $cqs.on('click', function () {

		 	 $('.cadaQuemSomos').children('.boxPessoas').each(function() {
		 	 		$(this).removeClass('boxPA');
		 	 });
			 $(this).siblings().children('.bgCinza').animate({height: 0, 'padding-top': 0, 'padding-bottom': 0, margin: 0}, 400);

			 if ($(this).children('.bgCinza').height() < 50) {

				 $(this).children('.bgCinza').animateAuto('height', 400).css({ 'margin-bottom': '40px' });
				 $(this).children('.boxPessoas').addClass('boxPA');
				//  $thisS.removeClass('fechaBGC');
			 } else {
				 $(this).children('.bgCinza').animate({height: 0, 'margin-bottom': 0}, 400);
				 $(this).children('.boxPessoas').removeClass('boxPA');
				//  $thisS.addClass('fechaBGC');
			 }

		 });

	});

} ( this, jQuery ));
