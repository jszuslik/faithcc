<?php
/**
 * Theme: No Rules Web Bootstrap
 *
 * Template Name: Sermons Page
 *
 * @package nrw-bootstrap
 */
?>
<?php get_header(); ?>
<div class="container">
	<div id="main-grid" class="row">
		<div id="primary" class="content-area col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<main id="main" class="site-main" role="main">
				<?php $args = array(
					'post_type' => 'post',
					'category_name' => 'sermons',
					'posts_per_page' => -1
				);
				$loop = null;
				$loop = new WP_Query($args);
				while ($loop->have_posts()) : $loop->the_post() ;
					$title = get_the_title();
					$link = get_the_permalink();
					$date = get_the_date();
					$content = get_the_content();
					$thumb_url = get_the_post_thumbnail_url();
					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'sermon-thumb');

				?>
				<div class="sermon_home">
					<?php $date = explode(' ', $date); ?>
					<div class="sermon_date_label">
						<span class="sermon_date_wrapper">

							<span class="sermon_date_line_1"><?php echo $date[0]; ?></span>
							<span class="sermon_date_line_2"><?php echo $date[1]; ?></span>
							<span class="sermon_date_line_3"><?php echo $date[2]; ?></span>
						</span>
					</div>
					<div class="sermon_image">
						<a href="<?php echo $link; ?>">
							<?php if(!$thumb){
								echo '<img class="img-responsive" src="/wp-content/uploads/2016/01/sermon.png" alt="" />';
							} else {
								echo '<img class="img-responsive" src="'.$thumb[0].'" alt="" >';
							}?>

						</a>
					</div>
					<a href="<?php echo $link; ?>">
						<h3 class="sermon_title"><?php echo $title; ?></h3>
					</a>
				</div>
				<?php endwhile; wp_reset_query(); ?>

			</main>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
