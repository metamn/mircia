<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="page" class="single block">		
  <div class="container">
    <div id="info-menu" class="col-1 left">
      <ul>
        <li><a class="gray" href="<?php bloginfo('home')?>/informatii/stiri">Stiri</a></li>
        <li><a class="gray" href="<?php bloginfo('home')?>/informatii/bio">Biografie</a></li>
        <li><a class="gray" href="<?php bloginfo('home')?>/informatii/contact">Contact</a></li>
        <li><a class="gray" href="<?php bloginfo('home')?>/informatii/cautare">Cautare</a></li>
      </ul>
    </div>
    
    <div id="content" class="col-2 left">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <h2 class="entry-title"><?php the_title(); ?></h2>
	
	        <div class="entry-content">
		        <?php the_content(); ?>
		        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
		        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
	        </div><!-- .entry-content -->
	      </div><!-- #post-## -->   
	     <?php endwhile; ?>			
	   </div>
	</div><!-- #container -->
</div>


<?php get_footer(); ?>
