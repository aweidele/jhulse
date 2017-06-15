<?php get_header(); ?>


        <!--page title start-->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">portfolio title - 3 grid with gutter</h4>
                        <span>Amazing Portfolio Demos</span>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Shortcodes</a>
                            </li>
                            <li class="active">Portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content page-content">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">

                        <div class="text-center">
                            <ul class="portfolio-filter">
                                <li class="active"><a href="#" data-filter="*"> All</a>
                                </li>
                                <li><a href="#" data-filter=".cat1">printing</a>
                                </li>
                                <li><a href="#" data-filter=".cat2">Web</a>
                                </li>
                                <li><a href="#" data-filter=".cat3">illustration</a>
                                </li>
                                <li><a href="#" data-filter=".cat4">media</a>
                                </li>
                                <li><a href="#" data-filter=".cat5">crafts</a>
                                </li>
                            </ul>
                        </div>

                        <div class="portfolio portfolio-with-title col-3 gutter ">

                            <div class="portfolio-item cat1 cat3 ">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/01.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="assets/img/portfolio/01.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="assets/img/portfolio/01.jpg" class="popup-link" title="lightbox view">lightbox view</a></h4>
                                    <p><a href="#">category 1</a> , <a href="#">category 3</a> 
                                    </p>
                                </div>
                            </div>

                            <div class="portfolio-item cat2 cat4">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/02.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="portfolio-single.html"> <i class="icon-basic_link"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="portfolio-single.html">External link</a></h4>
                                    <p><a href="#">category 2</a> , <a href="#">category 4</a> 
                                    </p>
                                </div>
                            </div>

                            <div class="portfolio-item cat1 cat2">
                                <div class="thumb">

                                    <div class="portfolio-slider">
                                        <ul class="slides">
                                            <li>
                                                <a href="assets/img/portfolio/07.jpg" title="Freshness Photo">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/07.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="assets/img/portfolio/07a.jpg" title="Awesome Lightbox">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/07a.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="assets/img/portfolio/07b.jpg" title="Massive UI Components">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/07b.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="assets/img/portfolio/07c.jpg" title="Amazing Theme">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/07c.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="#"> <i class="icon-basic_magnifier"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="#">lightbox Gallary</a></h4>
                                    <p><a href="#">category 1</a> , <a href="#">category 2</a> 
                                    </p>
                                </div>
                            </div>

                            <div class="portfolio-item cat1 cat4">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/03.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a class="popup-vimeo" href="https://vimeo.com/45830194"> <i class="icon-arrows_keyboard_right"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a class="popup-vimeo" href="https://vimeo.com/45830194" >Video lightbox</a></h4>
                                    <p><a href="#">category 1</a> , <a href="#">category 4</a> 
                                    </p>
                                </div>
                            </div>

                            <div class="portfolio-item cat2 cat4">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/04.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="assets/img/portfolio/04.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="assets/img/portfolio/04.jpg" class="popup-link" title="lightbox view">lightbox view</a></h4>
                                    <p><a href="#">category 2</a> , <a href="#">category 4</a> 
                                    </p>
                                </div>
                            </div>

                            <div class="portfolio-item cat3 ">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/05.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="portfolio-single.html"> <i class="icon-basic_link"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="portfolio-single.html">External link</a></h4>
                                    <p><a href="#">category 3</a> 
                                    </p>
                                </div>
                            </div>

                            <div class="portfolio-item cat2 cat4 ">
                                <div class="thumb">

                                    <div class="portfolio-slider-alt">
                                        <ul class="slides">
                                            <li>
                                                <a href="assets/img/portfolio/08.jpg" title="Freshness">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/08.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="assets/img/portfolio/08a.jpg" title="Massive">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/08a.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="assets/img/portfolio/08b.jpg" title="Bootstrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/08b.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="#"> <i class="icon-basic_magnifier"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="#">lightbox gallery</a></h4>
                                    <p><a href="#">category 2</a> , <a href="#">category 4</a> 
                                    </p>
                                </div>
                            </div>

                            <div class="portfolio-item cat1 cat4 cat3 cat5">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/06.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="assets/img/portfolio/06.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="assets/img/portfolio/06.jpg" class="popup-link" title="lightbox view">lightbox view</a></h4>
                                    <p><a href="#">category 1</a> , <a href="#">category 3</a> 
                                    </p>
                                </div>
                            </div>

                            <div class="portfolio-item cat2 cat5">
                                <div class="thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/09.jpg" alt="">
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="assets/img/portfolio/09.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="assets/img/portfolio/09.jpg" class="popup-link" title="The Cleaner">lightbox view</a></h4>
                                    <p><a href="#">category 2</a> , <a href="#">category 5</a> 
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--body content end-->


<?php get_footer(); ?>