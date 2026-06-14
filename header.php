<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<?php spurt_header() ?>
	
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Geist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

		<!-- Preload belangrijke FA-fonts -->
		<link rel="preload" href="<?php echo CREATORS_THEME_URI; ?>/assets/fontawesome/webfonts/fa-sharp-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
		<link rel="preload" href="<?php echo CREATORS_THEME_URI; ?>/assets/fontawesome/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">

	</head>
	<body <?php body_class(); ?>>
		<?php get_template_part( 'template-parts/layouts/layout', 'header' ); ?>

