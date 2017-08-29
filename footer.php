<?php ?>
</div>
<footer class="desktop-footer">
  <div class="ftr-wrap-1">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
          <h3>Faith Community Church</h3>
          <h5>Service Times</h5>
          <h6>Sunday - 9:30 AM</h6>
          <h4>Contact Us</h4>
          <h6>7700 W. Faith Drive<br />Franklin, WI 53132</h6>
          <h6>office@faithcc.us</h6>
          <br />
          <h6>P: 414-433-0222</h6>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2">
          <div class="footer-menu">
            <?php wp_nav_menu(
                  array(
                    'menu' => 'Footer',
                    'menu_class' => 'footer-nav',
                    'depth'=> 3,
                    'container'=> false,
                    'walker'=> new Bootstrap_Walker_Nav_Menu
                  )
                );
                ?>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
          <div class="row">
            <div class="col-xs-6 col-md-6">
              <h5 class="quicklinks">Quicklinks</h5>
              <?php wp_nav_menu(
                    array(
                      'menu' => 'Quicklinks_1',
                      'menu_class' => 'quicklinks_1',
                      'depth'=> 3,
                      'container'=> false,
                      'walker'=> new Bootstrap_Walker_Nav_Menu
                    )
                  );
                  ?>
            </div>
            <div class="col-xs-6 col-md-6">
              <?php wp_nav_menu(
                    array(
                      'menu' => 'Quicklinks_2',
                      'menu_class' => 'quicklinks_2',
                      'depth'=> 3,
                      'container'=> false,
                      'walker'=> new Bootstrap_Walker_Nav_Menu
                    )
                  );
                  ?>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <h5 class="quicklinks">Join the Conversation</h5>
            <div class="social-menu-footer">
                <ul class="social-nav">
                    <li><a href="<?php echo of_get_option('facebook_link'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo of_get_option('soundcloud_link'); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a></li>
                    <li><a href="<?php echo of_get_option('twitter_link'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ftr-wrap-2">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <p class="copyright">
             Copyright  &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.
          </p>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="no-rules-web-logo">
            <p>Powered by
            <a href="https://norulesweb.com" target="_blank">
              No Rules Web
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function($) {

  jQuery(".simcal-day-label span .simcal-date-format:first-child").addClass('month');
  jQuery(".simcal-day-label span .simcal-date-format:last-child").addClass('year');
  var owlinfo = $("#owl-info");

  owlinfo.owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 500,
      paginationSpeed : 800,
      singleItem:true,
      autoPlay: 5000,
      pagination: false,
      transitionStyle : "goDown"

      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });
  // Custom Navigation Events
  $(".next").click(function(){
    owlinfo.trigger('owl.next');
  })
  $(".prev").click(function(){
    owlinfo.trigger('owl.prev');
  })

  var owlmission = $("#owl-mission");

  owlmission.owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 800,
      autoPlay: 5000,
      pagination: false,
      paginationSpeed : 1000,
      singleItem:true,
      transitionStyle : "fade"

      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });

});
</script>

</body>
</html>
