<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?> Lynbrook PTA</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>


<header>

	<div class="wrap">

		<nav class="main-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

		<div class="header<?php print ( is_home() || is_front_page() ? "-home" : "" ); ?>">
			<div class="logo">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/clover.png" class="clover" alt="">
				<h1>Lynbrook Elementary School PTA</h1>
				<h3>Building Bridges of Diversity, Community &amp; Support</h3>
			</div>
			<img src="<?php bloginfo( 'template_url' ); ?>/img/title-one-school.jpg" class="title-one-school">
		</div>
	