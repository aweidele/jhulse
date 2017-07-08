<?php 
get_header();
if(have_posts()) : while(have_posts()) : the_post();
//$gallery = get_field('gallery');
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
        
<?php 
additional_content(get_field('additional_content'));
endwhile;
endif;
get_footer(); ?>