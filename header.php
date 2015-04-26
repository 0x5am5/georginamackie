<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<title><?php bloginfo('name') ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
		<meta property="og:image" content="">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		<meta type="description" content="Georgina’s most challenging, motivating, and sociable form of exercise. Either join in with one of her existing groups or perhaps start your own.">
  		<meta type="keywords" content="fitness, training, sport, pre-natal, post-natal, bootcamp, nutrition">
  		<meta name="viewport" content="width=device-width">
  		<meta name="robots" content="noodp,noydir">
  		<link rel="canonical" href="http://georginamackiefitness.co.uk/">
  		<meta property="og:locale" content="en_GB">
  		<meta property="og:title" content="Home - Georgina Mackie Fitness">
  		<meta property="og:description" content="Georgina’s most challenging, motivating, and sociable form of exercise. Either join in with one of her existing groups or perhaps start your own.">
  		<meta property="og:url" content="http://georginamackiefitness.co.uk/">
  		<meta property="og:site_name" content="Georgina Mackie Fitness">
  		<meta property="og:image" content="http://georginamackiefitness.co.uk/images/main_logo.png">

  		<meta name="google-site-verification" content="8_xo4wH7PANYVjLCzyTEVcjJVe3iSVeQ98KcPRsfuLg" />

		<?php wp_head(); ?>

		<script type="text/javascript">
			var html = document.getElementsByTagName("html")[0];
			if(html.className == "no-js") html.className = "js";
		</script>
	</head>	
	<body>

		<div class="container">

			<header>
				<div class="header">
					<h1 class="access">Georgina Mackie Fitness - <?php echo get_the_title( $ID ); ?></h1>
					<img src="<?php bloginfo('template_directory'); ?>/images/rep-member-badge.png" width="74" height="71"  alt="rep badge">
				</div>
				<nav>
					<?php $navCount = wp_get_nav_menu_items('Main Nav'); ?>
					<?php wp_nav_menu( array('menu' => 'Main Nav', 'menu_class'=>'col-'.count($navCount).' menu')); ?>
				</nav>
			</header>