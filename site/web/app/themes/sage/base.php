<?php
use Roots\Sage\Config;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>    
    <div id="container">
    	<?php
      		do_action('get_header');
      		get_template_part('templates/header');
    	?>
    	
    	<div class="page-wrapper">
			<div class="inner">
        		<main id="main" style="min-height: 800px">
        			<?php include Wrapper\template_path(); ?>
        		</main>
        	</div>
    	</div>
    
    	<?php
      		do_action('get_footer');
      		get_template_part('templates/footer');
    	?>
    </div>
    <?php wp_footer(); ?>
    <script src="/app/themes/sage/assets/scripts/theme/cdn.js" type="text/javascript"></script>
    <script src="/app/themes/sage/assets/scripts/theme/dep.js" type="text/javascript"></script>
    <script src="/app/themes/sage/assets/scripts/theme/components.js" type="text/javascript"></script>
    <script src="/app/themes/sage/assets/scripts/theme/main.js" type="text/javascript"></script>  
  </body>
</html>
