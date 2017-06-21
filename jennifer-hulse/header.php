<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Portfolio 3 title</title>
    <?php wp_head(); ?>
    <!-- endinject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/backward/html5shiv.js"></script>
    <script src="assets/vendor/backward/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <!--header start-->
        <header class="l-header">

            <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
                <div class="container-fluid">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="<?php echo get_home_url(); ?>" class="logo-brand">
                            <img class="retina" src="<?php echo get_option('theme_logo'); ?>" alt="Massive">
                        </a>
                        <!--logo end-->
                        <!--mega menu start-->
                        <ul class="menuzord-menu menuzord-right c-nav_s-standard">
<?php 
  $locations = get_nav_menu_locations();
  $primaryMenu = wp_get_nav_menu_items($locations['primary-menu']);
  //echo "<!-- ",print_r($primaryMenu)," -->";
							foreach($primaryMenu as $i => $item) {
								?>
                            <li><a href="<?php echo get_permalink($item->object_id); ?>"><?php echo $item->title; ?></a>
							</li>
<?php } ?>
                            <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a></li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                                <div class="megamenu megamenu-quarter-width navbar-search">
                                    <form role="form" action="<?php echo get_home_url(); ?>">
                                        <input type="text" name="s" id="s" class="form-control" placeholder="Search...">
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div>

        </header>
        <!--header end-->