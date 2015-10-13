<?php
namespace Discover\Widgets;

class HP_Image extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'di_hero_widget', // Base ID
			__( 'Hero Image', 'sage' ), // Name
			array( 'description' => __( 'Add a hero image with limks', 'sage' ) ) // Args
		);
		
		add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
	}
	
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		/*
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		echo __( 'Hero Image', 'text_domain' );
		echo $args['after_widget'];
		*/
		
		?>
            <section>
            	<div style="background-image: url(<?=$instance['di_image'];?>)" class="story-intro home-banner <?=$instance['di_colour'];?> text-center">
                	<div style="background-image: url(<?=$instance['di_image'];?>);background-size: cover;" class="story">
                  		<div class="container">
                    		<div class="row">
                      			<div class="col-xs-12">
									<div class="title"><?=$instance['di_title'];?></div>
									<div class="separator"></div>
									<div class="description"><?=$instance['di_message'];?></div>
									<div class="meta"><?=__('Photo');?>&#58; <?=$instance['di_photoby'];?></div>
                      			</div>
                    		</div>
                  		</div>
                	</div>
					<div style="background-image: url(<?= get_template_directory_uri(); ?>/dist/images/feature-bg.png);background-size: cover;" class="features">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-md-4 text-center">
									<a href="<?=site_url('see-and-do');?>" title="See &amp; Do">
										<div class="bubble">
											<div class="icon-feature icon-feature-see-do"></div>
										</div>
										<span>See & Do</span>
									</a>
								</div>
								<div class="col-xs-12 col-md-4 text-center">
									<a href="<?=site_url('whats-on');?>" title="What's On">
										<div class="bubble">
											<div class="icon-feature icon-feature-what-on"></div>
										</div>
										<span>What's On</span>
									</a>
								</div>
								<div class="col-xs-12 col-md-4 text-center">
									<a href="<?=site_url('stay');?>" title="Stay">
										<div class="bubble">
											<div class="icon-feature icon-feature-stay"></div>
										</div>
										<span>Stay</span>
									</a>
								</div>
							</div>
						</div>
					</div>
            	</div>
            </section>
            <div class="colorful-bar">
            	<span class="sp-1"></span>
            	<span class="sp-2"></span>
            	<span class="sp-3"></span>
            	<span class="sp-4"></span>
            	<span class="sp-5"></span>
            </div>
		<?php
	}

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void
     **/
    public function form( $instance ) {
    
        $di_title = '';
        if(isset($instance['di_title']))
        {
            $di_title = $instance['di_title'];
        }

        $di_message = '';
        if(isset($instance['di_message']))
        {
            $di_message = $instance['di_message'];
        }

        $di_image = '';
        if(isset($instance['di_image']))
        {
            $di_image = $instance['di_image'];
        }

        $di_photoby = '';
        if(isset($instance['di_photoby']))
        {
            $di_photoby = $instance['di_photoby'];
        }

        $di_colour = 'orange';
        if(isset($instance['di_colour']))
        {
            $di_link = $instance['di_colour'];
        } 
        
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'di_title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'di_title' ); ?>" name="<?php echo $this->get_field_name( 'di_title' ); ?>" type="text" value="<?php echo esc_attr( $di_title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'di_message' ); ?>"><?php _e( 'Message:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'di_message' ); ?>" name="<?php echo $this->get_field_name( 'di_message' ); ?>" type="text" value="<?php echo esc_attr( $di_message ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'di_colour' ); ?>"><?php _e( 'Colour:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'di_colour' ); ?>" name="<?php echo $this->get_field_name( 'di_colour' ); ?>" type="text" value="<?php echo esc_attr( $di_colour ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'di_image' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'di_image' ); ?>" id="<?php echo $this->get_field_id( 'di_image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $di_image ); ?>" />
            <input class="button button-secondary upload_image_button" type="button" value="Upload Image" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'di_photoby' ); ?>"><?php _e( 'Photo By:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'di_photoby' ); ?>" name="<?php echo $this->get_field_name( 'di_photoby' ); ?>" type="text" value="<?php echo esc_attr( $di_photoby ); ?>" />
        </p>
    <?php
    }

    /**
     * Upload the Javascripts for the media uploader
     */
    public function upload_scripts() {
    
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('upload_media_widget', \Roots\Sage\Assets\asset_path('scripts/admin.js'), array('jquery'));
        wp_enqueue_style('thickbox');
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    public function update( $new_instance, $old_instance ) {

        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }

}

add_action( 'widgets_init', function() {
     register_widget('\Discover\Widgets\HP_Image');
});

?>