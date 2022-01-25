<?php get_header();?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title();?></h4>
                    <ul>
                        <li><a href="<?php echo site_url();?>"></a><?php echo esc_html__('Home', 'halim');?></li> / 
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title();?></h2>
                <?php the_post_thumbnail();?>
                <?php the_content();?>
                <div class="comments">
                    <?php
                        if(comments_open()) {
                            comments_template();
                        }
                    ?>
                </div>
            </div>
            <div class="col-xl-4">
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