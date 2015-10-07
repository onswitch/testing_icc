<?php 
use Roots\Sage\Extras;

while (have_posts()) : the_post(); 
?>

<?php
$price = false;
$posttype = get_post_type();
$telephone = get_post_meta(get_the_ID(), 'wpcf-telephone', true);
$telephone_link = str_replace(' ','',$telephone);
$email = get_post_meta(get_the_ID(), 'wpcf-email', true);
$mailto = preg_replace_callback( '/([\x80-\xff])/',
    function ($matches) {
        return '&#' . ord($matches[0]);
    },
    $email );
$website = \Roots\Sage\Extras\addhttp(get_post_meta(get_the_ID(), 'wpcf-website', true));
$images = get_posts( array(
	'post_type' => 'attachment',
	'posts_per_page' => -1,
	'post_parent' => get_the_ID(),
	'orderby' => 'menu_order',
	'order' => 'DESC'
));
?>
	<article <?php post_class(); ?>>
		<section class="detail-content">
    		<div class="container">
            	<div class="meta-data">
                	<div class="row">
                		<?php if($posttype == 'event') : ?>
							<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><span class="big">27</span><span class="small">June</span></div>
							<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><span class="big">1</span><span class="small">Day</span></div>
							<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><a href="tel:<?=$telephone_link;?>"><span class="big fa fa-phone"></span><span class="small"><?=$telephone;?></span></a></div>
							<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><span class="big">$100</span><span class="small">Entry</span></div>
							<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><span class="big fa fa-map-marker"></span><span class="small">View Map</span></div>
							<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><a href="<?=$website;?>" target="_blank"><span class="big fa fa-external-link"></span><span class="small">View Website</span></a></div>
                    	<?php elseif( ($price == false) AND (strlen($telephone) < 5) ) : ?>
							<div class="col-xs-6 col-sm-6 col-md-6 text-center field"><span class="big fa fa-map-marker"></span><span class="small">View Map</span></div>
							<div class="col-xs-6 col-sm-6 col-md-6 text-center field" style="border-right: none !important;"><a href="<?=$website;?>" target="_blank"><span class="big fa fa-external-link"></span><span class="small">View Website</span></a></div>                    	
                    	<?php elseif($price != false) : ?>
							<div class="col-xs-3 col-sm-3 col-md-3 text-center field"><a href="tel:<?=$telephone_link;?>"><span class="big fa fa-phone"></span><span class="small"><?=$telephone;?></span></a></div>
							<div class="col-xs-3 col-sm-3 col-md-3 text-center field"><span class="big"><?=$price;?></span><span class="small">Entry</span></div>
							<div class="col-xs-3 col-sm-3 col-md-3 text-center field" style="border-right: 1px solid #949494 !important;"><span class="big fa fa-map-marker"></span><span class="small">View Map</span></div>
							<div class="col-xs-3 col-sm-3 col-md-3 text-center field"><a href="<?=$website;?>" target="_blank"><span class="big fa fa-external-link"></span><span class="small">View Website</span></a></div>
                    	<?php elseif(strlen($telephone) < 5) : ?>
							<div class="col-xs-4 col-sm-4 col-md-4 text-center field"><span class="big"><?=$price;?></span><span class="small">Entry</span></div>
							<div class="col-xs-4 col-sm-4 col-md-4 text-center field" style="border-right: 1px solid #949494 !important;"><span class="big fa fa-map-marker"></span><span class="small">View Map</span></div>
							<div class="col-xs-4 col-sm-4 col-md-4 text-center field"><a href="<?=$website;?>" target="_blank"><span class="big fa fa-external-link"></span><span class="small">View Website</span></a></div>                    	
                    	<?php else : ?>
							<div class="col-xs-4 col-sm-4 col-md-4 text-center field"><a href="tel:<?=$telephone_link;?>"><span class="big fa fa-phone"></span><span class="small"><?=$telephone;?></span></a></div>
							<div class="col-xs-4 col-sm-4 col-md-4 text-center field"><span class="big fa fa-map-marker"></span><span class="small">View Map</span></div>
							<div class="col-xs-4 col-sm-4 col-md-4 text-center field"><a href="<?=$website;?>" target="_blank"><span class="big fa fa-external-link"></span><span class="small">View Website</span></a></div>                    	
                    	<?php endif; ?>
                  	</div>
                  	<div class="separator visible-xs visible-sm"></div>
                </div>
                <div class="row">
                	<div class="event-content text-editor col-xs-12 col-md-9">
                    	<div class="text-content"><?=the_content();?></div>

<?
/*
$slider_params = array( 'width' => 485, 'height' => 242, 'crop' => true );
$carousel_params = array( 'width' => 150, 'height' => 88, 'crop' => true );

$slider = '';
$carousel = '';
foreach ( $images as $attachment ) {
	$thumbimg = wp_get_attachment_image_src( $attachment->ID, 'thumbnail', true );
	$fullimg = wp_get_attachment_image_src( $attachment->ID, 'full', true );
	$slider .= '<li data-thumb="' . $thumbimg[0] . '"><img src="' . bfi_thumb($fullimg[0], $slider_params ) . '" /></li>';
	$carousel .= '<li data-thumb="' . $thumbimg[0] . '"><img src="' . bfi_thumb($fullimg[0], $carousel_params ) . '" /></li>';         
}
*/
?>
<style>
.slider-size {
height: 414px; /* This is your slider height */
}
.carousel {
width:100%; 
margin:0 auto; /* center your carousel if other than 100% */ 
}
.carousel-indicators {
margin-left: -30% !important;
}
</style>  

<div id="carousel-example-generic" class="carousel slide text-content" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  	<?php for($i=0;$i<count($images);$i++) : ?>
    	<li data-target="#carousel-example-generic" data-slide-to="<?=$i;?>" <?php if($i==0) : ?>class="active"<?php endif; ?>></li>
    <?php endfor; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php foreach ( $images as $k=>$attachment ) : $fullimg = wp_get_attachment_image_src( $attachment->ID, 'full', true ); ?>
  	<div class="item <?php if($k==0) : ?>active<?php endif; ?>">
		<div style="background:url(<?=$fullimg[0]; ?>) center center; background-size:cover;" class="slider-size">
		<!--
		<div class="carousel-caption">
		  <h2>Headline</h2>
		  <p>Content text to go here. </p>
		</div>
		-->
	  </div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

                  </div>
                  <div class="side-bar col-xs-12 col-md-3">
                    <div class="contact-block">
                      <div class="title">Contact Details</div>
                      <p class="address"><label>Address</label><br><span><?=get_post_meta(get_the_ID(), 'wpcf-address-line-1', true);?><br><?=get_post_meta(get_the_ID(), 'wpcf-city', true);?> <br><?=get_post_meta(get_the_ID(), 'wpcf-state', true);?> <?=get_post_meta(get_the_ID(), 'wpcf-postcode', true);?></span></p>
                      <?php if(strlen($telephone) > 5) : ?>
                      	<p><label>Phone</label><a href="tel:<?=$telephone_link;?>"><span><?=$telephone;?></span></a></p>
                      <?php endif; ?>
                      <p><label>Email</label><a href="mailto:<?=$mailto;?>"><span><?=$email;?></span></a></p>
                    </div>
                    <div class="testimonial text-center"><img src="<?= get_template_directory_uri(); ?>/dist/images/icons/icon-owl.png" width="50%">
                      <div class="title">Testimonial</div>
                      <div class="separator"></div>
                      <div class="ideal-location">“Ideal Location”</div>
                      <div class="description">Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum,</div>
                    </div>
                    <div class="ranked text-center">
                      <div class="title">Ranked #2 of 6</div>
                      <div class="separator"></div>
                      <div class="description">in Ipswich area</div>
                    </div>
                    <div class="rating text-center">
                      <div class="title">Rating</div>
                      <div class="rate-view"><span class="rate"></span><span class="rate"></span><span class="rate"></span><span class="rate"></span><span class="unrate"></span></div>
                      <div class="description">Courtesy of Trip Advisor</div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
  </article>
<?php endwhile; ?>



