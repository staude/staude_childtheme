<?php
/**
 * Created by PhpStorm.
 * User: staude
 * Date: 04.10.14
 * Time: 13:17
 */

add_action( 'init', 'staude_page_excerpts' );

function staude_page_excerpts() {
    add_post_type_support( 'page', 'excerpt' );
}



if ( ! function_exists('vortraege_cpt') ) {

// Register Custom Post Type
	function vortraege_cpt() {

		$labels = array(
			'name'                => _x( 'Vorträge', 'Post Type General Name', 'staude_theme' ),
			'singular_name'       => _x( 'Vortrag', 'Post Type Singular Name', 'staude_theme' ),
			'menu_name'           => __( 'Vorträge', 'staude_theme' ),
			'parent_item_colon'   => __( 'Eltern Vortrag', 'staude_theme' ),
			'all_items'           => __( 'Alle Vorträge', 'staude_theme' ),
			'view_item'           => __( 'Vortrag ansehen', 'staude_theme' ),
			'add_new_item'        => __( 'Neuen Vortrag', 'staude_theme' ),
			'add_new'             => __( 'Neuen Vortrag', 'staude_theme' ),
			'edit_item'           => __( 'Vortrag bearbeiten', 'staude_theme' ),
			'update_item'         => __( 'Vortrag aktualisieren', 'staude_theme' ),
			'search_items'        => __( 'Vortrag suchen', 'staude_theme' ),
			'not_found'           => __( 'Kein Vortrag gefunden', 'staude_theme' ),
			'not_found_in_trash'  => __( 'Kein Vortrag im Müll gefunden', 'staude_theme' ),
		);
		$rewrite = array(
			'slug'                => 'vortraege',
			'with_front'          => true,
			'pages'               => true,
			'feeds'               => true,
		);
		$args = array(
			'label'               => __( 'vortraege', 'staude_theme' ),
			'description'         => __( 'Vorträge', 'staude_theme' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);
		register_post_type( 'vortraege', $args );

	}

// Hook into the 'init' action
	add_action( 'init', 'vortraege_cpt', 0 );
}


if ( ! function_exists('blog_cpt') ) {

// Register Custom Post Type
    function blog_cpt() {

        $labels = array(
            'name'                => _x( 'Blog', 'Post Type General Name', 'staude_theme' ),
            'singular_name'       => _x( 'Blog Type', 'Post Type Singular Name', 'staude_theme' ),
            'menu_name'           => __( 'Blog', 'staude_theme' ),
            'parent_item_colon'   => __( 'Parent Item:', 'staude_theme' ),
            'all_items'           => __( 'All Items', 'staude_theme' ),
            'view_item'           => __( 'View Item', 'staude_theme' ),
            'add_new_item'        => __( 'Add New Item', 'staude_theme' ),
            'add_new'             => __( 'Add New', 'staude_theme' ),
            'edit_item'           => __( 'Edit Item', 'staude_theme' ),
            'update_item'         => __( 'Update Item', 'staude_theme' ),
            'search_items'        => __( 'Search Item', 'staude_theme' ),
            'not_found'           => __( 'Not found', 'staude_theme' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'staude_theme' ),
        );
        $rewrite = array(
            'slug'                => 'blog',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'blog', 'staude_theme' ),
            'description'         => __( 'Blog', 'staude_theme' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'blog', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'blog_cpt', 0 );

}

