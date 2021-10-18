<?php

/*
Template Name: Page Template
*/

get_header();?>
<?php get_template_part('inc/breadcumb'); ?>

<section class="page-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="page">
                    <h4><?php the_title();?></h4>
                    <?php the_content();?>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    if(is_active_sidebar('sidebar-1')) {
                        dynamic_sidebar('sidebar-1');
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>