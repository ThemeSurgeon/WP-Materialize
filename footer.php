<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WP-Materialize
 */
?>

	</div><!-- #content -->
	<footer class="page-footer">
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col m4">
						widget 1
					</div>
					<div class="col m4">
						widget 2
					</div>
					<div class="col m4">
						widget 3
					</div>
				</div>

			</div>
		</div>
		<div id="colophon" class="footer-copyright" role="contentinfo">
			<div class="container">
				<div class="">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wpmtd' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wpmtd' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'wpmtd' ), 'WP-Materialize', '<a href="http://tapied.com" rel="designer">Tamal Dey</a>' ); ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
