<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>
    <nav class="desktop-nav navbar navbar-default" role="navigation">
      <div class="navheader">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 logo">
              <a class="" href="/"><img class="img-responsive" src="/wp-content/themes/faithcc/images/header-logo.png" alt="Faith CC Logo" /></a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="header-menu">
                <?php wp_nav_menu(
                      array(
                        'menu' => 'Header',
                        'menu_class' => 'header-nav',
                        'depth'=> 3,
                        'container'=> false,
                        'walker'=> new Bootstrap_Walker_Nav_Menu
                      )
                    );
                    ?>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="social-menu">
                <ul class="social-nav">
                  <li><a href="<?php echo of_get_option('facebook_link'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<?php echo of_get_option('soundcloud_link'); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a></li>
                  <li><a href="<?php echo of_get_option('twitter_link'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <?php if(of_get_option('youtube_link')){ ?>
                    <li><a href="<?php echo of_get_option('youtube_link'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="navmenu">
                  <?php wp_nav_menu(
                          array(
                            'menu' => 'Main',
                            'menu_class' => 'nav navbar-nav',
                            'depth'=> 3,
                            'container'=> false,
                            'walker'=> new Bootstrap_Walker_Nav_Menu
                          )
                        );
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <nav class="mobile-nav navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="img-responsive" src="/wp-content/themes/faithcc/images/header-logo.png" alt="Faith CC Logo" /></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
        <?php wp_nav_menu(
                array(
                  'menu' => 'Main',
                  'menu_class' => 'nav navbar-nav navbar-right',
                  'depth'=> 3,
                  'container'=> false,
                  'walker'=> new Bootstrap_Walker_Nav_Menu
                )
              );
        ?>
      </div><!-- /.navbar-collapse -->
    </nav>
    <div class="mobile-social">
      <ul class="mobile-social-list">
        <li class="mobile-social-item hdr-facebook"><a href="<?php echo of_get_option('facebook_link'); ?>"><i class="fa fa-facebook"></i></a></li>
        <li class="mobile-social-item hdr-soundcloud"><a href="<?php echo of_get_option('soundcloud_link'); ?>"><i class="fa fa-soundcloud"></i></a></li>
        <li class="mobile-social-item hdr-twitter"><a href="<?php echo of_get_option('twitter_link'); ?>"><i class="fa fa-twitter"></i></a></li>
      </ul>
      <div class="mobile-welcome">
        <h1>Welcome to Faith Community Church</h1>
      </div>
    </div>
