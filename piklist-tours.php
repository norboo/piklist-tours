<?php
/*
Plugin Name: Piklist Tours
Plugin URI: http://eruisw.com
Description: Create Tours
Version: 1.3.1
Author: Paul Istrate
Author URI: http://eruisw.com
Plugin Type: Piklist
License: GPL2
Domain Path: /languages
Text Domain: piklist-tours
GitHub Plugin URI: https://github.com/norboo/piklist-tours
GitHub Branch: master
*/

add_filter('piklist_post_types', 'custom_post_type');
function custom_post_type($post_types)
{
    $post_types['tour'] = array(
        'labels' => piklist('post_type_labels', 'Tours')
        ,'title' => __('Enter a new Tour Title')
        ,'public' => true
        ,'rewrite' => array(
            'slug' => 'tour'
        )
        ,'show_in_rest'       => true
        ,'rest_base'          => 'tours'
        ,'rest_controller_class' => 'WP_REST_Posts_Controller'
        ,'supports' => array(
            'title'
            ,'excerpt'
            ,'thumbnail'
        )
    );
        
    $post_types['gallery'] = array(
        'labels' => piklist('post_type_labels', 'Galleries')
        ,'title' => __('Enter a new Gallery Title')
        ,'public' => true
        ,'rewrite' => array(
            'slug' => 'gallery'
        )
        ,'show_in_rest'       => true
        ,'rest_base'          => 'tours'
        ,'rest_controller_class' => 'WP_REST_Posts_Controller'
        ,'supports' => array(
            'title'
            ,'excerpt'
            ,'thumbnail'
        )
    );
    $post_types['profile'] = array(
        'labels' => piklist('post_type_labels', 'Profiles')
        ,'title' => __('Enter a new Profile')
        ,'public' => true
        ,'rewrite' => array(
            'slug' => 'profile'
        )
        ,'supports' => array(
            'title'
            ,'excerpt'
            ,'thumbnail'
        )
    );
    return $post_types;
}

add_filter('piklist_taxonomies', 'custom_taxonomies');
  function custom_taxonomies($taxonomies)
  {
    $taxonomies[] = array(
      'post_type' => 'tour'
      ,'name' => 'tour_type'
      ,'configuration' => array(
        'hierarchical' => true
        ,'labels' => piklist('taxonomy_labels', 'Tour Types')
        ,'page_icon' => plugins_url('parts/img/piklist-page-icon-32.png')
        ,'show_ui' => true
        ,'query_var' => true
        ,'rewrite' => array( 
          'slug' => '' 
        )
        ,'show_admin_column' => true
        ,'comments' => true
      )
    );
    
    $taxonomies[] = array(
      'post_type' => 'gallery'
      ,'name' => 'gallery_category'
      ,'configuration' => array(
        'hierarchical' => true
        ,'labels' => piklist('taxonomy_labels', 'Gallery Categories')
        ,'page_icon' => plugins_url('parts/img/piklist-page-icon-32.png')
        ,'show_ui' => true
        ,'query_var' => true
        ,'rewrite' => array( 
          'slug' => '' 
        )
        ,'show_admin_column' => true
        ,'comments' => true
      )
    );
    
    return $taxonomies;
  }

add_filter('piklist_field_templates', 'my_custom_field_template');
function my_custom_field_template($templates)
{
    $templates['full-width'] = array(
        'name' => __('Post Meta Custom', 'piklist')
        ,'description' => __('My template for Post Meta', 'piklist')
        ,'template' => '[field_wrapper]
                         <div class="%2$s my-custom-css-class" id="%1$s">
                          <div class="piklist-full-width" style="padding:10px;background-color:#f2f2f2;margin-top:10px;border-bottom:2px solid #ccc;">
                            <div style="padding-bottom:10px;">
                            [field_label]
                            [field_description_wrapper]
                              <span class="piklist-field-description">[field_description]</span>
                            [/field_description_wrapper]
                            </div>
                          <div>[field]</div>
                         </div>
                        </div>
                      [/field_wrapper]'
    );
    return $templates;
}