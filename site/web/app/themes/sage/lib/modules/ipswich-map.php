<?php
namespace Discover\Widgets;

class DI_Map extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'di_ipswich_map_widget', // Base ID
			__( 'Ipswich Map', 'sage' ), // Name
			array( 'description' => __( 'Display the ipswich map', 'sage' ) ) // Args
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
		<section>
			<a href="#" title="location" class="ipswich-map imagefill-section">
				<img src="<?=$instance['di_image_full'];?>" alt="ipswich general map" class="main-img"/>
				<img src="<?=$instance['di_image_mobile'];?>" alt="ipswich general map" class="mobile-img"/>
			</a>
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
    
        $di_image_full = '';
        if(isset($instance['di_image_full']))
        {
            $di_image_full = $instance['di_image_full'];
        }

        $di_image_mobile = '';
        if(isset($instance['di_image_mobile']))
        {
            $di_image_mobile = $instance['di_image_mobile'];
        }

        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'di_image_full' ); ?>"><?php _e( 'Full Map Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'di_image_full' ); ?>" id="<?php echo $this->get_field_id( 'di_image_full' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $di_image_full ); ?>" />
            <input class="button button-secondary upload_image_button" type="button" value="Upload Image" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'di_image_mobile' ); ?>"><?php _e( 'Mobile Map Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'di_image_mobile' ); ?>" id="<?php echo $this->get_field_id( 'di_image_mobile' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $di_image_mobile ); ?>" />
            <input class="button button-secondary upload_image_button" type="button" value="Upload Image" />
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
     register_widget('\Discover\Widgets\DI_Map');
});

?>