(function( root, $, undefined ) {
	'use strict';

	$(function () {

		var $headerButton = $('#header__button'),
			$mM = $('.menuMobile'),
			$header = $('.header');

		$headerButton.removeClass('hamburger--open');
		$mM.removeClass('menuMobileAberto');
		$header.removeClass('headerMenuAberto');

		$headerButton.on('click', function(e) {
			e.preventDefault();

			$(this).toggleClass('hamburger--open');
			$mM.toggleClass('menuMobileAberto');
			$header.toggleClass('headerMenuAberto');
		});


		$('.maisNoticias').slick({
			slidesToShow : 4,
			slidesToScrow : 4,
			vertical : true,
			prevArrow : '#btVolta',
			nextArrow : '#btVai'
		 });

	});

} ( this, jQuery ));