<?php
namespace Discover\Widgets;

class HP_Featured extends \WP_Widget {

	private $featured;
	
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

		$this->getFeatured();
		echo $this->displayFeatured();
		
/*
<div class="section article-listing grid-mode home-grid" style="position: relative; height: 1048px;">
              <div class="grid-sizer"></div>
              <article data-grid-order="' . $i . '" class="grid-item grid-item--width2 grid-item--height2 col-xs-12 col-md-4" style="position: absolute; left: 0%; top: 0px;">
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
*/

	}

	private function displayFeatured() {

		$html = '';
		$count = count($this->featured);
		$height = 524;
		$offset = 0;
		
		if($count > 2) { // Show 3
			
			// Article 1
			$i = 0;
        	$html .= '<article data-grid-order="' . $i . '" class="grid-item grid-item--width2 grid-item--height2 col-xs-12 col-md-4" style="position: absolute; left: 0%; top: ' . $offset . 'px;">';
        	$html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image'] . '" alt="media 1" class="" style="position: absolute; width: auto; height: 524px; top: 0px; left: -91.5px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
        	$html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
            
            // Article 2
            $i = 1;
            $html .= '<article data-grid-order="' . $i . '" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 66.6153%; top: ' . $offset . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image_side'] . '" alt="media 2" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>';
            $html .= '<div class="overlay-info">';
        	// Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
        	$html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
            
            // Article 3
            $i = 2;
            $html .= '<article data-grid-order="' . $i . '" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 66.6153%; top: ' . ($offset+262) . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image_side'] . '" alt="media 3" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
            $html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
        	$html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
		}
		
		if($count > 5) { // Show 6
			$height = (524*2);
			$offset = (524*1);
			
			// Article 4
			$i = 3;
            $html .= '<article data-grid-order="' . $i . '" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 0%; top: ' . $offset . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image_side'] . '" alt="media 4" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
            $html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
        	$html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
            
            // Article 5
            $i = 4;          
            $html .= '<article data-grid-order="' . $i . '" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 0%; top: ' . ($offset+262) . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image_side'] . '" alt="media 5" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
            $html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
            
            // Article 6
            $i = 5;                  
            $html .= '<article data-grid-order="' . $i . '" class="grid-item grid-item--width2 grid-item--height2 col-xs-12 col-md-4" style="position: absolute; left: 33.3076%; top: ' . $offset . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image'] . '" alt="media 6" class="" style="position: absolute; width: auto; height: 524px; top: 0px; left: -91.5px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
            $html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
		}
		
		if($count > 8) { // Show 9
			$height = (524*3);
			$offset = (524*2);

			// Article 7
			$i = 6;
        	$html .= '<article data-grid-order="' . $i . '" class="grid-item grid-item--width2 grid-item--height2 col-xs-12 col-md-4" style="position: absolute; left: 0%; top: ' . $offset . 'px;">';
        	$html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image'] . '" alt="media 1" class="" style="position: absolute; width: auto; height: 524px; top: 0px; left: -91.5px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
        	$html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
            
            // Article 8
            $i = 7;
            $html .= '<article data-grid-order="' . $i . '" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 66.6153%; top: ' . $offset . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image_side'] . '" alt="media 2" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>';
            $html .= '<div class="overlay-info">';
        	// Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
        	$html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
            
            // Article 9
            $i = 8;
            $html .= '<article data-grid-order="' . $i . '" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 66.6153%; top: ' . ($offset+262) . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image_side'] . '" alt="media 3" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
            $html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
        	$html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';   			
		}
		
		if($count > 11) { // Show 12
			$height = (524*4);
			$offset = (524*3);
			
			// Article 10
			$i = 9;
            $html .= '<article data-grid-order="' . $i . '" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 0%; top: ' . $offset . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image_side'] . '" alt="media 4" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
            $html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
        	$html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
            
            // Article 11
            $i = 10;          
            $html .= '<article data-grid-order="' . $i . '" class="grid-item col-xs-12 col-md-4" style="position: absolute; left: 0%; top: ' . ($offset+262) . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image_side'] . '" alt="media 5" class="" style="position: absolute; width: auto; height: 262px; top: 0px; left: -41px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
            $html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';
            
            // Article 12
            $i = 11;                  
            $html .= '<article data-grid-order="' . $i . '" class="grid-item grid-item--width2 grid-item--height2 col-xs-12 col-md-4" style="position: absolute; left: 33.3076%; top: ' . $offset . 'px;">';
            $html .= '<div class="media" style="overflow: hidden; position: absolute;"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '"><img src="' . $this->featured[$i]['image'] . '" alt="media 6" class="" style="position: absolute; width: auto; height: 524px; top: 0px; left: -91.5px;"></a></div>';
            $html .= '<div class="overlay-info">';
            // Remove Heart Button $html .= '<div class="interact"><button><div class="fa fa-heart"></div>12</button></div>';
            $html .= '<div class="detail"><a href="' . $this->featured[$i]['link'] . '" title="' . $this->featured[$i]['title'] . '">';
            if($this->featured[$i]['description'] != '') {
            	$html .= '<div class="description">' . $this->featured[$i]['description'] . '</div>';
            }
            $html .= '<div class="title">' . $this->featured[$i]['title'] . '</div></a></div><a href="' . $this->featured[$i]['link'] . '" title="Read More" class="readmore">Read More</a>';
            $html .= '</div>';
            $html .= '<div class="bottom-bar"></div>';
            $html .= '</article>';		
		}
		
		return '<div class="section article-listing grid-mode home-grid" style="position: relative; height: ' . $height . 'px;"><div class="grid-sizer"></div>' . $html . '</div>';
	}

	private function getFeatured() {
		
		$args = array( 
			'post_type' 		=> array('post','page','accommodation','attraction','event','restaurant','tour','hire','transport'), //get_post_types('', 'names'), 
			'meta_key' 			=> 'wpcf-featured', 
			'meta_value' 		=> '1',
			'posts_per_page'   	=> 15
		);
		$posts = get_posts( $args );
		
		$this->featured = array();		
		foreach($posts as $post) {

			$link = get_post_meta ( $post->ID, 'wpcf-overwrite-link', true );
			if($link == '') {
				$link = get_permalink($post->ID);
			}
			
			$image = get_post_meta ( $post->ID, 'wpcf-overwrite-featured-image', true );			
			if($image != '') {
				$thepost = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE guid = '$image'" ) );
				$imageID = $thepost->ID;
			}
			
			if($image == '') {
				$image_sticky = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'front-page-sticky');
				$image_sticky = $image_sticky[0];
			} else {
				$image_sticky = wp_get_attachment_image_src($imageID, 'front-page-sticky');
				$image_sticky = $image_sticky[0];
			}
		
			if($image == '') {
				$image_side = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'front-page-side');
				$image_side = $image_side[0];
			} else {
				$image_side = wp_get_attachment_image_src($imageID, 'front-page-side');
				$image_side = $image_side[0];
			}
		
			$title = get_post_meta ( $post->ID, 'wpcf-overwrite-title', true );
			if($title == '') {
				$title = $post->post_title;
			}
		
			$this->featured[] = array(
				'id' => $post->ID,
				'sticky' => false,
				'title' => $title,
				'link' => $link,
				'image' => $image_sticky,
				'image_side' => $image_side,
				'order' => get_post_meta ( $post->ID, 'wpcf-sort-order', true ),
				'description' => ''
			);
		}

		usort($this->featured, "\Discover\Widgets\cmpFeatured");
	}
	
}

function cmpFeatured($a, $b) {
	return (int) $a["order"] > (int) $b["order"];
}
		
add_action( 'widgets_init', function() {
     register_widget('\Discover\Widgets\HP_Featured');
});

?>