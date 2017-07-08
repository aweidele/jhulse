<?php 
/* Template Name: About */ 
get_header();
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
                <div class="row page-content">
                    <div class="post-list-aside">
                        <div class="post-single">
                            <div class="col-md-6">
                                <div class="post-slider post-img text-center">
                                    <ul class="slides">
<?php foreach($gallery as $image) { ?>
                                        <li data-thumb="<?php echo $image['sizes']['About Gallery']; ?>">
                                            <a href="javascript:;" title="Freshness Photo">
                                                <img src="<?php echo $image['sizes']['About Gallery']; ?>" alt="">
                                            </a>
                                        </li>
<?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--body content end-->
<?php 
additional_content(get_field('additional_content'));
endwhile;
endif;
get_footer(); ?>