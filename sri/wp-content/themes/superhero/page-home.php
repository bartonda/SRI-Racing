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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="/wp-admin/js/slider.js" type="text/javascript"></script>
<script src="http://sri.dbartonphoto.com/wp-content/themes/superhero/js/jquery.flexslider.js"></script>
<script src="http://sri.dbartonphoto.com/wp-content/themes/superhero/js/jquery.flexslider-min.js"></script>

			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>