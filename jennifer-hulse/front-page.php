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
							$gallery = get_field('gallery');
							if(sizeof($gallery)) {
?>
                            <div class="portfolio-item cat1 cat3 ">
                                <div class="thumb">
<?php if(sizeof($gallery) == 1) { ?>
                                    <img src="<?php echo $gallery[0]['sizes']['Homepage Portfolio']; ?>" alt="">
<?php } else { ?>
                                    <div class="portfolio-slider">
                                        <ul class="slides">
                                           <?php foreach($gallery as $image) { ?>
                                           
                                            <li>
                                                <a href="assets/img/portfolio/07.jpg" title="Freshness Photo">
                                                    <img src="<?php echo $image['sizes']['Homepage Portfolio']; ?>" alt="">
                                                </a>
                                            </li>
                                            
                                            <?php } ?>
                                        </ul>
                                    </div>
<?php } ?>
                                    <div class="portfolio-hover">
                                        <div class="action-btn">
                                            <a href="<?php echo get_permalink(); ?>"> <i class="icon-basic_magnifier"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-title">
                                    <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><a href="#">category 2</a> , <a href="#">category 4</a> 
                                    </p>
                                </div>
                            </div>
<?php
							}
							endwhile;
							endif;
?>


                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--body content end-->


<?php get_footer(); ?>