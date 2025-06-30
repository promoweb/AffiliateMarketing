<?php
/**
 * Registers the Product Review Custom Post Type.
 *
 * @package    Affiliate_Marketing_Plugin
 * @subpackage Affiliate_Marketing_Plugin/post-types
 * @author     Your Name <email@example.com>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Register the Product Review Custom Post Type.
 */
function amp_register_product_review_cpt() {
    $labels = array(
        'name'                  => _x( 'Product Reviews', 'Post Type General Name', 'affiliate-marketing-plugin' ),
        'singular_name'         => _x( 'Product Review', 'Post Type Singular Name', 'affiliate-marketing-plugin' ),
        'menu_name'             => __( 'Product Reviews', 'affiliate-marketing-plugin' ),
        'name_admin_bar'        => __( 'Product Review', 'affiliate-marketing-plugin' ),
        'archives'              => __( 'Product Review Archives', 'affiliate-marketing-plugin' ),
        'attributes'            => __( 'Product Review Attributes', 'affiliate-marketing-plugin' ),
        'parent_item_colon'     => __( 'Parent Product Review:', 'affiliate-marketing-plugin' ),
        'all_items'             => __( 'All Product Reviews', 'affiliate-marketing-plugin' ),
        'add_new_item'          => __( 'Add New Product Review', 'affiliate-marketing-plugin' ),
        'add_new'               => __( 'Add New', 'affiliate-marketing-plugin' ),
        'new_item'              => __( 'New Product Review', 'affiliate-marketing-plugin' ),
        'edit_item'             => __( 'Edit Product Review', 'affiliate-marketing-plugin' ),
        'update_item'           => __( 'Update Product Review', 'affiliate-marketing-plugin' ),
        'view_item'             => __( 'View Product Review', 'affiliate-marketing-plugin' ),
        'view_items'            => __( 'View Product Reviews', 'affiliate-marketing-plugin' ),
        'search_items'          => __( 'Search Product Review', 'affiliate-marketing-plugin' ),
        'not_found'             => __( 'Not found', 'affiliate-marketing-plugin' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'affiliate-marketing-plugin' ),
        'featured_image'        => __( 'Featured Image', 'affiliate-marketing-plugin' ),
        'set_featured_image'    => __( 'Set featured image', 'affiliate-marketing-plugin' ),
        'remove_featured_image' => __( 'Remove featured image', 'affiliate-marketing-plugin' ),
        'use_featured_image'    => __( 'Use as featured image', 'affiliate-marketing-plugin' ),
        'insert_into_item'      => __( 'Insert into Product Review', 'affiliate-marketing-plugin' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Product Review', 'affiliate-marketing-plugin' ),
        'items_list'            => __( 'Product Reviews list', 'affiliate-marketing-plugin' ),
        'items_list_navigation' => __( 'Product Reviews list navigation', 'affiliate-marketing-plugin' ),
        'filter_items_list'     => __( 'Filter Product Reviews list', 'affiliate-marketing-plugin' ),
    );
    $args = array(
        'label'                 => __( 'Product Review', 'affiliate-marketing-plugin' ),
        'description'           => __( 'Custom Post Type for Product Reviews with affiliate links', 'affiliate-marketing-plugin' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-star-filled',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'product_review', $args );
}

// Hook into the 'init' action
add_action( 'init', 'amp_register_product_review_cpt', 0 );
