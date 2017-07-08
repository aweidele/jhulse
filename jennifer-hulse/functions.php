<?php

/** ENQUEUE STYLES AND SCRIPES **/
function themeEnqueue() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Josefin+Slab:400,400i,600,600i,700,700i' );
	//wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/vendor/animate/animate.css' );
	wp_enqueue_style( 'elastic', get_template_directory_uri().'/assets/vendor/elasic-slider/elastic.css' );
	wp_enqueue_style( 'icons', get_template_directory_uri().'/assets/vendor/iconmoon/linea-icon.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/vendor/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/vendor/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/assets/vendor/owl-carousel/owl.theme.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'shortcodes', get_template_directory_uri().'/assets/css/shortcodes.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css' );
	wp_enqueue_style( 'default-theme', get_template_directory_uri().'/assets/css/magenta-theme.css' );
	
	wp_enqueue_script('modernizr',		get_template_directory_uri().'/assets/vendor/modernizr/modernizr.js',array(),'1.0.0',true);
	wp_enqueue_script('jquery',			get_template_directory_uri().'/assets/vendor/jquery/jquery-1.10.2.min.js',array(),'1.0.0');
	wp_enqueue_script('bootstrap',		get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.min.js',array(),'1.0.0',true);
	wp_enqueue_script('validator',		get_template_directory_uri().'/assets/vendor/bootstrap-validator/validator.min.js',array(),'1.0.0',true);
	wp_enqueue_script('breakpoint',		get_template_directory_uri().'/assets/vendor/breakpoint/breakpoint.js',array(),'1.0.0',true);
	wp_enqueue_script('countTo',		get_template_directory_uri().'/assets/vendor/count-to/jquery.countTo.js',array(),'1.0.0',true);
	wp_enqueue_script('countdown',		get_template_directory_uri().'/assets/vendor/countdown/jquery.countdown.js',array(),'1.0.0',true);
	wp_enqueue_script('easing',			get_template_directory_uri().'/assets/vendor/easing/jquery.easing.1.3.js',array(),'1.0.0',true);
	wp_enqueue_script('easypiechart',	get_template_directory_uri().'/assets/vendor/easy-pie-chart/jquery.easypiechart.min.js',array(),'1.0.0',true);
	wp_enqueue_script('eislideshow',	get_template_directory_uri().'/assets/vendor/elasic-slider/jquery.eislideshow.js',array(),'1.0.0',true);
	wp_enqueue_script('flexslider',		get_template_directory_uri().'/assets/vendor/flex-slider/jquery.flexslider-min.js',array(),'1.0.0',true);
	wp_enqueue_script('gmap',			get_template_directory_uri().'/assets/vendor/gmap/jquery.gmap.min.js',array(),'1.0.0',true);
	wp_enqueue_script('imagesloaded',	get_template_directory_uri().'/assets/vendor/images-loaded/imagesloaded.js',array(),'1.0.0',true);
	wp_enqueue_script('isotope',		get_template_directory_uri().'/assets/vendor/isotope/jquery.isotope.js',array(),'1.0.0',true);
	wp_enqueue_script('magnific-popup',	get_template_directory_uri().'/assets/vendor/magnific-popup/jquery.magnific-popup.min.js',array(),'1.0.0',true);
	wp_enqueue_script('ajaxchimp',		get_template_directory_uri().'/assets/vendor/mailchimp/jquery.ajaxchimp.min.js',array(),'1.0.0',true);
	wp_enqueue_script('menuzord',		get_template_directory_uri().'/assets/vendor/menuzord/menuzord.js',array(),'1.0.0',true);
	wp_enqueue_script('jquery-nav',		get_template_directory_uri().'/assets/vendor/nav/jquery.nav.js',array(),'1.0.0',true);
	wp_enqueue_script('owl-carousel',	get_template_directory_uri().'/assets/vendor/owl-carousel/owl.carousel.min.js',array(),'1.0.0',true);
	wp_enqueue_script('parallax',		get_template_directory_uri().'/assets/vendor/parallax-js/parallax.min.js',array(),'1.0.0',true);
	wp_enqueue_script('smooth',			get_template_directory_uri().'/assets/vendor/smooth/smooth.js',array(),'1.0.0',true);
	wp_enqueue_script('sticky',			get_template_directory_uri().'/assets/vendor/sticky/jquery.sticky.min.js',array(),'1.0.0',true);
	wp_enqueue_script('touchspin',		get_template_directory_uri().'/assets/vendor/touchspin/touchspin.js',array(),'1.0.0',true);
	wp_enqueue_script('typist',			get_template_directory_uri().'/assets/vendor/typist/typist.js',array(),'1.0.0',true);
	wp_enqueue_script('visible',		get_template_directory_uri().'/assets/vendor/visible/visible.js',array(),'1.0.0',true);
	wp_enqueue_script('wow',			get_template_directory_uri().'/assets/vendor/wow/wow.min.js',array(),'1.0.0',true);
	wp_enqueue_script('main',			get_template_directory_uri().'/assets/js/scripts.js',array(),'1.0.0',true);

}
add_action( 'wp_enqueue_scripts', 'themeEnqueue' );

/** ADD MENUS **/
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
  //register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

/*** IMAGE SIZES ***/
add_theme_support('post-thumbnails');
add_image_size('Portfolio Gallery',1170,800,true);
add_image_size('Hero Image',1920,99999);
add_image_size('Homepage Portfolio',800,600,true);
add_image_size('Homepage Portfolio SMall',350,263,true);
add_image_size('About Gallery',501,405,true);
add_image_size('Blog Listing',673,500,true);
add_image_size('Blog Listing Sidebar',76,56,true);


/*** THEME CUSTOMIZATION SETTINGS ***/
function mytheme_customize_register( $wp_customize ) {
	
	// ADD SECTION
	$wp_customize->add_section( 'theme_social' , array(
    	'title'      => __( 'Social Media', 'mytheme' ),
		'priority'   => 30,) 
  	);
	
	// ADD OPTIONS
	$wp_customize->add_setting( 'theme_logo'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_copyright'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_showsearch'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_facebook'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_twitter'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_instagram'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_pinterest'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_youtube'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_houzz'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_google'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_dribbble'    , array('transport' => 'refresh','type' => 'option'));
	$wp_customize->add_setting( 'theme_behance'    , array('transport' => 'refresh','type' => 'option'));
	
	/// ADD CONTROLS
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_logo',
      array(
		'label' => 'Upload Logo',
		'section' => 'title_tagline',
		'settings' => 'theme_logo',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_copyright', array(
		'label'        => __( 'Copyright info', 'mytheme' ),
		'section'    => 'title_tagline',
		'settings'   => 'theme_copyright',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_showsearch', array(
		'label'        => __( 'Show search in menu', 'mytheme' ),
		'section'    => 'title_tagline',
		'settings'   => 'theme_showsearch',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_facebook', array(
		'label'        => __( 'Facebook', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_facebook',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_twitter', array(
		'label'        => __( 'Twitter', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_twitter',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_instagram', array(
		'label'        => __( 'Instagram', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_instagram',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_pinterest', array(
		'label'        => __( 'Pinterest', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_pinterest',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_youtube', array(
		'label'        => __( 'YouTube', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_youtube',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_houzz', array(
		'label'        => __( 'Houzz', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_houzz',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_google', array(
		'label'        => __( 'Google+', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_google',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_dribbble', array(
		'label'        => __( 'Dribbble', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_dribbble',
  	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_behance', array(
		'label'        => __( 'Behance', 'mytheme' ),
		'section'    => 'theme_social',
		'settings'   => 'theme_behance',
  	) ) );
}

add_action( 'customize_register', 'mytheme_customize_register' );


/*** POST TYPES ***/
add_action('init', 'register_post_types');
function register_post_types() {
	/**** REGISTER PROJECTS POST TYPE ****/
	$labels = array(
		'name' => _x('Portfolio', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'add_new' => _x('Add New Project', 'portfolio item'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','tags')
		//"menu_position" => 21
	  ); 
 
	register_post_type( 'portfolio' , $args );	
	
	// Project Tags Taxonomy
    register_taxonomy(
        'project_category',
        'portfolio',
        array(
            'labels' => array(
                'name'              => _x( 'Project Categories' , 'taxonomy general name' ),
                'singular_name'     => _x( 'Project Category' , 'taxonomy singular name'),
                'add_new_item' => 'Add Project Category',
                'new_item_name' => "New Project Category"
            ),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'support' => array('tags')
        )
    );
	
	flush_rewrite_rules();

}

/*** ADD SIDEBAR AND WIDGETS ***/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Blog Slidebar',
		'id'            => 'blog_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="heading-title-alt text-left heading-border-bottom"><h6 class="text-uppercase">',
		'after_title'   => '</h6></div>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Register and load the widget
function wpb_load_widget() {
	
	// Unregister Default Widgets in order to use custom widgets
	unregister_widget( 'WP_Widget_Tag_Cloud' );
	unregister_widget( 'WP_Widget_Categories' );
	unregister_widget( 'WP_Widget_Recent_Posts' );
	
	// Register widgets
	register_widget( 'jh_widget_tag_cloud' );
	register_widget( 'jh_widget_Categories' );
	register_widget( 'jh_widget_Recent_Posts' );
	register_widget( 'jh_widget_social' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
include_once('widgets/jh_widget_categories.php');
include_once('widgets/jh_widget_recent_posts.php');
include_once('widgets/jh_widget_tag_cloud.php');
include_once('widgets/jh_widget_social.php');

function additional_content($additional_content) {
	if(is_array($additional_content)) {
		foreach($additional_content as $block) {
			switch($block['acf_fc_layout']) {
				case 'text_section':
					include('additional_content/jh_text.php');
					break;
				case 'services':
					include('additional_content/jh_services.php');
					break;
			}
		}
	}
}

?>