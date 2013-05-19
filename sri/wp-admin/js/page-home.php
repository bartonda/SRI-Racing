<?php
/**
 * Template Name: Page-Home
 *
 * The template for displaying full-width pages.
 *
 * @package Superhero
 * @since Superhero 1.0
 */



get_header(); ?>

		
		<div id="primary" class="content-area home-page">
		<!--Items for home page-->
<link rel="stylesheet" href="/wp-content/themes/superhero/flexslider.css" type="text/css" media="screen" />
<script src="/wp-content/themes/superhero/js/modernizr.js"></script>
		
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
			<script src="/wp-admin/js/jquery.flexslider.js" type="text/javascript"></script>
			<script src="/wp-admin/js/jquery.flexslider-min.js" type="text/javascript"></script> 
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>