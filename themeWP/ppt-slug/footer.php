<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ptt
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ppt-slug' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ppt-slug' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ppt-slug' ), 'ppt-slug', '<a href="http://www.solopx.com" rel="designer">solopx</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- add bootstrap and jquerry -->
<script type="text/javascript" src="http://www.genetic.ro/pttdev/wp-content/themes/ppt-slug/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.genetic.ro/pttdev/wp-content/themes/ppt-slug/js/jquery.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
