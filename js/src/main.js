

// onload
jQuery(document).ready(function($){

	if ( $( 'body' ).hasClass( 'home' ) ) {

		// clicked 'home'
		$( 'nav.main-menu ul li:nth-child(1) a' ).click(function(e){
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 1000);
		});

		// clicked 'about'
		$( 'nav.main-menu ul li:nth-child(2) a' ).click(function(e){
			e.preventDefault();
			$('html,body').animate({
				scrollTop: $( '.about' ).offset().top - 50
			}, 1000);
		});

		// clicked 'projects'
		$( 'nav.main-menu ul li:nth-child(3) a' ).click(function(e){
			e.preventDefault();
			$('html,body').animate({
				scrollTop: $( '.projects' ).offset().top - 50
			}, 1000);
		});

		// clicked 'volunteer'
		$( 'nav.main-menu ul li:nth-child(4) a' ).click(function(e){
			e.preventDefault();
			$('html,body').animate({
				scrollTop: $( '.volunteers' ).offset().top - 50
			}, 1000);
		});

		// clicked 'news'
		$( 'nav.main-menu ul li:nth-child(5) a' ).click(function(e){
			e.preventDefault();
			$('html,body').animate({
				scrollTop: $( '.news' ).offset().top - 50
			}, 1000);
		});

		// clicked 'join'
		$( 'nav.main-menu ul li:nth-child(6) a' ).click(function(e){
			e.preventDefault();
			$('html,body').animate({
				scrollTop: $( '.join' ).offset().top - 50
			}, 1000);
		});

	}

});