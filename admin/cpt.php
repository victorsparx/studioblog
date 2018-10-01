

<?php

add_action('init', 'codex_custom_init');

function codex_custom_init() 
{
  $labels = array(

    'name' => _x('YouTubeVideo', 'post type general name'),

    'singular_name' => _x('YouTubeVideo', 'post type singular name'),

    'add_new' => _x('Add New', 'book'),

    'add_new_item' => __('Add New YouTubeVideo'),

    'edit_item' => __('Edit YouTubeVideo'),

    'new_item' => __('New YouTubeVideo'),

    'all_items' => __('All YouTubeVideo'),

    'view_item' => __('View YouTubeVideo'),

    'search_items' => __('Search YouTubeVideo'),

    'not_found' =>  __('No YouTubeVideo found'),

    'not_found_in_trash' => __('No YouTubeVideo found in Trash'), 

    'parent_item_colon' => '',

    'menu_name' => 'YouTubeVideo'
  );

  $args = array(

    'labels' => $labels,

    'public' => true,

    'publicly_queryable' => true,

    'show_ui' => true, 

    'show_in_menu' => true, 

    'query_var' => true,

    'rewrite' => true,

    'capability_type' => 'post',

    'has_archive' => true, 

    'hierarchical' => false,

    'menu_position' => null,

    'supports' => array('title','thumbnail')

  ); 
  register_post_type('youtubevideo',$args);
}

?>