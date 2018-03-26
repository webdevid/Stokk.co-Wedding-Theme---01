<?php 
/* Template name: Page Blank */

get_header();

		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>