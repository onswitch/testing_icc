<?php 
use Roots\Sage\Titles;

$address = sprintf('%s, %s %s',
	get_post_meta(get_the_ID(), 'wpcf-address-line-1', true),
	get_post_meta(get_the_ID(), 'wpcf-city', true),
	get_post_meta(get_the_ID(), 'wpcf-postcode', true)
);
?>

<section>
	<div style="background-image: url(<?= get_template_directory_uri(); ?>/dist/images/event-detaill-story.jpg)" class="story-intro home-banner orange text-center">
		<div class="story">
	  		<div class="container">
				<div class="row">
		  			<div class="col-xs-12">
						<div class="title"><?= Titles\title(); ?></div>
						<div class="separator"> </div>
						<div class="description"><?=$address;?></div>
		  			</div>
				</div>
	  		</div>
		</div>
	</div>
</section>

