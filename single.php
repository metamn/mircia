<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="single" class="column span-24 last image">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div id="nav-above" class="navigation">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
		</div><!-- #nav-above -->

    <div id="image">
      <img src="<?php echo post_image($post->ID, 'large'); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" />
    </div>
    <div id="info">
      <div id="title" class="column span-8 last"><?php the_title()?></div>
      <div id="category" class="column span-8 last"><?php the_category()?></div>
      <div id="date" class="column span-6 last"><?php the_date('j F Y')?></div>
      <div id="navigation" class="column span-2 last">
        <?php 
          previous_post_link('%link', '&larr;', true);
          next_post_link('%link', '&rarr;', true);
        ?>
      </div>
    </div>		

		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
		</div><!-- #nav-below -->

		

<?php endwhile; // end of the loop. ?>

		
</div><!-- #container -->


<?php get_footer(); ?>
