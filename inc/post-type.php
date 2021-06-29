<?php
// Register Careers custom Post Type
function announcements_post_type() {
    $labels = array(
        'name' => __('Announcements', 'Post Type General Name', 'post-type'),
        'singular_name' => _x('Announcements', 'Post Type Singular Name', 'post-type'),
        'menu_name' => __('Announcements', 'post-type'),
        'parent_item_colon' => __('Parent Announcements:', 'post-type'),
        'all_items' => __('All', 'post-type'),
        'view_item' => __('View Announcements', 'post-type'),
        'add_new_item' => __('Add New Announcements', 'post-type'),
        'add_new' => __('Add New', 'post-type'),
        'edit_item' => __('Edit Announcements', 'post-type'),
        'update_item' => __('Update Announcements', 'post-type'),
        'search_items' => __('Search Announcements', 'post-type'),
        'not_found' => __('Not found', 'post-type'),
        'not_found_in_trash' => __('Not found in Trash', 'post-type'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title','revisions','editor','thumbnail',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-editor-ol',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,


    );
    register_post_type('announcements', $args);
}

// Hook into the 'init' action
add_action('init', 'announcements_post_type', 0);


//register taxonomy for custom post tags
register_taxonomy( 
'announcements-tag', //taxonomy 
'announcements', //post-type
array( 
    'hierarchical'  => false, 
    'label'         => __( 'Tags','taxonomy general name'), 
    'singular_name' => __( 'Tag', 'taxonomy general name' ), 
    'rewrite'       => true, 
    'query_var'     => true 
));



// Register events custom Post Type
function events_post_type() {
    $labels = array(
        'name' => __('events', 'Post Type General Name', 'post-type'),
        'singular_name' => _x('event', 'Post Type Singular Name', 'post-type'),
        'menu_name' => __('Events', 'post-type'),
        'parent_item_colon' => __('Parent event:', 'post-type'),
        'all_items' => __('All', 'post-type'),
        'view_item' => __('View event', 'post-type'),
        'add_new_item' => __('Add New event', 'post-type'),
        'add_new' => __('Add New', 'post-type'),
        'edit_item' => __('Edit event', 'post-type'),
        'update_item' => __('Update event', 'post-type'),
        'search_items' => __('Search event', 'post-type'),
        'not_found' => __('Not found', 'post-type'),
        'not_found_in_trash' => __('Not found in Trash', 'post-type'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title','revisions','editor','thumbnail',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-editor-ol',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,


    );
    register_post_type('events', $args);
}

// Hook into the 'init' action
add_action('init', 'events_post_type', 0);


// Register clients custom Post Type
function clients_post_type() {
  $labels = array(
      'name' => __('client', 'Post Type General Name', 'post-type'),
      'singular_name' => _x('client', 'Post Type Singular Name', 'post-type'),
      'menu_name' => __('Clients', 'post-type'),
      'parent_item_colon' => __('Parent client:', 'post-type'),
      'all_items' => __('All', 'post-type'),
      'view_item' => __('View client', 'post-type'),
      'add_new_item' => __('Add New client', 'post-type'),
      'add_new' => __('Add New', 'post-type'),
      'edit_item' => __('Edit client', 'post-type'),
      'update_item' => __('Update client', 'post-type'),
      'search_items' => __('Search client', 'post-type'),
      'not_found' => __('Not found', 'post-type'),
      'not_found_in_trash' => __('Not found in Trash', 'post-type'),
  );
  $args = array(
      'labels' => $labels,
      'supports' => array('title','revisions','editor','thumbnail',),
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-editor-ol',
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'page',
      'show_in_rest' => true,


  );
  register_post_type('clients', $args);
}

// Hook into the 'init' action
add_action('init', 'clients_post_type', 0);



// Register Partiners custom Post Type
function partiners_post_type() {
  $labels = array(
      'name' => __('partiner', 'Post Type General Name', 'post-type'),
      'singular_name' => _x('partiner', 'Post Type Singular Name', 'post-type'),
      'menu_name' => __('Partiners', 'post-type'),
      'parent_item_colon' => __('Parent partiner:', 'post-type'),
      'all_items' => __('All', 'post-type'),
      'view_item' => __('View partiner', 'post-type'),
      'add_new_item' => __('Add New partiner', 'post-type'),
      'add_new' => __('Add New', 'post-type'),
      'edit_item' => __('Edit partiner', 'post-type'),
      'update_item' => __('Update partiner', 'post-type'),
      'search_items' => __('Search partiner', 'post-type'),
      'not_found' => __('Not found', 'post-type'),
      'not_found_in_trash' => __('Not found in Trash', 'post-type'),
  );
  $args = array(
      'labels' => $labels,
      'supports' => array('title','revisions','editor','thumbnail',),
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-editor-ol',
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'page',
      'show_in_rest' => true,


  );
  register_post_type('partiners', $args);
}

// Hook into the 'init' action
add_action('init', 'partiners_post_type', 0);


// Register products custom Post Type
function products_post_type() {
  $labels = array(
      'name' => __('product', 'Post Type General Name', 'post-type'),
      'singular_name' => _x('product', 'Post Type Singular Name', 'post-type'),
      'menu_name' => __('Products', 'post-type'),
      'parent_item_colon' => __('Parent product:', 'post-type'),
      'all_items' => __('All', 'post-type'),
      'view_item' => __('View product', 'post-type'),
      'add_new_item' => __('Add New product', 'post-type'),
      'add_new' => __('Add New', 'post-type'),
      'edit_item' => __('Edit product', 'post-type'),
      'update_item' => __('Update product', 'post-type'),
      'search_items' => __('Search product', 'post-type'),
      'not_found' => __('Not found', 'post-type'),
      'not_found_in_trash' => __('Not found in Trash', 'post-type'),
  );
  $args = array(
      'labels' => $labels,
      'supports' => array('title','revisions','editor','thumbnail',),
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-editor-ol',
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'page',
      'show_in_rest' => true,


  );
  register_post_type('products', $args);
}

// Hook into the 'init' action
add_action('init', 'products_post_type', 0);



// Register galleries custom Post Type
function gallery_post_type() {
  $labels = array(
      'name' => __('gallery', 'Post Type General Name', 'post-type'),
      'singular_name' => _x('gallery', 'Post Type Singular Name', 'post-type'),
      'menu_name' => __('gallery', 'post-type'),
      'parent_item_colon' => __('Parent gallery:', 'post-type'),
      'all_items' => __('All', 'post-type'),
      'view_item' => __('View gallery', 'post-type'),
      'add_new_item' => __('Add New gallery', 'post-type'),
      'add_new' => __('Add New', 'post-type'),
      'edit_item' => __('Edit gallery', 'post-type'),
      'update_item' => __('Update gallery', 'post-type'),
      'search_items' => __('Search gallery', 'post-type'),
      'not_found' => __('Not found', 'post-type'),
      'not_found_in_trash' => __('Not found in Trash', 'post-type'),
  );
  $args = array(
      'labels' => $labels,
      'supports' => array('title','revisions','editor','thumbnail',),
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-editor-ol',
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'page',
      'show_in_rest' => true,


  );
  register_post_type('gallery', $args);
}

// Hook into the 'init' action
add_action('init', 'gallery_post_type', 0);

//register taxonomy for custom post tags
register_taxonomy( 
'products-tag', //taxonomy 
'products', //post-type
array( 
  'hierarchical'  => false, 
  'label'         => __( 'Products Tags','taxonomy general name'), 
  'singular_name' => __( 'Products Tag', 'taxonomy general name' ), 
  'rewrite'       => true, 
  'query_var'     => true 
));