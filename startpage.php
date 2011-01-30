<?php
  /*
  Template Name: Startpage
   * @package WordPress
   * @subpackage Default_Theme
   */

  get_header();
?>

<div id="startpage" class="block">
  <div class="container content">
    <div id="logo" class="block">
      <a href="<?php bloginfo('home')?>">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.gif" alt="Despre <?php bloginfo('name')?>" title="Despre <?php bloginfo('name')?>" />
        <h1 class="logo">
          <span class="mircia">Mircia</span><br/>
          <span class="dumi">Dumitrescu</span>
        </h1>
      </a>     
    </div>
  </div>  
</div>

<?php get_footer(); ?>
