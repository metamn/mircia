<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


<?php 
  $cats = get_categories(); 
  foreach ($cats as $cat) {
    $category = $cat;
    break;
  }
   
  $thumbs = query_posts2('posts_per_page=-1&cat='.$category->term_id);  
?>

<div id="single" class="column span-24 last content">
  <div id="thumb" class="column span-5 last category-title">
    <h1>
      <?php echo $category->cat_name ?>
    </h1>   
    <ol class="thumbs inline-list">
      <?php 
        if ($thumbs) {
          while ($thumbs->have_posts()) : $thumbs->the_post(); update_post_caches($posts); ?>
            <li>
              <a href="<?php the_permalink(); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                <img src="<?php echo post_image($post->ID); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" />
              </a>              
            </li>
          <?php endwhile;
        }    
      ?>
    </ol> 
  </div>
  
  <div id="image" class="column span-19 last ">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>    
      <div id="image" class="block">
        <a href="<?php echo post_link($post->ID)?>">
          <img src="<?php echo post_image($post->ID, 'large'); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) )?>" />
        </a>
      </div>
      
      <div id="info" class="block">   
        <?php the_title(); ?>, 
        <?php the_tags(); ?>,    
        <?php the_date('j F Y')?>        
      </div>		  
    <?php endwhile; // end of the loop. ?>
  </div>
		
</div><!-- #container -->


<?php get_footer(); ?>
