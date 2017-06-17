<?php get_header(); ?>
        <!--hero section-->
        <div class="banner-state text-center vertical-align banner-16 height-600">

        </div>
        <!--hero section-->

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
<?php
							$allPort = new WP_Query(array(
								'post_type' => 'portfolio',
							));

							if($allPort->have_posts()) : while($allPort->have_posts()) : $allPort->the_post();
?>
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
<?php
							endwhile;
							endif;
?>
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


                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--body content end-->


<?php get_footer(); ?>