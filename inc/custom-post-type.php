<?php 

add_action( 'init', 'team' );
function team() {
    $labels = array(
        'name'               => _x( 'Team', 'post type general name' ),
        'singular_name'      => _x( 'Team', 'admin menu' ),
        'name_admin_bar'     => _x( 'Team', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Team' ),
        'add_new_item'       => __( 'Add New Team' ),
        'new_item'           => __( 'New Team' ),
        'view_item'          => __( 'View Team' ),
        'all_items'          => __( 'All Team' ),
        'parent_item_colon'  => __( 'Parent Team:' ),
        'not_found'          => __( 'No team found.' ),
        'not_found_in_trash' => __( 'No team members found in Trash.' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
         'rewrite'           => array( 'slug' => 'team', 'with_front' => false  ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-groups',
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_taxonomy( 'team-member', array( 'team' ), $args );
    register_post_type( 'team', $args );
}

add_action( 'init', 'workshops' );
function workshops() {
    $labels = array(
        'name'               => _x( 'Workshops', 'post type general name' ),
        'singular_name'      => _x( 'Workshop', 'admin menu' ),
        'name_admin_bar'     => _x( 'Workshops', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Workshops' ),
        'add_new_item'       => __( 'Add New Workshops' ),
        'new_item'           => __( 'New Workshops' ),
        'view_item'          => __( 'View Workshops' ),
        'all_items'          => __( 'All Workshops' ),
        'parent_item_colon'  => __( 'Parent Workshops:' ),
        'not_found'          => __( 'No workshops found.' ),
        'not_found_in_trash' => __( 'No workshops members found in Trash.' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
         'rewrite'           => array( 'slug' => 'workshops', 'with_front' => false  ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-format-status',
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_taxonomy( 'workshops', array( 'workshops' ), $args );
    register_post_type( 'workshops', $args );
}