<?php

// Register Custom Taxonomy
function announcements_categories() {

    $labels = array(
        'name' => 'Categories',
        'singular_name' => 'announcements',
        'menu_name' => 'Categories',
        'all_items' => 'All Categories',
        'parent_item' => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'new_item_name' => 'New Item Category',
        'add_new_item' => 'Add New Category',
        'edit_item' => 'Edit Category',
        'update_item' => 'Update Category',
        'separate_items_with_commas' => 'Separate items with commas',
        'search_items' => 'Search Categories',
        'add_or_remove_items' => 'Add or remove Categories',
        'choose_from_most_used' => 'Choose from the most used Categories',
        'not_found' => 'Not Found',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('announcements-category', array('announcements'), $args);
}

// Hook into the 'init' action
add_action('init', 'announcements_categories', 0);


// Register Custom Taxonomy
function events_categories() {

  $labels = array(
      'name' => 'events Categories',
      'singular_name' => 'events',
      'menu_name' => 'Categories',
      'all_items' => 'All Categories',
      'parent_item' => 'Parent Category',
      'parent_item_colon' => 'Parent Category:',
      'new_item_name' => 'New Item Category',
      'add_new_item' => 'Add New Category',
      'edit_item' => 'Edit Category',
      'update_item' => 'Update Category',
      'separate_items_with_commas' => 'Separate items with commas',
      'search_items' => 'Search Categories',
      'add_or_remove_items' => 'Add or remove Categories',
      'choose_from_most_used' => 'Choose from the most used Categories',
      'not_found' => 'Not Found',
  );
  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud' => true,
  );
  register_taxonomy('events-category', array('events'), $args);
}

// Hook into the 'init' action
add_action('init', 'events_categories', 0);


// Register Custom Taxonomy
function clients_categories() {

  $labels = array(
      'name' => 'clients Categories',
      'singular_name' => 'clients',
      'menu_name' => 'Categories',
      'all_items' => 'All Categories',
      'parent_item' => 'Parent Category',
      'parent_item_colon' => 'Parent Category:',
      'new_item_name' => 'New Item Category',
      'add_new_item' => 'Add New Category',
      'edit_item' => 'Edit Category',
      'update_item' => 'Update Category',
      'separate_items_with_commas' => 'Separate items with commas',
      'search_items' => 'Search Categories',
      'add_or_remove_items' => 'Add or remove Categories',
      'choose_from_most_used' => 'Choose from the most used Categories',
      'not_found' => 'Not Found',
  );
  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud' => true,
  );
  register_taxonomy('clients-category', array('clients'), $args);
}

// Hook into the 'init' action
add_action('init', 'clients_categories', 0);


// Register Custom Taxonomy
function partiners_categories() {

  $labels = array(
      'name' => 'partiners Categories',
      'singular_name' => 'partiners',
      'menu_name' => 'Categories',
      'all_items' => 'All Categories',
      'parent_item' => 'Parent Category',
      'parent_item_colon' => 'Parent Category:',
      'new_item_name' => 'New Item Category',
      'add_new_item' => 'Add New Category',
      'edit_item' => 'Edit Category',
      'update_item' => 'Update Category',
      'separate_items_with_commas' => 'Separate items with commas',
      'search_items' => 'Search Categories',
      'add_or_remove_items' => 'Add or remove Categories',
      'choose_from_most_used' => 'Choose from the most used Categories',
      'not_found' => 'Not Found',
  );
  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud' => true,
  );
  register_taxonomy('partiners-category', array('partiners'), $args);
}

// Hook into the 'init' action
add_action('init', 'partiners_categories', 0);


// Register Custom Taxonomy
function brands_categories() {

  $labels = array(
      'name' => 'brands Categories',
      'singular_name' => 'brands',
      'menu_name' => 'brands',
      'all_items' => 'All brands',
      'parent_item' => 'Parent Category',
      'parent_item_colon' => 'Parent Category:',
      'new_item_name' => 'New Item Category',
      'add_new_item' => 'Add New Category',
      'edit_item' => 'Edit Category',
      'update_item' => 'Update Category',
      'separate_items_with_commas' => 'Separate items with commas',
      'search_items' => 'Search Categories',
      'add_or_remove_items' => 'Add or remove Categories',
      'choose_from_most_used' => 'Choose from the most used Categories',
      'not_found' => 'Not Found',
  );
  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud' => true,
  );
  register_taxonomy('brands-category', array('products'), $args);
}

// Hook into the 'init' action
add_action('init', 'brands_categories', 0);

// Register Custom Taxonomy
function family_categories() {

  $labels = array(
      'name' => 'family Categories',
      'singular_name' => 'family',
      'menu_name' => 'family',
      'all_items' => 'All family',
      'parent_item' => 'Parent Category',
      'parent_item_colon' => 'Parent Category:',
      'new_item_name' => 'New Item Category',
      'add_new_item' => 'Add New Category',
      'edit_item' => 'Edit Category',
      'update_item' => 'Update Category',
      'separate_items_with_commas' => 'Separate items with commas',
      'search_items' => 'Search Categories',
      'add_or_remove_items' => 'Add or remove Categories',
      'choose_from_most_used' => 'Choose from the most used Categories',
      'not_found' => 'Not Found',
  );
  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud' => true,
  );
  register_taxonomy('family-category', array('products'), $args);
}

// Hook into the 'init' action
add_action('init', 'family_categories', 0);

// Register Custom Taxonomy
function country_categories() {

  $labels = array(
      'name' => 'Country Categories',
      'singular_name' => 'country',
      'menu_name' => 'country',
      'all_items' => 'All country',
      'parent_item' => 'Parent Category',
      'parent_item_colon' => 'Parent Category:',
      'new_item_name' => 'New Item Category',
      'add_new_item' => 'Add New Category',
      'edit_item' => 'Edit Category',
      'update_item' => 'Update Category',
      'separate_items_with_commas' => 'Separate items with commas',
      'search_items' => 'Search Categories',
      'add_or_remove_items' => 'Add or remove Categories',
      'choose_from_most_used' => 'Choose from the most used Categories',
      'not_found' => 'Not Found',
  );
  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud' => true,
  );
  register_taxonomy('country-category', array('products'), $args);
}

// Hook into the 'init' action
add_action('init', 'country_categories', 0);