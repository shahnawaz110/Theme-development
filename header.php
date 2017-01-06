<!DOCTPE HTML>
<html lang="en-us">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meata name="viewport" content="width=device-width initial-scale=1.0">
	<title><?php bloginfo('name');?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans|Open+Sans+Condensed:300|Oswald" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/flexslider.css"/>
	<?php wp_head(); ?>

</head>
<body>

		<div class="container">
			<header class="site-header">
				<h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
				<div class="top-search">
					<?php get_search_form();?>
				</div>
				<div class="clearfix">
					
				</div>
			</header>
			<nav class="main-nav">
				<?php wp_nav_menu(array('theme_location'=>'main-menu'));?>
			</nav>
	
	
	
	
