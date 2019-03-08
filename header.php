<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="alternate" href="<?php echo esc_url( home_url( '/id' ) ); ?>" hreflang="id_ID" />
    <link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Flexslider-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/vendor/flexslider.css" type="text/css" media="screen" />

    <!-- breadcrumb -->
    <link href="<?php bloginfo('template_directory');?>/vendor/breadcrumb/css/style.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory');?>/vendor/breadcrumb/js/modernizr.js"></script> <!-- Modernizr -->
   
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php bloginfo('template_directory');?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory');?>/js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Gallery  -->

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!--####
    ### How to add in your boostrap project
    1) Add jQuery "<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>"
    2) Download fancybox (https://github.com/fancyapps/fancyBox)
    3) Or use CDN (http://cdnjs.com/libraries/fancybox)
    ####--!>

    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <style>
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    </style>
 

    <?php wp_head();?>
  </head>

<body>


    <!--header-top-->

    <!--header-bottom-->
    <div class="row">
        <div class="container">
            <div class="collapse" id="collapseExample">
                  <div class="pencarian-atas" style="padding: 25px 15px 15px 15px;">
                    <span class="tag hot" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">close</span>
                    <div id='search-box'>
                      <form action="<?php bloginfo('url'); ?>/?cat=37&" id='search-form' method='get' target='_top'>
                        <input id='search-text' style="background-color:#f3f3f3; border: 0px solid #ced4da;" name='s' placeholder='cari' type='text'/>
                        <button id='search-button' type='submit'>                     
                          <span>Cari</span>
                        </button>
                      </form>
                    </div>

                  </div>
            </div>


        <!--logo kiri-->
        <div class="col-xs-11 col-sm-5 col-md-4">
            <div class="header">
                
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) { ?>
                        <div class="logo" style="background:transparent url(<?php echo esc_url( $logo[0] ); ?>) left center no-repeat; background-size: 167px;">
                            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><?php echo get_bloginfo( 'name' ); ?></span></a></h1>
                        </div>
                    <?php } else { ?>
                       <div class="logo" style="background:transparent url(images/logosmall.png) left center no-repeat;">
                            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>Teknik Informatika</span></a></h1>
                        </div>
                    <?php }
                ?>
                
                

            </div>
        </div>

        <!--menu kanan-->
        <div class="col-xs-12 col-sm-7 col-md-8">
            <div class="hidden-xs" id="top-nav" style="height:36px;">
                <ul class="top-nav nav navbar-nav navbar-right">
                    <?php create_menu_link_halaman("menu-link-halaman"); ?>
                    <li><span style="color: #6c757d!important; float: left; margin-top: 16px; width: 17px; height: 17px;" data-feather="search"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></span></li> 

                
                </ul>                    
                </div>
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                           <span style="color: #6c757d!important; float: left; margin-right: 35px; width: 17px; height: 17px;" data-feather="search"></span>
                        </button>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar">
                            </span></button>                    
                        </div>

                        <div class="collapse navbar-collapse" id="nav-navbar-collapse">
                            <div class="menu-menu_utama-container">
                                <ul id="menu-menu_utama" class="main-nav nav navbar-nav navbar-right">
                                    <li><a href="<?php echo get_bloginfo( 'wpurl' );?>" title="Beranda">Beranda</a></li>
                                    <?php create_menu_link_utama("menu-link-utama"); ?>
                                </ul>
                            </div>           
                        </div>
                </nav>
            </div>
        </div>
    </div>