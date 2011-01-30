<?php
  
  get_header();
?>

<div id="search-results" class="block">
  <div class="container">
    <h3>Rezultatul cautarii pentru <em><?php echo get_search_query() ?></em></h3>
    <?php 
      if ( have_posts() ) {
        while ( have_posts() ) : the_post(); ?>    
        <div id="item" class="left">
          <a href="<?php the_permalink() ?>">
            <img src="<?php echo post_image($post->ID, 'medium'); ?>" title="<?php printf( the_title_attribute( 'echo=0' ) ); ?>" alt="<?php printf( the_title_attribute( 'echo=0' ) )?>" />
          </a>
          
          <div id="info" class="block">   
            <?php the_title(); ?>
            <?php the_tags(' // '); ?>      
          </div>
        </div>       
        		  
        <?php endwhile; 
      } else { ?>
        <p>Expresia cautata nu s-a gasit.</p>
        <?php get_search_form(); ?>
      <?php } ?>
  </div>  
</div>

<?php get_footer(); ?>
