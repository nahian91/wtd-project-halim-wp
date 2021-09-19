<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php wp_head();?>
   </head>
   <body <?php body_class();?> >
	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">
							<a href=""><i class="fa fa-envelope"></i> info@halim.com</a>
							<a href=""><i class="fa fa-phone"></i> 23457689</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-youtube"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="<?php echo site_url();?>">halim</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                        <?php
                           wp_nav_menu(array(
                              'theme_location' => 'primary-menu',
                              'menu_class' => 'navbar-nav ml-auto'
                           ));
                        ?>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area Start -->