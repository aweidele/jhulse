<?php get_header(); 
$page_for_posts = get_post(get_option( 'page_for_posts' ));
?>
        <!--page title start-->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $page_for_posts->post_title; ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
<?php if(have_posts()) : while(have_posts()) : the_post(); 
							$thumbnail = get_the_post_thumbnail($post->ID,'Blog Listing');
							?>
                            <!--classic image post-->
                            <div class="blog-classic">
                                <div class="date">
                                    <?php echo get_the_date('j'); ?>
                                    <span><?php echo strtoupper(get_the_date('M Y')); ?></span>
                                </div>
                                <div class="blog-post">
<?php if($thumbnail != '') { ?>
                                    <div class="full-width">
                                        <a href="<?php echo get_the_permalink(); ?>"><?php echo $thumbnail; ?></a>
                                    </div>
<?php } ?>
                                    <h4 class="text-uppercase"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-user"></i>posted by <?php the_author_link(); ?>
                                        </li>
                                        <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                                        </li>
                                        <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                                        </li>
                                    </ul>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php echo get_the_permalink(); ?>" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                                </div>
                            </div>
                            <!--classic image post-->

<?php endwhile; endif; ?>
                            <!--pagination-->
                            <div class="text-center">
                                <ul class="pagination custom-pagination">
                                    <li><a href="#">Prev</a>
                                    </li>
                                    <li class="active"><a href="#">1</a>
                                    </li>
                                    <li><a href="#">2</a>
                                    </li>
                                    <li><a href="#">3</a>
                                    </li>
                                    <li><a href="#">4</a>
                                    </li>
                                    <li><a href="#">5</a>
                                    </li>
                                    <li><a href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                            <!--pagination-->
                        </div>

<?php get_sidebar(); ?>

                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->


<?php get_footer(); ?>