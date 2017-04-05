<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inklink
 */

?>
</div>
</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="gallery-instagram">
		
	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4"></div>
				<div class="col-md-4 col-lg-4"></div>
				<div class="col-md-4 col-lg-4">
					<?php echo get_theme_mod('copy_right'); ?>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
