<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		header.inc.php
* @Package:		GetSimple
* @Action:		FoliSimple theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- The page title in format: Page Title - Site Name -->
  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<meta name="robots" content="index, follow">
	<meta name="description" content="<?php get_page_meta_desc(); ?>" />
	<meta name="keywords" content="<?php get_page_meta_keywords(); ?>" />

	<link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">

 		<!-- Javascript links-->	

 	<!-- Condidtional Internet Explorer fixes for HTML5 & PNGs->	 				
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  	<![endif]-->
  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/js/my.js"></script>

	<?php get_header(); ?>
	
</head> 
<body>
<div class="wrapper clearfix">
	
	<!-- site header -->
	<header class="clearfix">
				
				<!-- sitename -->
				<a href="<?php get_site_url(); ?>" id="sitename" ><?php get_site_name(); ?></a>
				
				<!-- main navigation -->
				<nav id="projects">
					<a id="projects-toggle" href="#">Projects</a>
					<ul id="projects-content">
						<?php get_navigation(get_page_slug(FALSE)); ?>
					</ul>
				</nav>
				
				<!-- about me -->
				<div id="about">
					<a id="about-toggle" href="#">About Me</a>
						<div id="about-content">
							<!-- About content. Make sure you have a component called \about/ and any formatting is in HTML. Or remove the get_component line and put your about me text in this div -->
							<?php get_component('about');	?>				
						</div>
				</div>
				
					
  </header>