<?php
// Register Custom Post Type
function project_post_type() {

  $labels = array(
    'name'                  => _x( 'Portfolio', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Portfolio', 'text_domain' ),
    'name_admin_bar'        => __( 'Portfolio', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $rewrite = array(
    'slug'                  => 'portfolio',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );
  $args = array(
    'label'                 => __( 'Portfolio', 'text_domain' ),
    'description'           => __( 'Post Type Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => false,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'page',
  );
  register_post_type( 'project', $args );

}
add_action( 'init', 'project_post_type', 0 );

// Register Custom Taxonomy
function custom_taxonomy_project_category() {

  $labels = array(
    'name'                       => _x( 'Catégories', 'Taxonomy General Name', 'lepitch' ),
    'singular_name'              => _x( 'Catégorie', 'Taxonomy Singular Name', 'lepitch' ),
    'menu_name'                  => __( 'Catégories', 'lepitch' ),
    'all_items'                  => __( 'All Items', 'lepitch' ),
    'parent_item'                => __( 'Parent Item', 'lepitch' ),
    'parent_item_colon'          => __( 'Parent Item:', 'lepitch' ),
    'new_item_name'              => __( 'New Item Name', 'lepitch' ),
    'add_new_item'               => __( 'Add New Item', 'lepitch' ),
    'edit_item'                  => __( 'Edit Item', 'lepitch' ),
    'update_item'                => __( 'Update Item', 'lepitch' ),
    'view_item'                  => __( 'View Item', 'lepitch' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'lepitch' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'lepitch' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'lepitch' ),
    'popular_items'              => __( 'Popular Items', 'lepitch' ),
    'search_items'               => __( 'Search Items', 'lepitch' ),
    'not_found'                  => __( 'Not Found', 'lepitch' ),
    'no_terms'                   => __( 'No items', 'lepitch' ),
    'items_list'                 => __( 'Items list', 'lepitch' ),
    'items_list_navigation'      => __( 'Items list navigation', 'lepitch' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest'               => false,
  );
  register_taxonomy( 'project-category', array( 'project' ), $args );

}
add_action( 'init', 'custom_taxonomy_project_category', 0 );

function get_project()
{
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC',
    );

    $data = get_project_data($args);

    wp_reset_query();

    return $data;
}

function get_project_data($args)
{
    $testimony_data = [];
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $testimony_data[] = array(
                'title' => get_the_title(),
                'logo' => get_field('logo'),
                'excerpt' => get_the_excerpt(),
                'thumbnail' => get_the_post_thumbnail_url(),
                'permalink' => get_the_permalink(),
            );

        }
    }

    return $testimony_data;

}