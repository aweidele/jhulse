<?php 
// Creating the widget 
class jh_widget_social extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'jh_widget_social', 

// Widget name will appear in UI
__('Social Media Links', 'jh_widget_domain'), 

// Widget description
array( 'description' => __( 'This widget will display social media links, which are set in the Social Media Tab', 'jh_widget_domain' ), ) 
);
}

// Creating widget front-end

public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

	
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

// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
?>

                                <div class="widget-social-link circle">
<?php foreach($social as $class => $link) { ?>
                                <a href="<?php echo $link; ?>" target="_blank"><i class="fa fa-<?php echo $class; ?>"></i></a>
<?php } ?>
                                </div>
<?php
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here