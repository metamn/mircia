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


<div id="footer" class="column span-24 last">
  <div class="alignleft">
			&copy; 2010 Mircia Dumitrescu.
			<br/>
			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Pagina principala</a>
  </div>
  <div class="alignright">
		Creat de <a href="http://clair.ro">clair.ro</a> cu <a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">WordPress</a>
	</div>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</div> <!--container -->
</body>
</html>
