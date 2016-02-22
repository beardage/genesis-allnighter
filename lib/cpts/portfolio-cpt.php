<?php

function an_portfolio_cpt() {
  $labels = array(
    'name'               => _x( 'Portfolio' ),
    'singular_name'      => _x( 'Portfolio Item' ),
    'add_new'            => _x( 'Add New' ),
    'add_new_item'       => __( 'Add New Portfolio Item' ),
    'edit_item'          => __( 'Edit Portfolio Item' ),
    'new_item'           => __( 'New Portfolio Item' ),
    'all_items'          => __( 'All Portfolio Items' ),
    'view_item'          => __( 'View Portfolio Item' ),
    'search_items'       => __( 'Search Portfolio Items' ),
    'not_found'          => __( 'No products found' ),
    'not_found_in_trash' => __( 'No products found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolio'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'portfolio items',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'portfolio', $args );
}
add_action( 'init', 'an_portfolio_cpt' );
