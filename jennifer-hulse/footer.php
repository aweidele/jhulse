        <!--footer start 1-->
        <footer id="footer" class="dark">
<?php /*
            <div class="primary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="m-bot-20 footer-logo">
                                <img class="retina" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dark.png" alt="" />
                            </a>
                            <p>Massive is fully responsible, performance oriented and SEO optimized, retina ready WordPress theme.</p>

                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">recent posts</h5>
                            <ul class="f-list">
                                <li><a href="#">Standard Blog post</a>
                                </li>
                                <li><a href="#">Quotation post</a>
                                </li>
                                <li><a href="#">Audio Post</a>
                                </li>
                                <li><a href="#">Massive Video Demo</a>
                                </li>
                                <li><a href="#">Blog Image Post</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">quick link</h5>
                            <ul class="f-list">
                                <li><a href="#">About Massive</a>
                                </li>
                                <li><a href="#">Career</a>
                                </li>
                                <li><a href="#">Terms & Condition</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">Recent Work</h5>
                            <ul class="r-work">
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-work/1.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-work/2.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-work/3.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-work/4.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-work/5.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-work/6.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-work/7.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent-work/8.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<?php */ 

$social = array();
if (get_option('theme_facebook') 	!= '')  $social['facebook'] = get_option('theme_facebook');
if (get_option('theme_twitter') 	!= '') $social['twitter'] = get_option('theme_twitter');
if (get_option('theme_instagram') 	!= '') $social['instagram'] = get_option('theme_instagram');
if (get_option('theme_pinterest') 	!= '') $social['pinterest'] = get_option('theme_pinterest');
if (get_option('theme_youtube') 	!= '') $social['youtube'] = get_option('theme_youtube');
if (get_option('theme_houzz') 		!= '') $social['houzz'] = get_option('theme_houzz');
if (get_option('theme_google') 		!= '') $social['google-plus'] = get_option('theme_google');
if (get_option('theme_behance') 	!= '') $social['behance'] = get_option('theme_behance');
if (get_option('theme_dribbble') 	!= '') $social['dribbble'] = get_option('theme_dribbble');
?>
            <div class="secondary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="m-top-10"><?php echo get_option('theme_copyright'); ?></span>
                        </div>
                        <div class="col-md-6">
                            <div class="social-link circle pull-right">
<?php foreach($social as $class => $link) { ?>
                                <a href="<?php echo $link; ?>" target="_blank"><i class="fa fa-<?php echo $class; ?>"></i></a>
<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer 1 end-->

    </div>
<?php wp_footer(); ?>
</body>

</html>