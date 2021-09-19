<?php

/*
   Template Name: Portfolio Page
*/

get_header();?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Portfolio</h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="portfolio-menu mb-40 text-center">
                     <button class="active" data-filter="*">ALL</button>
                     <button data-filter=".cat1" class="">Business </button>
                     <button data-filter=".cat2" class="">Finance</button>
                     <button data-filter=".cat3">Marketing</button>
                     <button data-filter=".cat4">Idea</button>
                  </div>
               </div>
            </div>
            <div class="row grid no-gutters">
               <div class="col-md-4 grid-item cat3 cat2">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/01.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html" class=""><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat2 cat1 cat3">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/02.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat2 cat4 cat3" >
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/03.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat2 cat5 cat1">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/04.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat1 cat4 cat5">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/05.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 grid-item cat1 cat4 cat3">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/06.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- projectss Area End -->
      <?php get_footer();?>