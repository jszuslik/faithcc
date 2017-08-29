<?php
/**
 * Theme: No Rules Web Bootstrap
 *
 * Template Name: Homepage
 *
 * @package nrw-bootstrap
 */
?>
<?php get_header(); ?>
<section class="all-content">
  <section id="slider">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
          <div class="module parallax parallax-1" style="background-image:url('<?php echo $url; ?>');">
            <div class="container">
              <h1 class="banner-head"><span>Welcome to Faith Community Church</span></h1>
<!--              <h2 class="banner-subhead"><span>Test 2</span></h2>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="info_area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <div class="slide-wrapper">
            <div id="owl-info" class="owl-carousel owl-theme">
              <?php
                $args = array(
                  'post_type' => 'post',
                  'category_name' => 'slider'
                );
                $loop = null;
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post() ;
                  $title = get_the_title();
                  $link = get_the_permalink();
                  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'category-thumb' );
                  $url = $thumb['0'];
              ?>
                  <div class="item" style="background-image:url('<?=$url?>');background-position: center center; background-repeat: no-repeat; background-size: cover">
                    <a href="<?php echo $link; ?>">
                      <h2 class="slider-caption"><span><?php echo $title; ?></span></h2>
                    </a>
                  </div>
              <?php endwhile; wp_reset_query(); ?>

            </div>
            <div class="customNavLeft">
              <a class="btn prev"><i class="fa fa-angle-left"></i></a>
            </div>
            <div class="customNavRight">
              <a class="btn next"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="mobile-info">
            <h3>Faith News</h3>
            <table class="table">
              <tbody>
            <?php
              $args = array(
                 'post_type' => 'post',
                 'category_name' => 'slider'
              );
              $loop = null;
              $loop = new WP_Query($args);
              while ($loop->have_posts()) : $loop->the_post() ;
                $title = get_the_title();
                $link = get_the_permalink();
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'mobile-thumb');
                $thumb_url = $thumb[0];
                $content = get_the_content();
                $excerpt = mobile_news_excerpt($content).'...';

            ?>

                  <tr>
                    <td class="mobile-news-image"><a href="<?php echo $link; ?>"><img src="<?php echo $thumb_url; ?>" alt="<?php echo $title; ?>" ></a></td>
                    <td class="mobile-news-content"><a href="<?php echo $link; ?>"><h4><?php echo $title; ?></h4><p><?php echo $excerpt; ?></p></a></td>
                  </tr>

            <?php endwhile; wp_reset_query();?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="email_form">
            <div class="email_heading">
              <h3>Stay Connected to Faith Community Church</h3>
            </div>
            <div class="email_subscribe">
              <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2 class="mission_head">The Mission of Faith Community Church Is</h2>
          <div id="owl-mission" class="owl-carousel owl-theme">

            <div class="item">
              <h2 class="mission_body">To reach, teach, and preach God’s love through Jesus Christ</h2>
            </div>
            <div class="item">
              <h2 class="mission_body">To build community among the followers of Christ through worship and exploration of His Word</h2>
            </div>
            <div class="item">
              <h2 class="mission_body">To function as an autonomous, independent, and Congregational church</h2>
            </div>

          </div>
        </div>
      </div>
      <div class="row">
          <?php
            // echo '<pre>';
            //   print_r( get_field('funnel_1')  );
            // echo '</pre>';
            $funnel_1 = get_field('funnel_1');
            $funnel_1_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($funnel_1->ID), 'funnel-thumb' );
            $url_1 = $funnel_1_thumb['0'];
            $title_1 = get_the_title($funnel_1->ID);
            $funnel_2 = get_field('funnel_2');
            $funnel_2_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($funnel_2->ID), 'funnel-thumb' );
            $url_2 = $funnel_2_thumb['0'];
            $title_2 = get_the_title($funnel_2->ID);
            $funnel_3 = get_field('funnel_3');
            $funnel_3_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($funnel_3->ID), 'funnel-thumb' );
            $url_3 = $funnel_3_thumb['0'];
            $title_3 = get_the_title($funnel_3->ID);
          ?>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="funnel" style="background-image:url('<?php echo $url_1; ?>')">
            <a href="<?php the_permalink($funnel_1->ID); ?>">
              <div class="funnel_inner funnel_orange">
                <span class="funnel_helper">
                  <h3 class="funnel_title"><?php echo $title_1; ?></h3>
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="funnel" style="background-image:url('<?php echo $url_2; ?>'); background-repeat: no-repeat;
                  background-position: center">
            <a href="<?php the_permalink($funnel_2->ID); ?>">
              <div class="funnel_inner funnel_green">
                <span class="funnel_helper">
                  <h3 class="funnel_title"><?php echo $title_2; ?></h3>
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="funnel" style="background-image:url('<?php echo $url_3; ?>');">
            <a href="<?php the_permalink($funnel_3->ID); ?>">
              <div class="funnel_inner funnel_blue">
                <span class="funnel_helper">
                  <h3 class="funnel_title"><?php echo $title_3; ?></h3>
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h1>Upcoming Events</h1>
          <?php echo do_shortcode('[calendar id="104"]'); ?>
          <a class="btn btn-default calender_btn" href="/events/">View Calendar</a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h1>Latest Sermon</h1>
          <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'sermons',
              'posts_per_page' => 2
            );
            $loop = null;
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post() ;
            $title = get_the_title();
            $link = get_the_permalink();
            $date = get_the_date();
              $thumb_url = get_the_post_thumbnail_url();
              $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'sermon-thumb');
             // echo '<pre>'; var_dump($thumb); echo '</pre>';
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
          <a class="btn btn-default sermon_btn" href="/sermons/">View All Sermons</a>
        </div>
      </div>
    </div>
  </section>
</section>


<?php get_footer(); ?>
