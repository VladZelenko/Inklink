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
	<div class="footer-widget-area">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4">
					<?php if ( is_active_sidebar( 'footer_sidebar_area-1' ) ) : ?>
						<div id=f ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )"primary" role="complementary">
							<?php dynamic_sidebar( 'footer_sidebar_area-1' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-lg-4">
					<?php if ( is_active_sidebar( 'footer_sidebar_area-2' ) ) : ?>
						<div id=f ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )"primary" role="complementary">
							<?php dynamic_sidebar( 'footer_sidebar_area-2' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-lg-4 flexbox">
					<div class="copyright"><?php echo get_theme_mod('copy_right'); ?></div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
