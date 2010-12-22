<?php
  /*
  Template Name: Startpage
   * @package WordPress
   * @subpackage Default_Theme
   */

  get_header();
?>

<div id="startpage" class="column span-24 last content">
  <div id="logo" class="column span-19 prepend-5 last">
    <a href="<?php bloginfo('home')?>">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.gif" alt="Despre <?php bloginfo('name')?>" title="Despre <?php bloginfo('name')?>" />
      <h1 class="logo">
        <span class="mircia">Mircia</span><br/>
        <span class="dumi">Dumitrescu</span>
      </h1>
    </a>     
  </div>  
</div>

<?php get_footer(); ?>
