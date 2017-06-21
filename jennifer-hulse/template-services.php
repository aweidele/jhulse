<?php 
/* Template Name: Services and Pricing */
get_header(); 
if(have_posts()) : while(have_posts()) : the_post();
$gallery = get_field('gallery');
$services = get_field('services');
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
	$col = 12 / sizeof($services);
?>
        <!--body content start-->
        <section class="body-content ">
            <div class="page-content">
                <div class="container">
                    <div class="row price-table-row">
                        <div class="heading-title text-center">
                            <h3 class="text-uppercase"><?php echo get_field('pricing_table_headline'); ?></h3>
                        </div>
                        <div class="p-table-gutter-less">
                            <!--3 column price table-->
<?php foreach($services as $service) { 
	$price = explode('.',$service['price']);
?>
                            <div class="col-md-<?php echo $col; ?>">
                                <div class="price-col<?php echo $service['featured'] ? ' feature' : ''; ?>">
                                    <h1><?php echo $service['service_name']; ?></h1>
                                    <div class="p-value">
                                        <div class="dollar">
                                            $ <?php echo $price[0]; ?> <span>.<?php echo $price[1]; ?></span>
                                        </div>

                                       <?php if($service['term'] != '') { ?>
                                        <div class="duration">
                                            <?php echo $service['term']; ?>
                                        </div>
                                        <?php } ?>

                                    </div>
<?php echo $service['service_description']; ?>
                                    <!-- a href="#" class="p-btn">purchase this plan</a -->
                                </div>
                            </div>
<?php } ?>
                            <!--3 column price table-->
                        </div>
                    </div>
				</div>
			</div>
		</section>
<?php 
endwhile;
endif;
?>
<script type="text/javascript">
	var $ = jQuery;
	$(document).ready(function() {
		price_table_resize();
		$(window).resize(function() {
			price_table_resize();
		});
	});
function price_table_resize() {
	tallest = 0;
	$('.price-table-row div[class*="col"]').each(function() {
		$('.price-col',this).css({'height':'auto'});
		if($('.price-col',this).height() > tallest) {
			tallest = $('.price-col',this).height();
		}
	});
	$('.price-table-row div[class*="col"]').each(function() {
		$('.price-col',this).height(tallest);
	});
}
</script>
<?php get_footer(); ?>