<?php
/**
 * Theme: No Rules Web Bootstrap
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package nrw-bootstrap
 */
?>
<?php get_header(); ?>
<div class="container">
	<div id="main-grid" class="row">
		<div id="primary" class="content-area col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>

				<?php endwhile; // end of the loop. ?>

			</main>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>