<?php
/**
 * 
 * Template Name: Page with Sidebar
 * The template for displaying pages with a sidebar
 *
 * @package basic_catastic
 */

get_header();
?>
<div class="wrap">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
