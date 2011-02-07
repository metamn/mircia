<?php
  /*
  Template Name: Startpage
   * @package WordPress
   * @subpackage Default_Theme
   */

  get_header();
?>

<div id="startpage" class="block">
  <div class="container">
    <div id="info-menu" class="col-1 left">
      <ul>
        <li><a class="gray" href="<?php bloginfo('home')?>/informatii/stiri">Stiri</a></li>
        <li><a class="gray" href="<?php bloginfo('home')?>/informatii/bio">Biografie</a></li>
        <li><a class="gray" href="<?php bloginfo('home')?>/informatii/contact">Contact</a></li>
        <li><a class="gray" href="<?php bloginfo('home')?>/informatii/cautare">Cautare</a></li>
      </ul>
    </div>
    
    <div id="logo" class="col-2 left">
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
