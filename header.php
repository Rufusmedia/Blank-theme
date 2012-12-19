<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="placeholder" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<!-- PLUGIN WILL PROVIDE META DESC -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/site-assets/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
	<?php wp_head(); ?>	
</head>

<body>
<header>
	<div class="container">
		<div class="sixteen columns">
			<div class="padding">
			
			</div><!-- end .padding -->
		</div><!--  end .sixteen.columns -->
	</div><!--  end .container  -->
</header>
<div class="container navigation">
	<div class="sixteen columns desktop main-nav">
		<nav>
			<?php wp_nav_menu( array('theme_location' => 'header-menu',
									 'menu_class'     => 'menu clearfix'  )); ?>
		</nav>
	</div><!-- end .sixteen.columns -->
	
	<nav class="main-nav mobile">
		<div class="sixteen columns clearfix">
			<form id="mobile-nav-select">
				<select class="mobile-menu">
				<option value="">Select Page...</option>
				<option value="<?php bloginfo('url') ?>/">Home</option>
				</select>
			</form>
		</div><!-- end .sixteen.columns -->
	</nav><!-- end .main-nav.mobile -->
</div><!--  end .container -->