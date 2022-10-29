<?php

// template category register 
function template_category() {

$labels = array(
    'name'                       => _x( 'Template Category', 'Taxonomy General Name', 'lskit' ),
    'singular_name'              => _x( 'Template Category', 'Taxonomy Singular Name', 'lskit' ),
    'menu_name'                  => __( 'Template Category', 'lskit' ),
    'all_items'                  => __( 'All Items', 'lskit' ),
    'parent_item'                => __( 'Parent Item', 'lskit' ),
    'parent_item_colon'          => __( 'Parent Item:', 'lskit' ),
    'new_item_name'              => __( 'New Item Name', 'lskit' ),
    'add_new_item'               => __( 'Add New Item', 'lskit' ),
    'edit_item'                  => __( 'Edit Item', 'lskit' ),
    'update_item'                => __( 'Update Item', 'lskit' ),
    'view_item'                  => __( 'View Item', 'lskit' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'lskit' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'lskit' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'lskit' ),
    'popular_items'              => __( 'Popular Items', 'lskit' ),
    'search_items'               => __( 'Search Items', 'lskit' ),
    'not_found'                  => __( 'Not Found', 'lskit' ),
    'no_terms'                   => __( 'No items', 'lskit' ),
    'items_list'                 => __( 'Items list', 'lskit' ),
    'items_list_navigation'      => __( 'Items list navigation', 'lskit' ),
);
$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);
register_taxonomy( 'template_category', array( '' ), $args );

}
add_action( 'init', 'template_category', 0 );