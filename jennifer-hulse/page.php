<?php 
get_header();
if(have_posts()) : while(have_posts()) : the_post();
	$content = $post->post_content; ?>

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

<?php if($content) { ?>
        <section class="body-content page-content">
            <div class="container">
                <div class="row ">

                    <div class="col-md-12 ">
                        <div class="text-center m-bot-100">
<?php echo wpautop($content); ?>
                        </div>
                    </div>
                    
				</div>
			</div>
		</section>
<?php } ?>


<?php 
additional_content(get_field('additional_content'));
endwhile;
endif;
get_footer(); ?>