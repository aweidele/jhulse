<?php get_header();
	$hero = get_field('hero_image',$post->ID);
	//$tax = get_categories(array('taxonomy'=>'project_category'));
?>
        <!--hero section-->
        <div class="banner-state text-center vertical-align height-600" style="background-image: url(<?php echo $hero['sizes']['Hero Image']; ?>)">

        </div>
        <!--hero section-->

                <!--body content start-->
        <section class="body-content page-content">
            <div class="container">
                <div class="row ">

                    <div class="col-md-12 ">
                        <div class="text-center m-bot-100 about-me">
<?php echo wpautop($post->post_content); ?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="text-center">
							<h3>Portfolio</h3>
                        </div>

                        <div class="portfolio portfolio-with-title col-3 gutter ">
<?php
							$allPort = new WP_Query(array(
								'post_type' => 'portfolio',
							));

							if($allPort->have_posts()) : while($allPort->have_posts()) : $allPort->the_post();
							$gallery = get_field('gallery');
							$terms = wp_get_post_terms($post->ID,'project_category');
							if(sizeof($gallery)) {
?>
                            <div class="portfolio-item<?php foreach($terms as $cat) { echo " cat-".$cat->slug; } ?>">
                                <div class="thumb">
<?php if(sizeof($gallery) == 1) { ?>
                                    <img src="<?php echo $gallery[0]['sizes']['Homepage Portfolio']; ?>" alt="">
<?php } else { ?>
                                    <div class="portfolio-slider">
                                        <ul class="slides">
                                           <?php foreach($gallery as $image) { ?>
                                           
                                            <li>
                                                <a href="<?php echo $image['url']; ?>" title="Freshness Photo">
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
                                    <p><?php foreach($terms as $i => $cat) { ?>
                                      <a href="#"><?php echo $cat->name; ?></a><?php if($i < sizeof($terms) - 1) { echo ","; } } ?></p>
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
