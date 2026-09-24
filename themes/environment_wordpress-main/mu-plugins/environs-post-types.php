<?php

function environs_post_types()
{

    // About post Type
    register_post_type('about', array(
      'show_in_rest' => true,
      'supports' => array('title','editor', 'thumbnail'),
      'rewrite' => array('slug' => 'about'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'About Us',
        'add_new_item' => 'Add New About Us',
        'edit_item' => 'Edit About Us',
        'all_items' => 'All About Us',
        'singular_name' => 'About Us'
      ),
      'menu_icon' => 'dashicons-groups'
    ));
    // Services Post Type
    register_post_type('service', array(
      'show_in_rest' => true,
      'supports' => array('title','editor', 'thumbnail'),
      'rewrite' => array('slug' => 'service'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Services',
        'add_new_item' => 'Add New Service',
        'edit_item' => 'Edit Service',
        'all_items' => 'All Services',
        'singular_name' => 'Service'
      ),
      'menu_icon' => 'dashicons-admin-generic'
    ));
  // // Campus Post Type
  // register_post_type('campus', array(
  //   // to add new Role User 
  //   'capability_type' => 'campus_test_role_nehad',
  //   // to add new Role User 
  //   'map_meta_cap' => true,

  //   'show_in_rest' => true,
  //   'supports' => array('title', 'editor', 'excerpt'),
  //   'rewrite' => array('slug' => 'campuses'),
  //   'has_archive' => true,
  //   'public' => true,
  //   'labels' => array(
  //     'name' => 'Campuses',
  //     'add_new_item' => 'Add New Campus',
  //     'edit_item' => 'Edit Campus',
  //     'all_items' => 'All Campuses',
  //     'singular_name' => 'Campus'
  //   ),
  //   'menu_icon' => 'dashicons-location-alt'
  // ));


  // Program Post Type
  // register_post_type('program', array(
  //   'show_in_rest' => true,
  //   'supports' => array('title'),
  //   'rewrite' => array('slug' => 'programs'),
  //   'has_archive' => true,
  //   'public' => true,
  //   'labels' => array(
  //     'name' => 'Programs',
  //     'add_new_item' => 'Add New Program',
  //     'edit_item' => 'Edit Program',
  //     'all_items' => 'All Programs',
  //     'singular_name' => 'Program'
  //   ),
  //   'menu_icon' => 'dashicons-awards'
  // ));


  // // Professor Post Type
  // register_post_type('professor', array(
  //   'show_in_rest' => true,
  //   'supports' => array('title', 'editor', 'thumbnail'),
  //   'public' => true,
  //   'labels' => array(
  //     'name' => 'Professors',
  //     'add_new_item' => 'Add New Professor',
  //     'edit_item' => 'Edit Professor',
  //     'all_items' => 'All Professors',
  //     'singular_name' => 'Professor'
  //   ),
  //   'menu_icon' => 'dashicons-welcome-learn-more'
  // ));
  // // Note Post Type
  // register_post_type('note', array(
  //   'capability_type' => 'note',
  //   'map_meta_cap' => true,
  //   'show_in_rest' => true,
  //   'supports' => array('title', 'editor'),
  //   // disable or Enable show public in Admin or clint
  //   'public' => false,
  //   // disable or Enable show just for admin dashboard
  //   'show_ui' => true,
  //   'labels' => array(
  //     'name' => 'Notes',
  //     'add_new_item' => 'Add New Note',
  //     'edit_item' => 'Edit Note',
  //     'all_items' => 'All Notes',
  //     'singular_name' => 'Note'
  //   ),
  //   'menu_icon' => 'dashicons-welcome-write-blog'
  // ));
  // // Likes hert 
  // register_post_type('like', array(
  //   'supports' => array('title') ,
  //   'public' => false,
  //   'show_ui' => true,
  //   'labels' => array(
  //     'name' => 'Likes',
  //     'add_new_item' => 'Add New Like',
  //     'edit_item' => 'Edit Note',
  //     'all_items' => 'All Likes',
  //     'singular_name' => 'Like'
  //   ),
  //   'menu_icon' => 'dashicons-heart'
  // ));
}

add_action('init', 'environs_post_types');
