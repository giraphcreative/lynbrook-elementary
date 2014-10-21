

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


// Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-38315794-13', 'auto');
ga('send', 'pageview');

