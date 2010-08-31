<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/mircia.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="/wp-includes/js/jquery/jquery.js"><\/script>')</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.init.js"></script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div class="container">

  <div id="header" class="column span-24 last">
	  <?php 
	    $cats = array(3, 4, 5, 6, 7);
	    foreach ($cats as $cat) {
	      $c = get_category($cat); 
	      $descr = $c->description; ?>	       
	      <div id="category" class="column span-5 last">
	        <a href="<?php echo get_category_link($c->term_id)?>" alt="<?php echo $descr?>" title="<?php echo $descr?>">
	        <?php get_cat_icon('cat='.$c->term_id); ?>
	        <?php echo $c->name; ?>
	        </a>
	      </div>
	  <?php }?>
	</div>

	
