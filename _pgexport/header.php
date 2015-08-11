<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse" role="navigation" style="background-color:<?php echo get_theme_mod( 'dark_primary_backgroud_color' ); ?>;"> 
                <div class="container-fluid"> 
                    <div class="navbar-header"> 
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'flatinum' ); ?></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url( get_site_url() ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>                         
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                        <?php wp_nav_menu( array(
                              'menu' => 'primary',
                              'menu_class' => 'nav navbar-nav navbar-right',
                              'container' => '',
                              'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                              'walker' => new wp_bootstrap_navwalker()
                            ) ); ?>                         
                    </div>                     
                </div>                 
            </nav>
            <div class="jumbotron" style="background-color:<?php echo get_theme_mod( 'primary_backgroud_color' ); ?>;"> 
                <div class="container">
                    <h1><?php echo get_theme_mod( 'header_title', __( 'Simple Flat Theme' ) ); ?></h1>
                    <p><?php echo get_theme_mod( 'header_desc', __( 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.' ) ); ?></p>
                    <p><?php if( get_theme_mod( 'header_btn_title' ) ) : ?><a class="btn btn-primary btn-lg" href="<?php echo esc_url( get_theme_mod( 'header_btn_href' ) ); ?>" style="background-color:<?php echo get_theme_mod( 'btn_backgroud_color' ); ?>;">
                                <?php echo get_theme_mod( 'header_btn_title', __( 'Learn more' ) ); ?>
                            </a><?php endif; ?></p>
                </div>
            </div>
        </header>
        <main class="">