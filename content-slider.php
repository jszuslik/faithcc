<?php
/**
 * Theme: No Rules Web Bootstrap
 *
 * Slider template
 *
 * @package nrw-bootstrap
 */
?>
<?php
  $args = array(
    'post_type'  => 'slider',
    'orderby'    => 'menu_order',
    'order'      => 'ASC',
    'post_count' => -1
  );
  $loop = null;
  $loop =new WP_Query($args);

  while ( $loop->have_posts() ) : $loop->the_post();
    $ID[] = get_the_ID();
    $title[] = get_the_title();
    $caption[] = get_field('caption');
    $image[] = get_field('image');
    $link_text[] = get_field('link_text');
    $url[] = get_field('link');
  endwhile;wp_reset_query();
  $arrlength = count($ID);
?>
<div id="faith-slider" class="owl-carousel owl-theme">
  <?php for ( $x = 0; $x < $arrlength; $x++ ) { ?>
    <div class="item">
      <img src="<?php echo $image[$x]['url']; ?>" alt="<?php echo $image[$x]['alt']; ?>" />
    </div>
  <?php } ?>
</div>
