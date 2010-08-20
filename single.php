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
    
    <div id="image">
      <a href="<?php echo post_link($post->ID)?>">
        <img src="<?php echo post_image($post->ID, 'large'); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) )?>" />
      </a>
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

			

<?php endwhile; // end of the loop. ?>

		
</div><!-- #container -->


<?php get_footer(); ?>
