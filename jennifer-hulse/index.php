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
							$terms = wp_get_post_terms($post->ID,'category');
						?>
                           
                            <!--classic image post-->
                            <div class="blog-classic">
                                <div class="blog-post">

                                    <?php if($thumbnail != '') { ?>

                                    <div class="full-width">
                                        <a href="<?php echo get_the_permalink(); ?>"><?php echo $thumbnail; ?></a>
                                    </div>
                                    
                                    <?php } ?>
                                    
                                    <h4 class="text-uppercase"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <ul class="post-meta">
                                        <li><?php echo get_the_date('M j Y'); ?>
                                        </li>
                                        <?php if(sizeof($terms)) { ?>

                                        <li><i class="fa fa-folder-open"></i>  <?php foreach($terms as $i => $cat) { ?>
                                        	<a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a><?php if($i < sizeof($terms) - 1) { echo ","; } } ?>
                                        </li>

                                        <?php } ?>
                                        <!-- li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                                        </li -->
                                    </ul>
                                    
                                    <?php if(is_singular()) {
										the_content();
									} else { ?>

                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php echo get_the_permalink(); ?>" class="btn btn-small btn-theme-color  "> Continue Reading</a>

                                    <?php } ?>
                                </div>

                                    <?php if(is_singular()) { 
										$tags = get_the_tags();
									?>

                                    <div class="inline-block">

                                        <div class="widget-tags">
                                            <h6 class="text-uppercase">Tags </h6>
                                            <?php foreach($tags as $tag) { ?>
                                            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>


                                    <div class="clearfix inline-block m-top-50 m-bot-50">
                                        <h6 class="text-uppercase">Share this Post </h6>
                                        <div class="widget-social-link circle">
                                   			<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                   			<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>-<?php echo get_bloginfo('name'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                   			<a href="//pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $post->guid; ?>&description=<?php 
  echo get_bloginfo('name'); 
  if(get_bloginfo('description') != "") { echo "–".get_bloginfo('description'); }
          ?> | <?php the_title(); ?>. <?php echo get_option( 'meta_description', '' ); ?>" data-pin-do="buttonPin" data-pin-config="none" target="_blank"><i class="fa fa-pinterest"></i></a>
                                   			<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                    
                                    <?php comments_template(); ?>
                                    
                                    <?php } ?>
                            </div>
                            <!--classic image post-->

<?php endwhile; endif;
if(!is_singular()) { 						
 global $wp_query;
$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages,
	'type'         => 'list',
	'prev_next'          => true,
	'prev_text'          => __('Prev'),
	'next_text'          => __('Next'),
) );
$find = array("<ul class='page-numbers'>","<li><span class='page-numbers current'>","</span>");
$replace = array('<ul class="pagination custom-pagination">','<li class="active"><a href="#">','</a>');
	?>
                            <!--pagination-->
                            <div class="text-center">
<?php echo str_replace($find,$replace,$pages); ?>
                            </div>
                            <!--pagination-->
<?php } ?>
                        </div>

<?php get_sidebar(); ?>

                    </div>
                </div>
            </div>

        </section>
        <!--body content end-->


<?php get_footer(); ?>