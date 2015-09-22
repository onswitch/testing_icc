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
    <script src="/app/themes/sage/assets/scripts/theme/cdn.js" type="text/javascript"></script>
    <script src="/app/themes/sage/assets/scripts/theme/dep.js" type="text/javascript"></script>
    <script src="/app/themes/sage/assets/scripts/theme/components.js" type="text/javascript"></script>
    <script src="/app/themes/sage/assets/scripts/theme/main.js" type="text/javascript"></script>    
    <?php wp_footer(); ?>
  </body>
</html>
