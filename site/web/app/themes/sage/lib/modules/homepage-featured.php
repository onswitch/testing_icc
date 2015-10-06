<?php
namespace Discover\Widgets;

class HP_Featured extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'di_featured_widget', // Base ID
			__( 'Home Page Featured', 'sage' ), // Name
			array( 'description' => __( 'Displays the featured ...', 'sage' ) ) // Args
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
<div class="section article-listing grid-mode home-grid" style="position: relative; height: 1048px;">
              <div class="grid-sizer"></div>
              <article data-grid-order="1" class="grid-item grid-item--width2 grid-item--height2 col-xs-12 col-md-4" style="position: absolute; left: 0%; top: 0px;">
                <div class="media" style="overflow: hidden; position: absolute;"><a href="#" title="Rich in history"><img src="<?= get_template_directory_uri(); ?>/dist/images/article/article-1-thumb.jpg" alt="media 1" class="" style="position: absolute; width: auto; height: 524px; top: 0px; left: -91.5px;"></a></div>
                <div class="overlay-info">
                  <div class="interact">
                    <button> 
                      <div class="fa fa-heart"></div>12
                    </button>
                  </div>
                  <div class="detail"><a href="#" title="Rich in history">
                      <div class="description">Lorem ipsum Tempor pariatur esse sed.</div>
                      <div class="title">Rich in history</div></a></div><a href="#" title="Read More" class="readmore">Read More</a>
                </div>
                <div class="bottom-bar"></div>
              </article>
              <article data-grid-order="2" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 66.6153%; top: 0px;">
                <div class="media" style="overflow: hidden; position: absolute;"><a href="#" title="SEQ’s Wine Region"><img src="<?= get_template_directory_uri(); ?>/dist/images/article/article-2-thumb.jpg" alt="media 2" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>
                <div class="overlay-info">
                  <div class="interact">
                    <button> 
                      <div class="fa fa-heart"></div>12
                    </button>
                  </div>
                  <div class="detail"><a href="#" title="SEQ’s Wine Region">
                      <div class="description">Lorem ipsum Tempor pariatur esse sed.</div>
                      <div class="title">SEQ’s Wine Region</div></a></div><a href="#" title="Read More" class="readmore">Read More</a>
                </div>
                <div class="bottom-bar"></div>
              </article>
              <article data-grid-order="3" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 66.6153%; top: 262px;">
                <div class="media" style="overflow: hidden; position: absolute;"><a href="#" title="5 Magical Day Trips"><img src="<?= get_template_directory_uri(); ?>/dist/images/article/article-3-thumb.jpg" alt="media 3" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>
                <div class="overlay-info">
                  <div class="interact">
                    <button> 
                      <div class="fa fa-heart"></div>12
                    </button>
                  </div>
                  <div class="detail"><a href="#" title="5 Magical Day Trips">
                      <div class="description">Lorem ipsum Tempor pariatur esse sed.</div>
                      <div class="title">5 Magical Day Trips</div></a></div><a href="#" title="Read More" class="readmore">Read More</a>
                </div>
                <div class="bottom-bar"></div>
              </article>
              <article data-grid-order="4" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 0%; top: 524px;">
                <div class="media" style="overflow: hidden; position: absolute;"><a href="#" title="Scenic Drives"><img src="<?= get_template_directory_uri(); ?>/dist/images/article/article-4-thumb.jpg" alt="media 4" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>
                <div class="overlay-info">
                  <div class="interact">
                    <button> 
                      <div class="fa fa-heart"></div>12
                    </button>
                  </div>
                  <div class="detail"><a href="#" title="Scenic Drives">
                      <div class="description">Lorem ipsum Tempor pariatur esse sed.</div>
                      <div class="title">Scenic Drives</div></a></div><a href="#" title="Read More" class="readmore">Read More</a>
                </div>
                <div class="bottom-bar"></div>
              </article>
              <article data-grid-order="6" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 0%; top: 786px;">
                <div class="media" style="overflow: hidden; position: absolute;"><a href="#" title="3 Best Family Outings"><img src="<?= get_template_directory_uri(); ?>/dist/images/article/article-5-thumb.jpg" alt="media 5" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>
                <div class="overlay-info">
                  <div class="interact">
                    <button> 
                      <div class="fa fa-heart"></div>12
                    </button>
                  </div>
                  <div class="detail"><a href="#" title="3 Best Family Outings">
                      <div class="description">Lorem ipsum Tempor pariatur esse sed.</div>
                      <div class="title">3 Best Family Outings</div></a></div><a href="#" title="Read More" class="readmore">Read More</a>
                </div>
                <div class="bottom-bar"></div>
              </article>
              <article data-grid-order="5" class="grid-item grid-item--width2 grid-item--height2 col-xs-12 col-md-4" style="position: absolute; left: 33.3076%; top: 524px;">
                <div class="media" style="overflow: hidden; position: absolute;"><a href="#" title="Willowbank - QLD’s Premier Raceway "><img src="<?= get_template_directory_uri(); ?>/dist/images/article/article-6-thumb.jpg" alt="media 6" class="" style="position: absolute; width: auto; height: 524px; top: 0px; left: -91.5px;"></a></div>
                <div class="overlay-info">
                  <div class="interact">
                    <button> 
                      <div class="fa fa-heart"></div>12
                    </button>
                  </div>
                  <div class="detail"><a href="#" title="Willowbank - QLD’s Premier Raceway ">
                      <div class="description">Lorem ipsum Tempor pariatur esse sed.</div>
                      <div class="title">Willowbank - QLD’s Premier Raceway </div></a></div><a href="#" title="Read More" class="readmore">Read More</a>
                </div>
                <div class="bottom-bar"></div>
              </article>
            </div>
		<?php

	}
		
}

add_action( 'widgets_init', function() {
     register_widget('\Discover\Widgets\HP_Featured');
});

?>