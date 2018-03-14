<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Industrial_Metallics_Wedding_Website
 */

?>


	<!-- section map -->
	<section class="air-block gallery-carousel pt-0" id="map" style="position:relative;z-index:1;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="gmap"></div>
				</div>
			</div>
		</div>
	</section>
	
	</div><!-- #content -->
	<!-- section map-footer -->
	<section class="air-block jarallax imagebg map-footer pb-5" data-jarallax data-speed="0.2" data-overlay="3">
		<img class="jarallax-img" src="<?php echo get_template_directory_uri();?>/assets/images/wedding/footer-bg.jpg" height="400px" alt="countdown-background">
		<div class="container text-center map-footer_content">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/wedding/footer-logo.png" width="100">
		</div>
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
