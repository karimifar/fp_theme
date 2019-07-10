<?php
/**
 * Template Name: With Banner
 *
 *
 * @package fathers_app
 */

get_header();
?>

	<div id="primary" class="container">
		<main id="main" class="site-main">
        <h1><?php the_title()?></h1>
		<?php
        while ( have_posts() ) :
            
			the_post(); ?>
            <p> <?php the_content() ?> </p>
			<!-- // get_template_part( 'template-parts/content', 'page' ); -->

			<!-- // If comments are open or we have at least one comment, load up the comment template. -->
			<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
