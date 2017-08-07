        <!--footer start 1-->
        <footer id="footer" class="gray">
<?php
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
