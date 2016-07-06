<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

  <meta charset="<?php echo esc_url( ( 'charset' ) ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php echo esc_url( home_url( 'pingback_url' ) ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head() ?>

  </head>

<body <?php body_class(); ?>>

<div class="full-container">
  <div class="main-header">
    <div class="page-container">

       <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                      <?php if( get_theme_mod( 'sellthing_logo' ) != "" ): ?>
                      <img src="<?php echo get_theme_mod( 'sellthing_logo' ); ?>">
                      </a>
                      <?php endif; ?>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse navbar-right" id="defaultNavbar1">
                      <?php
                      wp_nav_menu( array(
                        'menu'              => 'header-menu',
                        'theme_location'    => 'header-menu',
                        'depth'             => 2,
                        'container'         => 'false',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'defaultNavbar1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                      );
                      ?>
                  </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    </div>
  </div>
</div> <!-- end of full container -->