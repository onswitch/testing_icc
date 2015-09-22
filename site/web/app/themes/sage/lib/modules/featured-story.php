<?php
namespace Discover\Widgets;

class DI_Featured_Story extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'di_featured_story_widget', // Base ID
			__( 'Featured Story', 'sage' ), // Name
			array( 'description' => __( 'Use a hero image to tell a story', 'sage' ) ) // Args
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
		
		?>
		<section class="hidden-xs hidden-sm">
			<div style="background-image: url(<?=$instance['di_image'];?>)" class="story-intro bottom-bar <?=$instance['di_colour'];?> text-center">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="title"><?=$instance['di_title'];?></div>
							<div class="separator"></div>
							<div class="description"><?=$instance['di_message'];?></div>
							<div class="meta"><?=__('Photo');?>&#58; <?=$instance['di_photoby'];?></div><a href="<?=$instance['di_link'];?>" title="Read More" class="readmore">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
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

        $di_link = '';
        if(isset($instance['di_link']))
        {
            $di_link = $instance['di_link'];
        }        
        
        $di_colour = 'purple';
        if(isset($instance['di_colour']))
        {
            $di_colour = $instance['di_colour'];
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
            <label for="<?php echo $this->get_field_name( 'di_link' ); ?>"><?php _e( 'Link:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'di_link' ); ?>" name="<?php echo $this->get_field_name( 'di_link' ); ?>" type="text" value="<?php echo esc_attr( $di_link ); ?>" />
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
     register_widget('\Discover\Widgets\DI_Featured_Story');
});

?>