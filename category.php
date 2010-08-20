<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="category" class="column span-24 last">			
			
		  <?php get_template_part( 'loop', 'category' );?>
			
		</div><!-- #container -->

<?php get_footer(); ?>
