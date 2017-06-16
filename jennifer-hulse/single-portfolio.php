<?php get_header();
if(have_posts()) : while(have_posts()) : the_post();
$gallery = get_field('gallery');
?>
<!--page title start-->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_title(); ?></h2>
                        <!-- ol class="breadcrumb">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Shortcodes</a>
                            </li>
                            <li class="active">portfolio single gallery</li>
                        </ol -->
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content">


            <div class="container">
                <div class="row ">

                    <div class="col-md-12">
                        <div class="portfolio-nav-row">
                            <div class="portfolio-nav left">
                                <a href="#"> <i class="fa fa-angle-left"></i>  <span>Prev </span>
                                </a>
                                <a href="#"><i class="fa fa-th-large"></i></a>
                                <a href="#"><span>Next</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="full-width">
                            <div class="post-slider post-img text-center">
                                <ul class="slides">
<?php foreach($gallery as $image) { ?>
                                    <li>
                                        <a href="javascript:;" title="Freshness Photo">
                                            <img src="<?php echo $image['sizes']['Portfolio Gallery']; ?>" alt="">
                                        </a>
                                    </li>
<?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="page-content">
                        <div class="col-md-7">
                            <div class="heading-title-side-border text-left">
                                <h4 class="text-uppercase">Project Details</h4>
                                <div class="title-border-container">
                                    <div class="title-border"></div>
                                </div>
                            </div>
                            <?php the_content(); ?>
                        </div>
                        <div class="col-md-5">
                            <ul class="portfolio-meta m-bot-30">
                                <li><span> Client </span> ThemeBucket</li>
                                <li><span> Created by </span> John Doe</li>
                                <li><span> Completed on </span> 1st June 2015</li>
                                <li><span> Skills </span> HTML5 / PHP / CSS3</li>
                                <li><span> Share </span>
                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                   <a href="#"><i class="fa fa-google-plus"></i></a>
                                   <a href="#"><i class="fa fa-pinterest"></i></a>
                                   <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <hr/>

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="heading-title-alt text-left ">
                                <h4 class="text-uppercase">similar product</h4>
                                <span class="text-uppercase">Lid est laborum dolo rumes fugats untras.</span>
                            </div>

                            <!--portfolio carousel-->

                            <div id="portfolio-carousel" class=" portfolio-with-title col-3 ">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/portfolio/01.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/portfolio/01.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/portfolio/01.jpg" class="popup-link" title="lightbox view">perspiciatis unde omnis</a></h4>
                                        <p><a href="#">category 1</a> , <a href="#">category 3</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/portfolio/02.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/portfolio/02.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/portfolio/02.jpg" class="popup-link" title="lightbox view">denouncing pleasure</a></h4>
                                        <p><a href="#">category 1</a> , <a href="#">category 3</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/portfolio/03.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/portfolio/03.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/portfolio/03.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
                                        <p><a href="#">category 1</a> , <a href="#">category 3</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/portfolio/04.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/portfolio/04.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/portfolio/04.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
                                        <p><a href="#">category 1</a> , <a href="#">category 3</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/portfolio/05.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/portfolio/05.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/portfolio/05.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
                                        <p><a href="#">category 1</a> , <a href="#">category 3</a> 
                                        </p>
                                    </div>
                                </div>

                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="assets/img/portfolio/06.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="action-btn">
                                                <a href="assets/img/portfolio/06.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-title">
                                        <h4><a href="assets/img/portfolio/06.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
                                        <p><a href="#">category 1</a> , <a href="#">category 3</a> 
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <!--portfolio carousel-->

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->

<?php 
endwhile;
endif;
get_footer(); ?>