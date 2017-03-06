<?php

if ( !defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif; ?>

<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <?php /* <meta name="description" content="<?php bloginfo('description'); ?>">;*/ ?>
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
            <link rel="canonical" href="<?php bloginfo('url'); ?>">
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <?php wp_head(); ?>
        </head>

        <body class="custom-background" itemscope itemtype="http://schema.org/WebPage">
          <!--[if lt IE 9]>
                <script>
                    document.createElement("header" );
                    document.createElement("footer" );
                    document.createElement("section");
                    document.createElement("aside"  );
                    document.createElement("nav"    );
                    document.createElement("article");
                    document.createElement("hgroup" );
                    document.createElement("time"   );
                </script>
                <noscript>
                    <strong>Warning !</strong>
                    Because your browser does not support HTML5, some elements are created using JavaScript.
                    Unfortunately your browser has disabled scripting. Please enable it in order to display this page.
                </noscript>
                <![endif]-->

            <?php if ( is_singular() ) :
                facebook_javascript_sdk();
            endif; ?>

							<!-- start document -->

            <header>
              <nav class="navbar center navbar-inverse" itemscope itemtype='http://schema.org/SiteNavigationElement'>
                <h1 class="sr-only">Secondary Navigation</h1>
                <div class="container">
                  <div class="navbar-header text-center">
                    <button type="button" class="navbar-toggle collapsed" onclick="jQuery('body').toggleClass('sidebar-active').find('#body-sidebar-left').toggleClass('active');" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
										<a class="navbar-brand hidden-lg hidden-md hidden-sm" href="<?php echo home_url(); ?>">
											Brand Name
										</a>
                  </div>

                  <div class="navbar-inner collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                      wp_nav_menu(
                        array(
                          'theme_location' => 'secondary',
                          'menu' => 'secondary_nav',
                          'menu_class' => 'nav navbar-nav',
                          'container' => false,
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'depth' => 2,
                          'walker' => new wp_bootstrap_navwalker(),
                        )
                      );
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </nav>

                <?php //create_materialize_submenu('primary'); ?>

                <div class="container">
									<div class="bg">
                    <div class="header hide-on-med-and-down">
                        <div class="row flex">
                            <div class="col-lg-8 col-md-8 center-align" itemscope itemtype="http://schema.org/Organization" itemref="pinterestprof facebookprof twitterprof linkedinprof instagramprof">

                                <?php
                                    $logo = get_theme_mod( 'site_logo', '' );
                                    $title_option = get_theme_mod( 'site_title_option', 'text-only' );

                                    if ( $title_option == 'logo-only' && ! empty($logo) ) { ?>
                                        <div class="site-logo">
                                            <meta itemprop="name" content="<?php echo bloginfo('name'); ?>">
                                            <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <figure itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                                    <img itemprop="contentUrl" class="responsive-img" src="<?php echo esc_url( $logo ); ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
                                                </figure>
                                            </a>
                                        </div>
                                    <?php }

                                    if ( $title_option == 'text-logo' && ! empty($logo) ) { ?>
                                        <div class="site-logo">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <img src="<?php echo esc_url( $logo ); ?>" alt="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
                                            </a>
                                        </div>
                                        <div class="site-title-text">
                                                <h1 class="h2" itemprop="name"><a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                                <h2 class="h5" itemprop="description"><?php bloginfo( 'description' ); ?></h2>
                                        </div>
                                    <?php }

                                    if ( $title_option == 'text-only' ) { ?>
                                        <div class="site-title-text">
                                                <h1 class="h2" itemprop="name"><a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                                <h2 class="h5" itemprop="description"><?php
                                                    if(empty(bloginfo( 'description' ))):
                                                       echo "&nbsp;";
                                                    else:
                                                       bloginfo( 'description' );
                                                    endif;
                                                ?></h2>
                                        </div>
                                <?php } ?>
                            </div>
                            <div class="col col-lg-4 col-md-4 flex-item">
                                <div class="search-form center-align">
                                    <?php get_search_form(); ?>
                                </div><!--header ad-->
                            </div>
                        </div>
                    </div>

                    <nav class="navbar center navbar-default hidden-sm hidden-xs" itemscope itemtype='http://schema.org/SiteNavigationElement'>
                      <h1 class="sr-only">Primary Navigation</h1>
                      <div class="container-fluid">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img alt="Brand" src="http://www.jennifer.com/wordpress/wp-content/themes/indo-lp/images/logo-nav.png" class="img-responsive hidden-lg hidden-md hidden-sm">
                          </a>
                        </div>

                        <div class="navbar-inner collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                          wp_nav_menu(
                            array(
                              'theme_location' => 'primary',
                              'menu' => 'primary_nav',
                              'menu_class' => 'nav navbar-nav',
                              'container' => false,
                              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                              'depth' => 2,
                              'walker' => new wp_bootstrap_navwalker(),
                            )
                          );
                        ?>
                        </div>
                      </div>
                    </nav>
									</div>
                </div>
            </header>

						<div id="body-sidebar-left" class="sidebar">
							<div class="sidebar-wrap">
								<div class="sidebar-subject"><img src="/wordpress/wp-content/uploads/2017/01/ERROR-404-a-600-60.png" height="38"> <?php bloginfo( 'name' ); ?></div>
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu' => 'primary_nav',
											'menu_class' => 'putanginamo',
											'container' => false,
											'depth' => 3,
											'walker' => new Mobile_Menu_Walker(),
										)
									);
								?>
							</div>
						</div>
						<div class="sidebar-overlay"><a></a></div>
