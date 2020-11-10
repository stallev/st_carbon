
<!DOCTYPE html>
<html>
   <head>
		 	<?php wp_head(); ?>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>BlueSky</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
      <div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu">
                  <?php
                     wp_nav_menu( [
                        'theme_location'  => 'menu_main_header',
                        'container'       => 'null', 
                        'container_class' => '', 
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                     ] );
                  ?>
               </div>               
            </div>
         </nav>
      </div>
