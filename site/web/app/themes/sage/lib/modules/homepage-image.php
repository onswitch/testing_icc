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
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		echo __( 'Hero Image', 'text_domain' );
		echo $args['after_widget'];
	}
		
}

add_action( 'widgets_init', function() {
     register_widget('\Discover\Widgets\HP_Image');
});

?>