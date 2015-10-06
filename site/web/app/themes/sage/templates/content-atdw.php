<?php while (have_posts()) : the_post(); ?>

<?php
$telephone = get_post_meta(get_the_ID(), 'wpcf-telephone', true);
$email = get_post_meta(get_the_ID(), 'wpcf-email', true);
$website = get_post_meta(get_the_ID(), 'wpcf-website', true);
?>
	<article <?php post_class(); ?>>
		<section class="detail-content">
    		<div class="container">
            	<div class="meta-data">
                	<div class="row">
                    	<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><span class="big">27</span><span class="small">June</span></div>
                    	<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><span class="big">1</span><span class="small">Day</span></div>
                    	<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><a href="tel:<?=$telephone;?>"><span class="big fa fa-phone"></span><span class="small"><?=$telephone;?></span></a></div>
                    	<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><span class="big">$100</span><span class="small">Entry</span></div>
                    	<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><span class="big fa fa-map-marker"></span><span class="small">View Map</span></div>
                    	<div class="col-xs-4 col-sm-4 col-md-2 text-center field"><a href="<?=$website;?>" target="_blank"><span class="big fa fa-external-link"></span><span class="small">View Website</span></a></div>
                  	</div>
                  	<div class="separator visible-xs visible-sm"></div>
                </div>
                <div class="row">
                	<div class="event-content text-editor col-xs-12 col-md-9">
                    	<div class="text-content"><?=the_content();?></div>
                    	<div class="slide-content text-content">
                      		<h4>Image with caption</h4>
                      		<p><img src="<?= get_template_directory_uri(); ?>/dist/images/demo-image.jpg" class="img img-caption"><span class="caption">Cessimusciis por as et et vollat fugia voluptiscit,</span></p>                    	
                    	</div>
                    	<div class="text-content">
                      		<h4>2 column</h4>
                      		<div class="row">
                        		<div class="col-xs-12 col-md-6">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                        		<div class="col-xs-12 col-md-6">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                      		</div>
                      		<h4>3 column</h4>
                      		<div class="row">
                        		<div class="col-xs-12 col-md-4">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                        		<div class="col-xs-12 col-md-4">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                        		<div class="col-xs-12 col-md-4">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                      		</div>
                      		<h4>4 column</h4>
                      		<div class="row">
                        		<div class="col-xs-12 col-md-3">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                        		<div class="col-xs-12 col-md-3">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                        		<div class="col-xs-12 col-md-3">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                        		<div class="col-xs-12 col-md-3">
                          			<p>Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                        		</div>
                      		</div>
                      		<h4>Image</h4>
                      		<p> <img src="<?= get_template_directory_uri(); ?>/dist/images/demo-image.jpg" class="img"></p>
                      		<h4>Image Full</h4>
                      		<p> <img src="<?= get_template_directory_uri(); ?>/dist/images/home-story-1.jpg" class="img img-full"></p>
                    	</div>
                    <h4>Image overflow</h4>
                    <p> <img src="<?= get_template_directory_uri(); ?>/dist/images/home-story-1.jpg" class="img">
                      </p><h4>Image float</h4>
                    <p></p>
                    <div class="text-content">
                      <p> <img src="<?= get_template_directory_uri(); ?>/dist/images/demo-image.jpg" class="img img-float">Cessimusciis por as et et vollat fugia voluptiscit, omnisqui to molo consequ istessimus duntiis tiorum, eum untiore perchil mos ad quis dellatur am aliquam, cum veliquost, iustis alibus sum quas nim et ium quibero mod ullor aut aribus porent volorem dolupie ntemqui deserit officabo. Sapieni aute dolorro mod quibus dolectiis eos eum sae voluptaturi coreptatus. </p>
                      <h4>Image with caption</h4>
                      <p> <img src="<?= get_template_directory_uri(); ?>/dist/images/demo-image.jpg" class="img img-caption"><span class="caption">Cessimusciis por as et et vollat fugia voluptiscit,</span></p>
                    </div>
                  </div>
                  <div class="side-bar col-xs-12 col-md-3">
                    <div class="contact-block">
                      <div class="title">Contact Details</div>
                      <p class="address"><label>Address</label><br><span><?=get_post_meta(get_the_ID(), 'wpcf-address-line-1', true);?><br><?=get_post_meta(get_the_ID(), 'wpcf-city', true);?> <br><?=get_post_meta(get_the_ID(), 'wpcf-state', true);?> <?=get_post_meta(get_the_ID(), 'wpcf-postcode', true);?></span></p>
                      <p><label>Phone</label><a href="tel:<?=$telephone;?>"><span><?=$telephone;?></span></a></p>
                      <p><label>Email</label><a href="maillto:<?=$email;?>"><span><?=$email;?></span></a></p>
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



