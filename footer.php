<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>


<div id="footer" class="block">
  <div class="container">
    <div class="alignleft">
			  &copy; 2010 <a href="<?php bloginfo('home')?>" alt="Pagina principala" title="Pagina principala"><?php bloginfo('name')?></a>.
	  </div>
	</div>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
