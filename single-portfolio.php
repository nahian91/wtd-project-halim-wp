<?php get_header();?>

<?php get_template_part('inc/breadcumb'); ?>
<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title();?></h2>
                <img src="<?php the_post_thumbnail_url();?>" alt="">
                <?php the_content();?>
                <div class="row">
                   <div class="col-xl-12">
                     <h4>project gallery</h4>
                     <div class="row">
                     <?php
                        if($gallerys = get_field('project_gallery')) {
   
                           foreach($gallerys as $gallery) {
                              ?>
                                 
                              <div class="col-xl-4">
                                 <div class="project-gallery">
                                    <img src="<?php echo $gallery['url'];?>" alt="">
                                 </div>
                              </div>
                             <?php
                           }
                        }
                     ?>
                     </div>
                   </div>
                </div>
                <br><br>
                <div class="row">
                   <div class="col-xl-12">
                        <h4><?php echo esc_html__('project overview', 'halim');?></h4>
                        <?php the_field('project_video');?>
                   </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4><?php echo esc_html__('Technology Used', 'halim');?></h4>
                    <ul>
                       <?php
                           if($techs = get_field('project_tech')) {
                              foreach($techs as $tech) {
                                 ?>
                                    <li><i class="fa fa-arrow-right"></i> <?php echo $tech['tech_name'];?></li>
                                 <?php
                              }
                           }
                        ?>
                           
                    </ul>
                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <ul>
                    <?php
                        if($features = get_field('project_features')) {
                           foreach($features as $feature) {
                        ?>
                           <li><i class="fa fa-arrow-right"></i> <?php echo $feature['tech_name'];?></li>
                        <?php
                           }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 <?php get_footer();?>