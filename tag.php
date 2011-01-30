<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php 
  $cat_name = single_tag_title('', false);  
?>

<div id="tag" class="collection block">
  <div class="container">
    <div id="thumb" class="col-1 left">
      <h3 class="category-title">
        <?php echo $cat_name ?>
      </h3>   
      <div id="items">
        <?php 
          $i = 0;
          if ( have_posts() ) while ( have_posts() ) : the_post(); 
          $i += 1;
          ?>    
          <div id="item" class="left">
            <div class="img">
              <img class="link" src="<?php echo post_image($post->ID); ?>" rel="<?php echo post_image($post->ID, 'large'); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" />                                   
            </div>
            <div class="nr">
              <?php echo $i; ?>
            </div>               
          </div>		  
        <?php endwhile; // end of the loop. ?>     
        
      </div> 
    </div>
    
    <div id="image" class="col-2 left">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>    
        <div id="large-image" class="block">
          <a href="<?php echo post_link($post->ID)?>">
            <img src="<?php echo post_image($post->ID, 'large'); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) )?>" />
          </a>
        </div>
        
        <div id="info" class="block">   
          <?php the_title(); ?>
          <?php the_tags(' // '); ?>      
        </div>		  
      <?php 
      break;
      endwhile; // end of the loop. ?>
    </div>
  </div>		
</div>

<?php get_footer(); ?>
