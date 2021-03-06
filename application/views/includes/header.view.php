<!DOCTYPE html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="<?php echo $config['app']['lang']; ?>" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $config['app']['lang']; ?>" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $config['app']['lang']; ?>" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $config['app']['lang']; ?>" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $config['lang']['default']; ?>" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php echo $config['display']['charset']; ?>">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
		   Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php echo $config['display']['title']['prefix']. $title; ?></title>
		<meta name="description" content="<?php echo $config['app']['desc']; ?>">
		<meta name="author" content="<?php echo implode(', ', $config['app']['authors']); ?>">

		<!--  Mobile viewport optimized: j.mp/bplateviewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<base href="<?php echo $config['app']['base']; ?>">

		<!-- CSS : implied media="all" -->
		<link rel="stylesheet" href="css/style.css?v=2">
		<link rel="stylesheet" href="css/960_24_col.css?v=2">
		<link rel="stylesheet" href="css/global.css?v=2">

		<!-- Uncomment if you are specifically targeting less enabled mobile browsers
		<link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

		<!--[if lt IE 7 ]>
		<script src="js/libs/dd_belatedpng.js"></script>
		<script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
		<![endif]-->
		
		<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
		<script src="js/libs/modernizr-1.7.min.js"></script>
	</head>

	<body>
		<section id="header_wrapper">
			<header>
				<div class="logo">EFW</div>
				<nav>
					<ul>
						<li></li>
					</ul>
				</nav>
			</header>
		</section>
					
		<section id="content_wrapper">
			<section class="container_24 clearfix">
				<section class="content grid_24 indent">