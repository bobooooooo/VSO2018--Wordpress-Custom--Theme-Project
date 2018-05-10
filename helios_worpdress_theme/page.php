<?php
/*
Template Name: Page 
*/
?>
<?php get_header();?>
			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="4u 12u(mobile)" id="sidebar">
						<hr class="first" />
								<!--get sidebar wpress function-->
								<?php get_sidebar('left'); ?>
							</div>
							<div class="8u 12u(mobile) important(mobile)" id="content">
							<!--open php tag and start loop-->
							<?php
							//check for content
								//check posts
								if(have_posts()):
									while(have_posts()):
										the_post();
							?>
							<!--end php tag-->
								<article id="main">
									<header>
										<h2><a href="#"><?php the_title(); ?></a></h2>
										<p>
											<?php the_content(); ?>
										</p>
									</header>
								</article>
							</div>
						</div>
						<!--end of loop is here-->
						<?php
							endwhile;
							endif;
						?>
						<p>
						<?php
						while ( have_posts() ) : the_post();
						if ( comments_open() || get_comments_number() ) {
						comments_template();
						}
						endwhile;
						?>
						</p>

						<hr />
						<div class="row" id="bottom_sidebar">
							<article class="4u 12u(mobile) special">
								<?php get_sidebar('bottom1'); ?>
							</article>	
							<article class="4u 12u(mobile) special">
								<?php get_sidebar('bottom2'); ?>
							</article>
							<article class="4u 12u(mobile) special">
								<?php get_sidebar('bottom3'); ?>
							</article>
						</div>
					</div>


				</div>
<?php get_footer();?>