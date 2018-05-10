<?php
/*
Template Name: Front Page
*/
?>
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php wp_title(''); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>ie8.css" /><![endif]-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	 <?php wp_head(); ?> 
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="<?php echo home_url(); ?>" id="logo"><?php bloginfo('name'); ?></a></h1>
								<hr />
								<p>Welcome!</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Start</a>
							</footer>
						</div>
					<!-- Nav -->
					<?php if (has_nav_menu('header-menu')):
						wp_nav_menu(array(	'theme_location' 	=> 'header-menu', 
											'menu_id' 			=> 'nav',
											'container' 		=> 'nav',
											'container_id' 		=> 'nav',
											));
					else:
					?>
						<nav id="nav">
							<ul>
								<li><a href="<?php echo home_url(); ?>">Home</a></li>
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="#">And a submenu &hellip;</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Phasellus consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
							</ul>
						</nav>
					<?php endif; ?>
				</div>
			<!-- Banner -->
				<section id="banner">
					<!--wordpress loop starts here-->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<header>
						<h2><strong><?php the_title(); ?></strong></h2>
						<p>
						<?php the_category();?>
						</p>
					</header>
				</section>
			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">
						<article>
							<?php get_sidebar('carousel1'); ?>
						</article>
						<article>
							<?php get_sidebar('carousel2'); ?>
						</article>
						<article>
							<?php get_sidebar('carousel3'); ?>
						</article>

						<article>
							<?php get_sidebar('carousel4'); ?>
						</article>

						<article>
							<?php get_sidebar('carousel5'); ?>
						</article>

						<article>
							<?php get_sidebar('carousel6'); ?>
						</article>

						<article>
							<?php get_sidebar('carousel7'); ?>
						</article>
						<!--
						<article>
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Sed quis rhoncus placerat</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/images/pic04.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Ultrices urna sit lobortis</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/images/pic05.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Varius magnis sollicitudin</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
					end of disabled carousels-->
					</div>
				</section>
<!-- Main -->
				<div class="wrapper style2">

					<article id="main" class="container special">
						<!--<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/images/pic06.jpg" alt="" /></a>
						<header>
							<h2><a href="#">Sed massa imperdiet magnis</a></h2>
							<p>
								Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
								pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
							</p>
						</header>
						<p>
							Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
							posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
							sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
							mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
							lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
							consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
							interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
							natoque aenean scelerisque.
						</p>
					-->
					<?php the_content(); ?>
						<footer>
							<!--<a href="<?php echo get_page_link(52); ?>" class="button">Continue Reading</a>-->
							<a href="http://localhost/wordpress/sample-page/" class="button">Continue Reading</a>
						</footer>
					</article>

				</div>
			<!--End wordpress cycle-->
			<?php endwhile; endif; ?>
			

<?php get_footer();?>