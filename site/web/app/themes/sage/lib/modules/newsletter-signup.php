<?php
namespace Discover\Widgets;

class DI_Newsletter_Signup extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'di_newsletter_signup_widget', // Base ID
			__( 'Newsletter Sign Up', 'sage' ), // Name
			array( 'description' => __( 'Add a newsletter sign up', 'sage' ) ) // Args
		);
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
    		<div class="subscribe-form-landing subscribe-form text-center">
        		<div class="description">
                	<p><?=$instance['di_title'];?></p>
            	</div>
            	<form method="POST" action="">
                	<input type="text" name="subscribe-email" value="" class="email form-control" placeholder="Your Email"/>
                	<button class="btn btn-primary btn-submit"><?=__('Go');?></button>
                </form>
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
    
        $di_title = 'Deals, Updates, and Discounts. Stay informed about what\'s happening in Ipswich';
        if(isset($instance['di_title']))
        {
            $di_title = $instance['di_title'];
        }

       
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'di_title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'di_title' ); ?>" name="<?php echo $this->get_field_name( 'di_title' ); ?>" type="text" value="<?php echo esc_attr( $di_title ); ?>" />
        </p>
    <?php
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
     register_widget('\Discover\Widgets\DI_Newsletter_Signup');
});

?>