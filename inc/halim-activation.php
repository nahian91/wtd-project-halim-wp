<?php

function halim_plugin_activation() {
    $plugins = array(
        array(
            'name' => __('Contact Form 7', 'halim'),
            'slug' => 'contact-form-7',
            'required' => true,
        ),
        array(
            'name' => __('One Click Demo Import', 'halim'),
            'slug' => 'one-click-demo-import',
            'required' => true,
        ),
        array(
            'name' => __('Widgets Import & Export', 'halim'),
            'slug' => 'widget-importer-exporter',
            'required' => true,
        ),
        
        array(
            'name' => __('Advanced Custom Fields: Font Awesome Field', 'halim'),
            'slug' => 'advanced-custom-fields-font-awesome',
            'required' => true,
        ),
        array(
            'name' =>__( 'Halim Custom Post', 'halim'),
            'slug' => 'halim-custom-post',
            'source' => get_template_directory().'/plugins/halim-custom-post.zip',
            'required' => true,
        ),
        array(
            'name' => __('Advanced Custom Fields Pro', 'halim'),
            'slug' => 'advanced-custom-field-pro',
            'source' => get_template_directory().'/plugins/advanced-custom-fields-pro.zip',
            'required' => true,
        )
    );
    $config = array(
        'id' => 'halim-plugin-active',
        'menu' => 'Halim Plugin Activation',
        'parent_slug' => 'themes.php',
        'has_notices'  => true, 
    );

    tgmpa( $plugins, $config );

}
add_action('tgmpa_register', 'halim_plugin_activation');


function halim_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by('name', 'Primary Menu', 'nav_menu');

    set_theme_mod('nav_menu_locations', array(
        'primary-menu' => $main_menu->term_id
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title('Home');
    //$blog_page_id = get_page_by_title('Blog');

    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
    //update_option('page_for_posts', $blog_page_id->ID);
}

add_action('pt-ocdi/after_import', 'halim_after_import_setup');