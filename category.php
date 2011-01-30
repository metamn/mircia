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
  $cat_name = single_cat_title('', false);
  $cat_id = get_cat_ID($cat_name);
  $category = get_category($cat_id);
  $thumbs = query_posts2('posts_per_page=-1&cat='.$category->term_id); 
?>

<div id="category" class="collection block">
  <div class="container">
    <div id="thumb" class="col-1 left">
      <h1 class="category-title">
        <?php echo $category->cat_name ?>
      </h1>   
      <div id="items">
        <?php 
          if ($thumbs) {
            $i = 0;
            while ($thumbs->have_posts()) : $thumbs->the_post(); update_post_caches($posts); 
              $i += 1; ?>
              <div id="item" class="left">
                <a href="<?php the_permalink(); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                  <img src="<?php echo post_image($post->ID); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" />                                   
                </a>
                <br/>
                <?php echo $i; ?>               
              </div>
            <?php endwhile;
          }    
        ?>
      </div> 
    </div>
    
    <div id="image" class="col-2 left">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>    
        <div id="image" class="block">
          <a href="<?php echo post_link($post->ID)?>">
            <img src="<?php echo post_image($post->ID, 'large'); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) )?>" />
          </a>
        </div>
        
        <div id="info" class="block">   
          <?php the_title(); ?>, 
          <?php the_tags(); ?>      
        </div>		  
      <?php 
      break;
      endwhile; // end of the loop. ?>
    </div>
  </div>		
</div>

<?php get_footer(); ?>
