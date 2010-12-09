<?php
  /*
  Template Name: Startpage
   * @package WordPress
   * @subpackage Default_Theme
   */

  get_header();
?>

<div id="startpage" class="column span-24 last content">
  <div id="logo" class="column span-8">
    <a href="<?php bloginfo('home')?>">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.gif" alt="Despre <?php bloginfo('name')?>" title="Despre <?php bloginfo('name')?>" /></a>
  </div>
  <div id="about" class="column span-15 prepend-1 last">
    <div class="box">
      <?php echo page_content('despre-mircia') ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
